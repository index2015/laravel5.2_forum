<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminPostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_data', function (Blueprint $table) {
            $table->increments('id');
            $table->string('postName');
            $table->text('postContent');
            $table->integer('postUid');  //发布ID
            $table->integer('postBar');  //吧ID....
            $table->integer('postAddTime'); //时间...
            $table->integer('postJurisdiction');  //权限...对于那种会员可见可访问
            $table->integer('postCollectionTimes'); //收藏次数
            $table->integer('postAccessTimes'); //访问次数
            $table->integer('postStatePost');//帖子状态是否显示....
            $table->tinyInteger('postEssence');//是否精华...
            $table->tinyInteger('postTop');//是否置顶...
            $table->tinyInteger('numberOfReviews');//评论次数


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('post_data');
    }
}
