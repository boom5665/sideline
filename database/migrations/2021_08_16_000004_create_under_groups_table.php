<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnderGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('under_groups', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('under_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('under_id')->references('id')->on('unders');
            $table->index('id');
            $table->index('user_id');
            $table->index('under_id');
            $table->index(['user_id','under_id']);
        });
    }

}
