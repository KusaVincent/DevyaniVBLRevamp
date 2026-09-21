<?php

declare(strict_types=1);

namespace App\Data;

use App\Exceptions\Confirmation\InvalidPayloadException;

/**
 * @phpstan-type ConfirmationPayload array{
 *     Hash: string,
 *     Mobile: string,
 *     Username: string,
 *     Password: string,
 *     name: string,
 *     TransAmount: string|int|float,
 *     TransID: string,
 *     TransTime: string,
 *     TransType: string,
 *     BillRefNumber: string,
 *     BusinessShortCode: string,
 *     FTRef?: string,
 *     Narrative?: string,
 *     created_at?: string
 * }
 */
final readonly class ConfirmationRequestData
{
    public function __construct(
        public string $hash,
        public string $mobile,
        public string $amount,
        public ?string $ftRef,
        public string $username,
        public string $password,
        public ?string $createdAt,
        public ?string $narrative,
        public string $customerName,
        public string $billReference,
        public string $transactionId,
        public string $transactionTime,
        public string $transactionType,
        public string $businessShortCode,
    ) {}

    /**
     * @param  array<string, mixed>  $payload
     *
     * @throws InvalidPayloadException
     */
    public static function fromArray(array $payload): self
    {
        foreach (
            [
                'Hash',
                'name',
                'Mobile',
                'TransID',
                'Username',
                'Password',
                'TransTime',
                'TransType',
                'TransAmount',
                'BillRefNumber',
                'BusinessShortCode',
            ] as $field
        ) {
            if (! array_key_exists($field, $payload)) {
                throw new InvalidPayloadException(
                    'Missing required field: '.$field
                );
            }
        }

        return new self(
            hash: (string) $payload['Hash'],
            mobile: (string) $payload['Mobile'],

            amount: self::formatAmount($payload['TransAmount']),
            ftRef: array_key_exists('FTRef', $payload)
                ? (string) $payload['FTRef']
                : null,

            username: (string) $payload['Username'],
            password: (string) $payload['Password'],

            createdAt: array_key_exists('created_at', $payload)
                ? (string) $payload['created_at']
                : null,
            narrative: array_key_exists('Narrative', $payload)
                ? (string) $payload['Narrative']
                : null,

            customerName: (string) $payload['name'],
            billReference: (string) $payload['BillRefNumber'],
            transactionId: (string) $payload['TransID'],

            transactionTime: (string) $payload['TransTime'],
            transactionType: (string) $payload['TransType'],
            businessShortCode: (string) $payload['BusinessShortCode'],
        );
    }

    /**
     * @return array<string, string>
     */
    public function toArray(): array
    {
        $data = [
            'Hash' => $this->hash,
            'Mobile' => $this->mobile,
            'Username' => $this->username,
            'Password' => $this->password,
            'name' => $this->customerName,
            'TransAmount' => $this->amount,
            'TransID' => $this->transactionId,
            'TransTime' => $this->transactionTime,
            'TransType' => $this->transactionType,
            'BillRefNumber' => $this->billReference,
            'BusinessShortCode' => $this->businessShortCode,
        ];

        if ($this->createdAt !== null) {
            $data['created_at'] = $this->createdAt;
        }

        if ($this->ftRef !== null) {
            $data['FTRef'] = $this->ftRef;
        }

        if ($this->narrative !== null) {
            $data['Narrative'] = $this->narrative;
        }

        return $data;
    }

    /**
     * Return payload data safe for logging.
     *
     * @return array<string, string>
     */
    public function sanitized(): array
    {
        $data = $this->toArray();

        foreach (['Username', 'Password', 'Hash'] as $field) {
            if (array_key_exists($field, $data)) {
                $data[$field] = '***';
            }
        }

        return $data;
    }

    private static function formatAmount(float|int|string $amount): string
    {
        return str_replace(
            ',',
            '',
            number_format((float) $amount, 1),
        );
    }
}
