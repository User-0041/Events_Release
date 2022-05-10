<?php

namespace App\Http\Controllers;
use App\Models\Event;
use Illuminate\Http\Request;

class EventCRUDController extends Controller
{


public function index()
{
$data['Events'] = Event::orderBy('id','desc')->paginate(5);
return view('events.index', $data);
}


public function create()
{
return view('events.create');
}

public function store(Request $request)
{

$request->validate([
'ev_name' => 'required',
'ev_describ' => 'required',
'ev_date' => 'required',
'image' => 'required|image',
]);


$imageName = time().'.'.$request->image->extension();
$request->image->move(public_path('images'), $imageName);


$event =new Event;
$event->ev_pic= '/images/'.$imageName;
$event->ev_name = $request->ev_name;
$event->ev_describ = $request->ev_describ;
$event->ev_date = $request->ev_date;
$event->save();
return redirect()->route('events.index');
}


public function destroy(Event $event)
{
$event->delete();
return redirect()->route('events.index');
}


public function edit(Event $event)
{
return view('events.edit',compact('event'));
}

public function update(Request $request, $id)
{
$request->validate([
    'ev_name' => 'required',
    'ev_describ' => 'required',
    'ev_date' => 'required',
    'image' => 'required|image',
]);
$imageName = time().'.'.$request->image->extension();
$request->image->move(public_path('images'), $imageName);
$event = Event::find($id);

$event->ev_pic= '/images/'.$imageName;

$event->ev_name = $request->ev_name;
$event->ev_describ = $request->ev_describ;
$event->ev_date = $request->ev_date;
$event->save();
return redirect()->route('events.index');
}

}
