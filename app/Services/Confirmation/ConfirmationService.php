<?php

declare(strict_types=1);

namespace App\Services\Confirmation;

use App\Data\ConfirmationRequestData;
use App\Enum\ProcessSMSTxn;
use App\Exceptions\Confirmation\AuthenticationFailedException;
use App\Exceptions\Confirmation\BusinessProfileNotFoundException;
use App\Exceptions\Confirmation\DuplicateTransactionException;
use App\Exceptions\Confirmation\HashValidationException;
use App\Services\Business\BusinessProfileService;
use App\Services\Logging\LoggingService;
use App\Services\Sms\SmsQueueService;

final readonly class ConfirmationService
{
    public function __construct(
        private BusinessProfileService $profiles,
        private AuthenticationService $authentication,
        private HashValidationService $hashValidation,
        private TransactionService $transactions,
        private SmsQueueService $sms,
        private LoggingService $logger,
    ) {
    }

    /**
     * @throws HashValidationException
     * @throws AuthenticationFailedException
     * @throws BusinessProfileNotFoundException
     */
    public function process(ConfirmationRequestData $request): void
    {
        $process = ProcessSMSTxn::YES;
        $profile = $this->profiles->find($request);

        try {
            if (config('confirmation.authenticate')) {
                $this->authentication->authenticate($request, $profile);
                $this->hashValidation->validate($request, $profile);
            }

            $this->logger->info(
                'PASSED_DATA',
                $request->sanitized(),
            );

            $this->transactions->ensureNotDuplicate($request);
        } catch (HashValidationException|AuthenticationFailedException $e) {
            $process = ProcessSMSTxn::NO;

            $this->logger->notice(
                $e->getMessage()
            );
        } catch (DuplicateTransactionException $e) {
            $this->logger->notice(
                $e->getMessage(),
                ['transaction_id' => $e->transactionId],
            );

            return;
        }

        if (config('app.debug') && $request->billReference === 'test') {
            return;
        }

        $this->transactions->store($request, $process);

        $this->sms->queue($request, $process);
    }
}
