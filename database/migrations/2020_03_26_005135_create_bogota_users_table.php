<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBogotaUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('bogota')->create('bogota_users',
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
        Schema::connection('bogota')->dropIfExists('bogota_users');
    }
}
