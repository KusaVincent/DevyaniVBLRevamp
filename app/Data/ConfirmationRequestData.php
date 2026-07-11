<?php

declare(strict_types=1);

namespace App\Data;

use App\Exceptions\Confirmation\InvalidPayloadException;

final readonly class ConfirmationRequestData
{
    public function __construct(
        public string $hash,
        public string $mobile,
        public string $amount,
        public string $username,
        public string $password,
        public string $createdAt,
        public string $customerName,
        public string $billReference,
        public string $transactionId,
        public string $transactionTime,
        public string $transactionType,
        public string $businessShortCode,
    ) {
    }

    /**
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
                 'created_at',
                 'TransAmount',
                 'BillRefNumber',
                 'BusinessShortCode',
            ] as $field) {
            if (! array_key_exists($field, $payload)) {
                throw new InvalidPayloadException(
                    "Missing required field: {$field}"
                );
            }
        }

        return new self(
            hash: (string) $payload['Hash'],
            mobile: (string) $payload['Mobile'],
            amount: self::formatAmount($payload['TransAmount']),
            username: (string) $payload['Username'],
            password: (string) $payload['Password'],
            createdAt: (string) $payload['created_at'],
            customerName: trim((string) $payload['name']),
            billReference: (string) $payload['BillRefNumber'],
            transactionId: (string) $payload['TransID'],
            transactionTime: (string) $payload['TransTime'],
            transactionType: (string) $payload['TransType'],
            businessShortCode: (string) $payload['BusinessShortCode'],
        );
    }

    public function toArray(): array
    {
        return [
            'Hash' => $this->hash,
            'Mobile' => $this->mobile,
            'Username' => $this->username,
            'Password' => $this->password,
            'name' => $this->customerName,
            'TransAmount' => $this->amount,
            'created_at' => $this->createdAt,
            'TransID' => $this->transactionId,
            'TransTime' => $this->transactionTime,
            'TransType' => $this->transactionType,
            'BillRefNumber' => $this->billReference,
            'BusinessShortCode' => $this->businessShortCode,
        ];
    }

    public function sanitized(): array
    {
        $data = $this->toArray();

        foreach (['Username', 'Password', 'Hash'] as $field) {
            $data[$field] = '***';
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
