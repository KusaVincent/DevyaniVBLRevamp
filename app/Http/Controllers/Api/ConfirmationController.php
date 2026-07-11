<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api;

use App\Data\ConfirmationRequestData;
use App\Exceptions\Confirmation\ConfirmationException;
use App\Http\Controllers\Controller;
use App\Services\Confirmation\ConfirmationService;
use App\Services\Logging\LoggingService;
use App\Services\Logging\Sanitizer;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Throwable;

final class ConfirmationController extends Controller
{
    public function __construct(
        private readonly ConfirmationService $confirmationService,
        private readonly LoggingService $logger,
    ) {
    }

    public function __invoke(Request $request): JsonResponse
    {
        try {
            $payload = ConfirmationRequestData::fromArray($request->all());

            $this->logger->info(
                'RECEIVED_PAYLOAD',
                Sanitizer::payload($payload)
            );

            $this->confirmationService->process($payload);

            return response()->json([
                'ResultCode' => 0,
                'ResultDesc' => 'Data received successfully',
            ]);
        } catch (ConfirmationException $e) {
            $this->logger->error(
                $e->getMessage(),
                [
                    'exception' => [
                        'class' => $e::class,
                        'message' => $e->getMessage(),
                        'file' => $e->getFile(),
                        'line' => $e->getLine(),
                    ],
                ]
            );

            return response()->json([
                'ResultCode' => $e->resultCode(),
                'ResultDesc' => $e->resultDescription('Invalid JSON data'),
            ]);
        } catch (Throwable $e) {
            $this->logger->error(
                'Unhandled exception.',
                [
                    'exception' => [
                        'class' => $e::class,
                        'message' => $e->getMessage(),
                        'file' => $e->getFile(),
                        'line' => $e->getLine(),
                    ],
                ]
            );

            return response()->json([
                'ResultCode' => 1,
                'ResultDesc' => 'An unexpected error occurred.',
            ], 500);
        }
    }
}
