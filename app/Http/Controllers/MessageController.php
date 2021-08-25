<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        $messages = Message::latest()->paginate(10);
        return view('admin.message', compact('messages'));
    }
    public function sendMessage(Request $request)
    {
        Message::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);
        return redirect()->back()->with('success', 'Message Sent Successfully');
    }

    public function destroy($id)
    {
        Message::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Message Deleted Successfully');
    }
}