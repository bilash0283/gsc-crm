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
        Schema::create('agents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('designation')->nullable();
            $table->bigInteger('country_id')->nullable();
            $table->string('comp_name')->nullable();
            $table->string('comp_address')->nullable();
            $table->date('comp_start_year')->nullable();
            $table->string('comp_logo')->nullable();
            $table->string('comp_reg_sertificat')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('bank_acc_name')->nullable();
            $table->string('bank_acc_number')->nullable();
            $table->string('bank_address')->nullable();
            $table->string('bank_branch_name')->nullable();
            $table->bigInteger('bank_swift_code')->nullable();
            $table->string('fb_url')->nullable();
            $table->string('web_url')->nullable();
            $table->boolean('isActive')->default(false);
            $table->enum('status',[PENDING,APPROVED,REJECTED,INPROCESSING,COMPLETED])->default(PENDING);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agents');
    }
};
