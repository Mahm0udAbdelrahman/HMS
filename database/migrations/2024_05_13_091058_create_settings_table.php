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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('address_ar')->nullable();
            $table->string('address_en')->nullable();
            $table->string('address_fr')->nullable();

            $table->string('description_ar')->nullable();
            $table->string('description_en')->nullable();
            $table->string('description_fr')->nullable();

            $table->string('email')->nullable();

            $table->string('facebook')->nullable();

            $table->string('instagram')->nullable();

            $table->string('twitter')->nullable();

            $table->string('phone')->nullable();

            $table->string('logo_ar')->nullable();
            $table->string('logo_en')->nullable();
            $table->string('logo_fr')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};