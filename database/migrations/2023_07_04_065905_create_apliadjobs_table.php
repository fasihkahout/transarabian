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
        Schema::create('apliadjobs', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('requirment')->nullable();
            $table->string('category')->nullable();
            $table->string('description')->nullable();
            $table->string('user_id')->nullable();
            $table->string('job_id')->nullable();
            $table->string('status')->default('Applied');
            $table->string('file')->nullable();
            $table->string('avialible')->default('yes');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apliadjobs');
    }
};
