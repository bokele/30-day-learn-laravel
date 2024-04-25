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
        Schema::create('job_profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('section');
            $table->string('job_title');
            $table->string('company_name');
            $table->string('employment_type')->nullable();
            $table->string('location')->nullable();
            $table->string('location_type')->nullable();
            $table->date('started_date');
            $table->string('ended_date')->nullable();
            $table->longText('description')->nullable();
            $table->string('media', 2048)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_profiles');
    }
};
