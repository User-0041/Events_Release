<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Models\participate;
use App\Models\User;


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


Route::get('/Profile',function () {
    return view('userProfile');
});

Route::get('/Show_Events', function () {
    $Events = Event::with('participate')->orderBy('id','desc')->paginate(5);
    $data['Events']=$Events->transform(function($item, $key) {
        $item->part=false;
        foreach($item->participate as $pa){
            if($pa->user_id==Auth::id())
            $item->part=true;
        }
        return $item;
    });
    $data['User'] =  auth()->user();
    return view('events.show', $data);
})->middleware('auth')->name("Show_event");





Route::get('/Participate/{user}/{event}', function ($id,$eid) {
$participate=new participate;
$participate->user_id = $id;
$participate->event_id = $eid;
$participate->save();
return redirect()->route('Show_event');
})->middleware('auth')->name('Participate');







Route::get('/UnParticipate/{user}/{event}', function ($id,$eid) {
     $participate=participate::where('user_id', $id)->where('event_id', $eid)->get();
    $participate[0]->delete();
    return redirect()->route('Show_event');
    })->middleware('auth')->name('UnParticipate');


Route::get('/listparticipants/{id}', function ($id) {
    $data['Users']=participate ::with('User')->where('event_id',$id) ->orderBy('id','desc')->paginate(5);

    return view('showStudentsV2', $data);
})->name('listparticipants');




Route::get('/Users', function () {
$data['Users']=User::where('type','USER')->orderBy('id','desc')->paginate(5);
return view('showStudents', $data);
})->name('/Users');






Route::get('/UserRemove/{id}', function ($id) {
if(auth()->user()->type!="ADMINE"){return 'ACCSES DENIED';}
$User=User::find($id);
$User->delete();
})->middleware('auth')->name('UserRemove');



Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('showStudents');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
