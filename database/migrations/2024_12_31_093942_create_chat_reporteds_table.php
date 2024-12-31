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
        Schema::create('chat_reporteds', function (Blueprint $table) {
            $table->id();


            $table->foreignId('chat_id')->nullable()->constrained('users');
            $table->foreignId('reported_by')->nullable()->constrained('users');
            $table->string('reason')->nullable();
            $table->text('description')->nullable();
            $table->timestamp('reported_at')->nullable();

            $table->softDeletes();
            
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
        Schema::dropIfExists('chat_reporteds');
    }
};
