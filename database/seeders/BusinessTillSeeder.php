<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\BusinessTill;
use Illuminate\Database\Seeder;

final class BusinessTillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tills = [
            [
                'till' => '000001',
                'for' => 'Route Sales',
                'business_profile_id' => 3,
                'additional_details' => null,
            ],
            [
                'till' => '000002',
                'for' => 'Van Sales',
                'business_profile_id' => 3,
                'additional_details' => 'null',
            ],
        ];

        foreach ($tills as $till) {
            BusinessTill::updateOrCreate(
                [
                    'till' => $till['till'],
                    'business_profile_id' => $till['business_profile_id'],
                ],
                [
                    'for' => $till['for'],
                    'additional_details' => $till['additional_details'],
                ]
            );
        }
    }
}
