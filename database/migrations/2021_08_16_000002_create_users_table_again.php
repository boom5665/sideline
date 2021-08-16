<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTableAgain extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('user')->unique();
            $table->string('password');
            $table->string('name')->unique();
            $table->string('image');
            $table->enum('type', ['admin', 'under', 'user']);
            $table->enum('status', ['Y', 'N', 'R']);
            $table->datetime('expire')->nullable($value = true);
            $table->timestamps();

            $table->index('id');
        });
    }

}
