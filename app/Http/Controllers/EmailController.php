<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmailRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactoSend;
class EmailController extends Controller
{
    public function enviar(EmailRequest $request){
        Mail::to('alejandroamita2632@gmail.com')
        ->send(new ContactoSend($request->all()));

         return back()->with('success', 'Mensaje enviado correctamente.');
    }
}
