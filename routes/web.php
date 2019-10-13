<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', 'pages_controller@index')->name('index');
*/



Route::get('/willcreate', 'pages_controller@willcreate')->name('willCreate');

Route::get('/contact', 'pages_controller@contact')->name('contact');




Route::get('/packages', 'pages_controller@packages')->name('packages');

Route::get('/ddashboard', 'dashboardController@dashboard')->name('dashboard');


Route::group(['prefix'=>'admin'] , function(){

    Route::get('/packages/showPackages', 'AdminPagesController@showpackages')->name('admin.showpackages');
    Route::get('/packages/create', 'AdminPagesController@package_create')->name('admin.create');
    Route::post('/packages/store', 'AdminPagesController@package_store')->name('admin.post');
    Route::get('/packages/listPackages', 'AdminPagesController@package_list')->name('admin.listPackages');

    Route::get('/packages/listPackagesUpdate/{id}', 'AdminPagesController@package_list_update')->name('admin.allPackagesList.update');
    Route::post('/packages/listPackagesUpdatePackage/{id}', 'AdminPagesController@package_list_update_single')->name('admin.update.singleProduct');

    Route::post('/packages/listPackagesDelete/{id}', 'AdminPagesController@package_list_delete_single')->name('admin.update.delete');



    Route::get('/pages/verifiedMemberList', 'adminMemberController@verifiedMemberList')->name('admin.verifiedMembers');
    Route::get('/pages/bannedMemberList', 'adminMemberController@bannedMemberList')->name('admin.bannedMember');

    Route::get('/pages/memberList', 'adminMemberController@memberList')->name('admin.memberlist');
    Route::get('/pages/singleMemberUpdate/{id}', 'adminMemberController@singleMemberUpdate')->name('admin.allMembersList.update');
    Route::post('/pages/listMemberDelete/{id}', 'adminMemberController@member_list_delete_single')->name('admin.member.delete');

    Route::post('/pages/updateSingleMember/{id}', 'adminMemberController@admin_update_singleMember')->name('admin.update.singleMember');

});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('index');

Route::get('/send_email', 'SendMailController@index')->name('index');
Route::post('/send_email/send', 'SendMailController@send');

Route::get('/home', 'SendMailController@index');
