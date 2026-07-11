<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\CustomerReference;
use Illuminate\Database\Seeder;

final class CustomerReferenceSeeder extends Seeder
{
    public function run(): void
    {
        $references = [
            [
                'reference' => 'TEST',
                'mobile' => '254798749323',
                'name' => 'vincent kusa',
            ],
            [
                'reference' => '8747027',
                'mobile' => '254798749323',
                'name' => 'VINCENT KUSA',
            ],
            [
                'reference' => '8752018',
                'mobile' => '254798749323',
                'name' => 'Vincent Kusa',
            ],
        ];

        foreach ($references as $reference) {
            CustomerReference::updateOrCreate(
                [
                    'reference' => $reference['reference'],
                ],
                $reference,
            );
        }
    }
}
