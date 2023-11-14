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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('mobileno')->nullable();
            $table->string('Mobile_otp')->nullable();
            $table->string('whatsappNo')->nullable();
            $table->string('newsletter')->nullable();
            $table->string('terms_condition')->nullable();
            $table->string('email')->nullable();
            $table->string('expyear')->nullable();
            $table->string('overexyear')->nullable();
            $table->string('tradename')->nullable();
            $table->string('industrytype')->nullable();
            $table->string('source')->nullable();
            $table->string('passportno')->nullable();
            $table->string('resume')->nullable();
            $table->string('user_id')->nullable();
            $table->timestamps();
        });
            
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
