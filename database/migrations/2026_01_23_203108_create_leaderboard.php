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
        Schema::create('leaderboards', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->enum('cluster',['4man', '3man', 'Solo', 'Duo', '100x']);
            $table->string('name', 50);
            $table->integer('score');
            $table->integer('playtime');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('leaderboards');
    }
};
