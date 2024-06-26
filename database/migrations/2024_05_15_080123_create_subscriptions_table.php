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
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('enterprise_id')->constrained('enterprises','id')->cascadeOnDelete();
            $table->string('name_en')->nullable();
            $table->string('name_ar')->nullable();
            $table->string('name_fr')->nullable();

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

            $table->string('image')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscriptions');
    }
};