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
        Schema::create('usebodyinfos', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('eyecolor');
            $table->string('haircolor');
            $table->string('hairtype');
          
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usebodyinfos');
    }
};
