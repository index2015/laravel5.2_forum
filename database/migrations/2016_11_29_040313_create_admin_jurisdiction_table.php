<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminJurisdictionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jurisdiction', function (Blueprint $table) {
            $table->increments('id');
            $table->string('menu',50);
            $table->string('Route');
            $table->string('URL');
            $table->string('RouteName');
            $table->string('Icon',50);
            $table->string('describe',150);
            $table->string('addTime',50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('jurisdiction');
    }
}
