<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_personal_information', function (Blueprint $table) {
            $table->string('main_available_from_date')->nullable();
            $table->string('base_date')->nullable();

            $table->string('travlling_one_country_id')->nullable();
            $table->string('travlling_one_city_id')->nullable();
            $table->string('travlling_one_from_date')->nullable();
            $table->string('travlling_one_to_date')->nullable();
            $table->string('travlling_two_country_id')->nullable();
            $table->string('travlling_two_city_id')->nullable();
            $table->string('travlling_two_from_date')->nullable();
            $table->string('travlling_two_to_date')->nullable();
            $table->string('travlling_three_country_id')->nullable();
            $table->string('travlling_three_city_id')->nullable();
            $table->string('travlling_three_from_date')->nullable();
            $table->string('travlling_three_to_date')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_personal_information', function (Blueprint $table) {
            //
        });
    }
};
