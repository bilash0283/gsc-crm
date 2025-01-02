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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->date('dob')->nullable();
            $table->enum('gender',[MALE,FEMALE])->nullable();
            $table->bigInteger('passport_number')->nullable();
            $table->string('passport_address')->nullable();
            $table->json('ssc')->nullable();
            $table->json('hsc')->nullable();
            $table->json('diploma')->nullable();
            $table->json('bachelor')->nullable();
            $table->json('masters')->nullable();
            $table->string('ilts_result')->nullable();
            $table->string('preferable_program')->nullable();
            $table->bigInteger('country_id')->nullable();
            $table->string('preferable_intake')->nullable();
            $table->string('preferable_vearsity')->nullable();
            $table->string('preferable_course')->nullable();
            $table->string('passport_file')->nullable();
            $table->string('cv_file')->nullable();
            $table->string('ssc_certificate')->nullable();
            $table->string('hsc_certificate')->nullable();
            $table->string('diploma_certificate')->nullable();
            $table->string('bachelor_certificate')->nullable();
            $table->string('masters_certificate')->nullable();
            $table->string('ilts_certificate')->nullable();
            $table->enum('status',[PENDING,APPROVED,REJECTED,INPROCESSING,COMPLETED])->default(PENDING);
            $table->foreignId('created_by')->nullable()->constrained('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
