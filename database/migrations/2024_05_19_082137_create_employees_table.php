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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name_en')->nullable();
            $table->string('name_ar')->nullable();
            $table->string('name_fr')->nullable();

            $table->string('email');

            $table->string('age');



            $table->foreignId('country_id')->nullable()->constrained('countries','id')->cascadeOnDelete();
            $table->foreignId('state_id')->nullable()->constrained('states','id')->cascadeOnDelete();
            $table->foreignId('city_id')->nullable()->constrained('cities','id')->cascadeOnDelete();


            $table->string('national_id');


            $table->string('phone');

            $table->foreignId('specialty_id')->nullable()->constrained('specialties','id')->cascadeOnDelete();
            $table->foreignId('subspecialty_id')->nullable()->constrained('subspecialties','id')->cascadeOnDelete();


            $table->string('description_en')->nullable();
            $table->string('description_ar')->nullable();
            $table->string('description_fr')->nullable();


            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
