<?php

declare(strict_types=1);

namespace App\Services\Sap;

use App\Models\BusinessProfile;
use App\Models\ConfirmationTransaction;
use Carbon\Carbon;

final readonly class SapConfiguration
{
    public function __construct(private BusinessProfile $profile)
    {
        //
    }

    public function file(): string
    {
        return $this->profile->sap_file;
    }

    /**
     * @return list<string>
     */
    public function headers(): array
    {
        return collect($this->profile->sap_headers)
            ->pluck('header')
            ->all();
    }

    /**
     * @return list<string>
     */
    public function row(ConfirmationTransaction $transaction): array
    {
        return collect($this->profile->sap_headers)
            ->map(fn (array $column): mixed => $this->resolve(
                $column['source'],
                $transaction,
            ))
            ->all();
    }

    private function resolve(string $source, ConfirmationTransaction $transaction): mixed
    {
        if (str_starts_with($source, 'profile.')) {
            return $this->profile->getAttribute(substr($source, 8));
        }

        if (str_starts_with($source, 'transaction.')) {
            return $transaction->getAttribute(substr($source, 12));
        }

        return match ($source) {
            'businessTransaction' => $this->businessTransaction(),
            'transactionText' => $this->transactionText($transaction),
            'postingDate',
            'documentDate' => $this->postingDate($transaction),
            default => throw new \InvalidArgumentException(
                sprintf('Unknown SAP source [%s]', $source)
            ),
        };
    }

    private function businessTransaction(): string
    {
        return str_replace(
            '_',
            ' ',
            $this->profile->business_transaction,
        );
    }

    private function transactionText(ConfirmationTransaction $transaction): string
    {
        return sprintf(
            '%s-%s-%s',
            $transaction->transaction_id,
            $transaction->bill_reference,
            $transaction->customer_name,
        );
    }

    private function postingDate(ConfirmationTransaction $transaction): string
    {
        return Carbon::parse(
            $transaction->created_at,
        )->format('Ymd');
    }
}
