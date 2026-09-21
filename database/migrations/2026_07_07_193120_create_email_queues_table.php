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
        Schema::create('email_queues', function (Blueprint $table) {
            $table->id();

            $table->string('subject');
            $table->string('header');
            $table->string('message');

            $table->string('attachment');

            $table->json('recipients');

            $table->string('status');
            $table->unsignedTinyInteger('attempts');

            $table->timestamp('next_retry_at')->nullable();
            $table->timestamp('processed_at')->nullable();

            $table->longText('response')->nullable();
            $table->text('error')->nullable();

            $table->timestamps();
        });
    }
};
