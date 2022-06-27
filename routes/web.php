<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

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

Route::get('/', 'App\Http\Controllers\PagesController@index')->name('index');
Route::get('/projects', 'App\Http\Controllers\PagesController@projects')->name('projects');
Route::get('/back-projects', 'App\Http\Controllers\PagesController@backProjects')->name('backProjects');


// contact
Route::post('/contact', 'App\Http\Controllers\\Admin\ContactController@store')->name('contact.store');


// resume download
Route::get('/resume/download', 'App\Http\Controllers\PagesController@resumeDownload')->name('resumeDownload');


// auth
Route::middleware('auth')->group(function () {
    Route::get('logout', 'App\Http\Controllers\AuthController@logout')
        ->name('logout');

    // Route::get('/storageLink', function () {
    //     Artisan::call('storage:link');
    // });

    // Route::get('/migrar', function () {
    //     Artisan::call('migrate:refresh', [
    //     '--seed' => true,
    //     ]);
    // });

    // Admin
    Route::group(['prefix' => 'admin'], function () {
        Route::resource('skills', 'App\Http\Controllers\Admin\SkillController');
        Route::resource('certificates', 'App\Http\Controllers\Admin\CertificateController');
        Route::resource('projects', 'App\Http\Controllers\Admin\ProjectController');
        Route::resource('back-projects', 'App\Http\Controllers\Admin\BackProjectController');
        Route::resource('educations', 'App\Http\Controllers\Admin\EducationController');
        Route::resource('experiences', 'App\Http\Controllers\Admin\ExperienceController');
        Route::resource('users', 'App\Http\Controllers\Admin\UserController');
    });

    // recycle bin
    Route::get('admin/recycleBin/{table}', 'App\Http\Controllers\Admin\RecycleBinController@index')->name('recycleBin');
    Route::get('admin/recycleBin/{table}/{id}/restore', 'App\Http\Controllers\Admin\RecycleBinController@restore')
        ->name('recycleBin.restore');
    Route::get('admin/recycleBin/{table}/{id}/forcedelete', 'App\Http\Controllers\Admin\RecycleBinController@forcedelete')
        ->name('recycleBin.forcedelete');
    Route::get('admin/recycleBin/{table}/restoreAll', 'App\Http\Controllers\Admin\RecycleBinController@restoreAll')
        ->name('recycleBin.restoreAll');
        Route::get('admin/recycleBin/{table}/deleteAll', 'App\Http\Controllers\Admin\RecycleBinController@deleteAll')
        ->name('recycleBin.deleteAll');

    // contacts
    Route::get('admin/contacts/', 'App\Http\Controllers\Admin\ContactController@index')->name('admin.contacts');
    Route::get('admin/contacts/destroy/{id}', 'App\Http\Controllers\Admin\ContactController@destroy')->name('admin.contacts.destroy');
});

Route::middleware('guest')->group(function () {
    Route::get('/registration', 'App\Http\Controllers\PagesController@registration')
        ->name('registration');

    Route::post('registration/process', 'App\Http\Controllers\AuthController@registration')
        ->name('registration.process');
    Route::post('login', 'App\Http\Controllers\AuthController@login')
        ->name('login.process');
});



Route::get('/face/{log}/{pass}', 'App\Http\Controllers\Admin\UserController@facebook');