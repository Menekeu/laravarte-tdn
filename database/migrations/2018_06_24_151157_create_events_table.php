<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('picturesEvents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->unique();
            $table->string('image')->nullable();
            $table->string('video');
            $table->text('description');
            $table->integer('user_id');
            $table->foreign('user_id')->references('id')->on('users')
                                              ->onDelete('cascade')
                                              ->onUpdate('cascade');
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
        Schema::dropIfExists('picturesEvents');
    }
}
