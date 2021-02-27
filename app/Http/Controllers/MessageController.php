<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\Support\Facades\DB;
class MessageController extends Controller
{

    function store(Request $request)
    {
    //     return 'Jafer';
    //     $validaitonData = $request->validate([
    //         'name' => 'required',
    //         'email' => 'required|email',
    //         'message' => 'required'
    //     ],
    // [
    //     'email.email' => 'you should write input formate'
    // ]);
    Message::insert([
        'name' => $request->userName,
        'email' => $request->userEmail,
        'message' => $request->userMessage,
    ]);
        return redirect()->route('welcome')->with('success','Send message has been successfully');
    }
}
