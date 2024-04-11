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
        Schema::create('job_listings', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->foreignId('employer_id');
            $table->boolean('published')->default(false);
            $table->string('location')->default('onsite');
            $table->string('type')->default('full time');
            $table->string('title');
            $table->string('salary');
            $table->longText('description');
            $table->datetime('closing_date');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_listings');
    }
};
