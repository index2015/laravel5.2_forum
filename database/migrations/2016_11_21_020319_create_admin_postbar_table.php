<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminPostbarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_bar', function (Blueprint $table) {
            $table->increments('PId');
            $table->string('bar_name',50);
            $table->string('describe');//描述
            $table->string('add_time',10);//时间
            $table->string('thumbnail');//缩略图
            $table->string('state',10);//状态
            $table->string('the_new_page',3);//是否新页面打开
            $table->string('The',50);//是否新页面打开
            $table->string('top',50);//置顶
            $table->string('recommend',10);//是否推荐
            $table->string('position',20);//所属位置类型
            $table->string('creator_id',20);//创建者ID

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('post_bar');
    }
}
