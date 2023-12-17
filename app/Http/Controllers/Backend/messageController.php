<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;
class messageController extends Controller
{
    public function index(){
        $messages = Message::all();
        return view('backend.message.index', compact('messages'));
    }
    public function show(Request $request, Message $message, $id){
        $message = Message::where('id', $id)->first();
        return view('backend.message.show', compact('message'));

    }
}
