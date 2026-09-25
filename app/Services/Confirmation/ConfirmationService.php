<?php

declare(strict_types=1);

namespace App\Services\Confirmation;

use App\Contracts\Business\BusinessProfileServiceInterface;
use App\Contracts\Confirmation\AuthenticationServiceInterface;
use App\Contracts\Confirmation\HashValidationServiceInterface;
use App\Contracts\Confirmation\TransactionServiceInterface;
use App\Contracts\Logging\LoggingServiceInterface;
use App\Contracts\Sms\SmsQueueServiceInterface;
use App\Data\ConfirmationRequestData;
use App\Enum\ProcessSMSTxn;
use App\Exceptions\Confirmation\AuthenticationFailedException;
use App\Exceptions\Confirmation\BusinessProfileNotFoundException;
use App\Exceptions\Confirmation\DuplicateTransactionException;
use App\Exceptions\Confirmation\HashValidationException;

final readonly class ConfirmationService
{
    public function __construct(
        private BusinessProfileServiceInterface $profiles,
        private AuthenticationServiceInterface $authentication,
        private HashValidationServiceInterface $hashValidation,
        private TransactionServiceInterface $transactions,
        private SmsQueueServiceInterface $sms,
        private LoggingServiceInterface $logger,
    ) {
        //
    }

    /**
     * @throws BusinessProfileNotFoundException
     */
    public function process(ConfirmationRequestData $request): void
    {
        $process = ProcessSMSTxn::NO;
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
