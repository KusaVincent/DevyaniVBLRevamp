<?php

declare(strict_types=1);

use App\Models\BusinessProfile;
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
        Schema::create('business_tills', function (Blueprint $table) {
            $table->id();

            $table->foreignIdFor(BusinessProfile::class);
            $table->string('till');
            $table->string('for')
                ->nullable();
            $table->string('additional_details')
                ->nullable();

            $table->timestamps();

            $table->unique(['business_short_code_id', 'till']);
        });
    }
};
