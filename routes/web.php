<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Models\participate;
use App\Models\Event;
use Illuminate\Http\Request;

use App\Http\Controllers\EventCRUDController;
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
Route::resource('events', EventCRUDController::class)->middleware('auth');

Route::get('/Show_Events', function () {



    $data['Events'] = Event::orderBy('id','desc')->paginate(5);

    $data['User'] =  Auth::id();
    return view('events.show', $data);
})->middleware('auth')->name("Show_event");


Route::get('/Participate/{user}/{event}', function ($id,$eid) {
$participate=new participate;
$participate->user_id = $id;
$participate->event_id = $eid;
$participate->save();
return redirect()->route('Show_event');


/**
 *
 *
 *
 *
 */


})->middleware('auth')->name('Participate');


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
