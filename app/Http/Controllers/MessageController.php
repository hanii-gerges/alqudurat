<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\Support\Facades\DB;
class MessageController extends Controller
{

    function store(Request $request)
    {
        $request->validate([
                'name' => 'required',
                'email' => 'required|email',
                'message' => 'required'
            ]);
        Message::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);
        return redirect('/contact')->with('success','Message Sent');
    }

    function index()
    {
        $messages = Message::orderBy('created_at','desc')->paginate(20);
        return view('messages.index')->with('messages',$messages);
    }

    function show(Message $message)
    {
        return view('messages.show')->with('message',$message);
    }

    function destroy(Message $message)
    {
        $message->delete();
        return redirect('/messages')->with('success','Message Deleted');
    }
}
