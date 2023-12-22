<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\Support\Facades\DB;

class MessageController extends Controller
{
    public function create() {
        return view('customer.index');
    }

    public function store(Request $request) {
        $data = $request->all();

        Message::create([
            'customerName' => $data['fullname'],
            'customerEmail' => $data['email'],
            'customerPhoneNumber' => $data['phoneNumber'],
            'customerMessage' => $data['message'],
        ]);

        return redirect(route("customer.index"));
    }

    public function index() {
        $messages = Message::all();

        return view('admin.message', compact('messages'));
    }

    public function showDetail($messageId){
        $message = Message::find($messageId);

        return view('admin.detail-message', compact('message'));
    }

    public function deleteMessage($messageId)
    {
        $message = Message::find($messageId);
        $message->delete();

        return view('admin.message', compact('message'));

    }
}
