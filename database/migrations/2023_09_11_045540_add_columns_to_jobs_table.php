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
        Schema::table('jobs', function (Blueprint $table) {
            $table->string('cityname')->after('lastName'); // Adding 'city_name' after 'lastname'
            $table->string('company_worked')->after('cityname');
            $table->string('other_company')->after('company_worked');
            $table->string('badge_no')->after('other_company'); // Adding 'badge_no' after 'company_worked'
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('jobs', function (Blueprint $table) {
            //
        });
    }
};
