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
        Schema::create('sms_queues', function (Blueprint $table) {
            $table->id();

            $table->string('customer_name');      // M-Pesa payer
            $table->string('recipient_name');     // From CSV
            $table->string('recipient_mobile');   // From CSV

            $table->string('status');
            $table->decimal('amount', 12);
            $table->string('mpesa_ref')->index();
            $table->string('bill_reference')->index();

            $table->text('error')->nullable();
            $table->json('response')->nullable();
            $table->unsignedTinyInteger('process');
            $table->unsignedTinyInteger('attempts');

            $table->timestamp('created_at');
            $table->timestamp('processed_at')->nullable();
            $table->timestamp('next_retry_at')->nullable();
        });
    }
};
