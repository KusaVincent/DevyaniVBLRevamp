<?php

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
        Schema::create('confirmation_transactions', function (Blueprint $table) {
            $table->id();

            $table->string('transaction_id')
                ->unique();
            $table->string('status');
            $table->string('customer_name');
            $table->string('bill_reference');
            $table->decimal('amount', 12);
            $table->string('transaction_time');
            $table->string('business_short_code');
            $table->unsignedTinyInteger('process');

            $table->json('ft_ref')
                ->nullable();
            $table->json('narrative')
                ->nullable();

            $table->timestamps();
        });
    }
};
