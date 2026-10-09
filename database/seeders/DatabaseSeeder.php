<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

final class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call($this->seed());
    }

    private function seed(): array
    {
        $seed = [

            //            BusinessProfileSeeder::class,
            //            CustomerReferenceSeeder::class,
            //
            //            BusinessTillSeeder::class,
        ];

        if (! app()->isProduction()) {
            $seed[] = UserSeeder::class;
        }

        return $seed;
    }
}
