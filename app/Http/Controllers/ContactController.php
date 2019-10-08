<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

    public function store(Request $request)
    {
        $msg = request()->validate([
            'name' => 'required',
            'email' => ['required', 'email'],
            'subject' => 'required',
            'content' => ['required', 'min:3'],
        ]);

        Mail::to('choryfdieg@gmail.com')->queue(new MessageReceived($msg));

        return back()->with('status', 'Recibimos tu mensaje');
    }

}
