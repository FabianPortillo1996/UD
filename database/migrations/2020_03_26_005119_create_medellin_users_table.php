<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedellinUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('medellin')->create('medellin_users',
            function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('email')->index();
                $table->string('name');
                $table->bigInteger('phone');
                $table->bigInteger('identification');
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
        Schema::connection('medellin')->dropIfExists('medellin_users');
    }
}
