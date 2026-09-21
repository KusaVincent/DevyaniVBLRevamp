<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('business_profiles', function (Blueprint $table) {
            $table->id();

            $table->string('business_short_code')
                ->unique();
            $table->string('type');
            $table->string('username');
            $table->string('password');
            $table->text('secret_key');
            $table->string('credit_account');
            $table->string('sap_file');
            $table->string('business_transaction');
            $table->string('business_area');
            $table->string('profit_center');
            $table->unsignedTinyInteger('active');
            $table->json('sap_headers');

            $table->timestamps();
        });
    }
};
