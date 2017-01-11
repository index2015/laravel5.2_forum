<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndexIpLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ip_log', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ip_log_ip',50);
            $table->string('ip_log_date');
            $table->string('ip_log_visits',3);//访问
            $table->string('ip_log_page',200);
            $table->string('ip_log_type',50); //操作类型

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ip_log');
    }
}
