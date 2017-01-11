<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminPrivilegeGroupingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('privilege_grouping', function (Blueprint $table) {
            $table->increments('id');
            $table->string('groupName',50);
            $table->string('Icon',80);
            $table->string('describe',150);
            $table->string('addTime',11);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('privilege_grouping');
    }
}
