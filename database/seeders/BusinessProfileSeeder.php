<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Enum\BusinessProfileType;
use App\Models\BusinessProfile;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

final class BusinessProfileSeeder extends Seeder
{
    public function run(): void
    {
        $profiles = [
            [
                'business_short_code' => '4675771',
                'username' => 'VBL',
                'password' => '6Pm4WXtbeZ00cd7uF8zjwSleQk8',
                'credit_account' => '1010663058',
                'sap_file' => 'app/public/confirmation/VBL_C2B.csv',
                'business_transaction' => 'CUSTOMER_ACCOUNTS',
                'area_code_name' => 'Company Code',
                'business_area' => '9790',
                'profit_center' => '9790',
                'secret_key' => '1345425670107A6D20EB99CFB8C0E2D5',
            ],
            [
                'business_short_code' => '488489',
                'username' => 'Devyani',
                'password' => '6Pm4WXtbeZ00cd7uF8zjwSleQk8',
                'credit_account' => '1953840154',
                'sap_file' => 'app/public/confirmation/C2B.csv',
                'business_transaction' => 'CUSTOMER ACCOUNTS',
                'area_code_name' => 'Business Area',
                'business_area' => 'YN01',
                'profit_center' => 'PK00',
                'secret_key' => '1345425670107A6D20EB99CFB8C0E2D5',
            ],
            [
                'type' => BusinessProfileType::NCBA_TILL,
                'business_short_code' => '4888999',
                'username' => 'VBLTill',
                'password' => '6Pm4WXtbeZ00cd7uF8zjwSleQk8',
                'credit_account' => '1953840154',
                'sap_file' => 'app/public/confirmation/TILL_C2B.csv',
                'business_transaction' => 'CUSTOMER ACCOUNTS',
                'area_code_name' => 'Business Area',
                'business_area' => 'YN01',
                'profit_center' => 'PK00',
                'secret_key' => '1345425670107A6D20EB99CFB8C0E2D5',
            ],
        ];

        foreach ($profiles as $profile) {
            BusinessProfile::updateOrCreate(
                [
                    'business_short_code' => $profile['business_short_code'],
                ],
                [
                    'type' => $profile['type'] ?? BusinessProfileType::NORMAL,
                    'username' => $profile['username'],
                    'password' => Hash::make($profile['password']),
                    'secret_key' => $profile['secret_key'],
                    'credit_account' => $profile['credit_account'],
                    'sap_file' => $profile['sap_file'],
                    'business_transaction' => $profile['business_transaction'],
                    'business_area' => $profile['business_area'],
                    'profit_center' => $profile['profit_center'],
                    'sap_headers' => [
                        [
                            'header' => 'Business Transaction',
                            'source' => 'businessTransaction',
                        ],
                        [
                            'header' => 'Amount',
                            'source' => 'transaction.amount',
                        ],
                        [
                            'header' => 'Text',
                            'source' => 'transactionText',
                        ],
                        [
                            'header' => 'Cust Code',
                            'source' => 'transaction.bill_reference',
                        ],
                        [
                            'header' => $profile['area_code_name'],
                            'source' => 'profile.business_area',
                        ],
                        [
                            'header' => 'Profit Center',
                            'source' => 'profile.profit_center',
                        ],
                        [
                            'header' => 'Posting Date',
                            'source' => 'postingDate',
                        ],
                        [
                            'header' => 'Document Date',
                            'source' => 'documentDate',
                        ],
                    ],
                ]
            );
        }
    }
}
