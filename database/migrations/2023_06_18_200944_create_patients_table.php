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
        Schema::create('patients', function (Blueprint $table) {
            
            $table-> increments('id');

            $table-> string('title');
            $table-> string('patient_name');
            $table-> string('moblie');
            $table-> string('patient_age');
            $table-> string('patient_gender');
            $table-> string('patient_blood');
            $table-> string('guardian_name');
            $table-> string('guardian_mobile');
            $table-> string('email');
            $table-> text('area');
            $table-> text('address');
            $table-> text('note');
            $table-> text('patient_image');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
