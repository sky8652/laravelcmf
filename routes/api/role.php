<?php
/**
 * Created by PhpStorm.
 * User: JeffreyBool
 * Date: 2019/11/21
 * Time: 00:58
 */

//角色
Route::namespace('Api')->middleware('auth:api')->group(function() {
    Route::patch("roles/{role}/assign_menus",'RoleController@assignMenus')->name('roles.assign_menus');
    Route::apiResource('roles', 'RoleController');
});