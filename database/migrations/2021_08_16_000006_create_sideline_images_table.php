<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSidelineImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sideline_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sideline_id');
            $table->string('image');
            $table->timestamps();

            $table->foreign('sideline_id')->references('id')->on('sidelines');
            $table->index('id');
            $table->index('sideline_id');
        });
    }

}
