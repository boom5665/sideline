<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DeleteAllTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
        Schema::drop('posts');
        Schema::drop('password_resets');
        Schema::drop('failed_jobs');

    }

}
