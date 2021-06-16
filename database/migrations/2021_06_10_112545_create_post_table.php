<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('sex');
            $table->char('money');
            $table->text('job');
            $table->text('location1');
            $table->text('location2');
            $table->text('location3');
            $table->text('location4');
            $table->text('description');
            $table->text('danger');
            $table->text('line');
            $table->char('age');
            $table->string('milk');
            $table->string('waist');
            $table->string('hip');
            $table->string('height');
            $table->string('weight');
           
            $table->string('filename');
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
        Schema::dropIfExists('posts');
    }
}
