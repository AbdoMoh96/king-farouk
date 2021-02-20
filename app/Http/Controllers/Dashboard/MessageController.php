<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Messages;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index(){
        $messages = Messages::orderBy('messages.created_at' , 'desc')->get();
        return view('dashboard.messages.index' , compact('messages'));
    }

    public function show(Messages $message){
        return view('dashboard.messages.show' , compact('message'));
    }

    public function destroy(Messages $message){
        $message->delete();
        return redirect()->route('admin.messages.index')->with('success' , 'Message deleted successfully!!');
    }
}
