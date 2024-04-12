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
        Schema::create('employers', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('top')->default(false);
            $table->string('phone_number')->nullable()->unique();
            $table->string('contact_email')->nullable()->unique();
            $table->string('address')->nullable();
            $table->string('short_description')->nullable();
            $table->string('video_url')->nullable();
            $table->string('company_website_url')->nullable();
            $table->string('company_logo')->nullable();
            $table->string('project_from')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employers');
    }
};
