<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\menuController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ProjectformController;
use App\Http\Controllers\Admin\RegisterformController;
use App\Http\Controllers\Admin\ProjectlistController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/clients',[menuController::class, 'getClient']);
Route::get('/teams',[menuController::class, 'getteam']);
Route::get('/projects',[menuController::class, 'getproject']);
Route::get('/tasks',[menuController::class, 'gettask']);
Route::get('/kanban-boards',[menuController::class, 'getkanbanboard']);
Route::get('/chats',[menuController::class, 'getchat']);
Route::get('/users',[menuController::class, 'getuser']);
Route::get('/creates',[menuController::class, 'getcreate']);
Route::get('/forms',[menuController::class, 'getform']);
Route::get('/projectforms',[menuController::class, 'getprojectform']);
Route::get('/registerforms',[menuController::class, 'getregisterform']);



Route::post('/storeproject',[ProjectController::class, 'storeProject']);
Route::get('/list',[ProjectController::class, 'getlist']);//created for the get data 
Route::post('/storeprojectforms',[ProjectformController::class, 'Projectform']);
Route::post('/storeregisterform',[RegisterformController::class, 'registerForm']);
Route::get('/lists',[ProjectformController::class, 'getlists']);
Route::get('/details',[RegisterformController::class, 'getdetails']);
Route::get('/edit',[RegisterformController::class, 'getedit']);
Route::post('/storeupdate',[RegisterformController::class, 'update']);




Route::get('/', function () {
    return view('index');
});


Route::get('/index', function () {
    return view('index');
});



Route::get('/greeting', function () {  // use to check the print
    return 'i am sachika hello world ';
});


