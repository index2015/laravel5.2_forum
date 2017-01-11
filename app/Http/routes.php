<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|<input type="text" name="_token" value="{{csrf_token()}}"/> 值 将不会有值
*/
#认证路由...
Route::get('auth/login', 'Auth\AuthController@getLogin');

Route::get('auth/logout', 'Auth\AuthController@getLogout');

Route::post('auth/login', 'Auth\AuthController@postLogin');
#注册路由...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

#登录
Route::any('index/Login','Index\LoginController@index');

Route::any('authenticate/Login','Index\LoginController@authenticate');


Route::group(['middleware' => 'web'], function () {
    Route::any('admin/indexView','Admin\AdminController@indexView');
    Route::auth();
    Route::get('admin/login', 'Admin\AuthController@getLogin');

    Route::post('admin/login', 'Admin\AuthController@postLogin');

    Route::get('admin/register', 'Admin\AuthController@getRegister');

    Route::post('admin/register', 'Admin\AuthController@postRegister');

    Route::get('admin', 'AdminController@index');

    Route::any('adminList','Admin\IndexController@adminList');

    Route::any('index/adminData','Admin\IndexController@adminData');



    #todo:后台路由...
    Route::group(['middleware' =>['admin']],function()
    {
        Route::any('navigationList','Admin\IndexController@navigationList');
        Route::any('system/jurisdiction','Admin\SystemController@jurisdiction');
        Route::any('system/saveJurisdictionData','Admin\SystemController@saveJurisdictionData');
        Route::any('system/showJurisdictionData','Admin\SystemController@showJurisdictionData');

        Route::any('admin/RegisterForm','Admin\AdminController@adminRegisterForm');

        Route::any('adminIndex','Admin\IndexController@index');

        Route::any('adminSystem','Admin\IndexController@system');

        Route::any('userList','Admin\IndexController@userList');

        Route::any('systemSeo','Admin\IndexController@systemSeo');

        Route::any('userData','Admin\IndexController@userData');

        Route::any('indexUpdate','Admin\IndexController@indexUpdate');

        //导航....
        Route::any('navigation/showdata','Admin\NavigationController@showData');

        Route::any('navigation/saveData','Admin\NavigationController@saveData');

        #帖子吧
        Route::any('PostBar/index','Admin\PostBarController@index');

        Route::any('PostBar/showData','Admin\PostBarController@showData');

        Route::any('PostBar/saveData','Admin\PostBarController@saveData');

        Route::any('PostBar/selectData','Admin\PostBarController@selectData');
        Route::any('PostBar/Grouping','Admin\PostBarController@Grouping');
        Route::any('PostBar/postDataList','Admin\PostBarController@postDataList');

        #网站概览...
        Route::get('system/webSiteOverview','Admin\SystemController@webSiteOverview');
        #清除缓存...
        Route::any('system/delCacheView','Admin\SystemController@delCacheView');
        Route::any('system/delCache','Admin\SystemController@delCache');
        Route::any('system/ViewCache','Admin\SystemController@ViewCache');
        #焕春统计...
        Route::any('system/cacheBM','Admin\SystemController@cacheBM');
    });
    #todo:导航路由...
    Route::group(['middleware'=>['index_navigation']],function(){
        Route::get('/','Index\IndexController@index');
        Route::get('/home', 'HomeController@index');
        #论坛...
        Route::any('forum/index','Index\ForumController@index');
        Route::any('forum/postForum','Index\ForumController@postForum');
        Route::any('forum/newthread','Index\ForumController@newthread');
        Route::any('forum/showPost','Index\ForumController@showPost');
        #发帖子
        Route::any('forum/memberPost','Index\ForumController@memberPost');
        #支付宝支付
        Route::any('alipay/index','Index\AlipayController@index');
    });
});


