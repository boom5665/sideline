<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSidelinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sidelines', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('name');
            $table->string('price');
            $table->string('geography');
            $table->string('province');
            $table->string('amphur');
            $table->string('district');
            $table->string('areajob');
            $table->string('line');
            $table->enum('sex', ['M','F']);
            $table->integer('age');
            $table->integer('height');
            $table->integer('weight');
            $table->integer('chest');
            $table->integer('waist');
            $table->integer('hip');
            $table->string('caption');
            $table->string('detail');
            $table->string('interdict');
            $table->enum('confirm', ['Y','N']);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->index('id');
            $table->index('user_id');
        });
    }

}
