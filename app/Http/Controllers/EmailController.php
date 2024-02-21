<?php

namespace App\Http\Controllers;

use App\Mail\EmailPrueba;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function emails()
    {
        // Mail::to('penalverpablo@gmail.com' )
        // ->send(new EmailPrueba ());

           Mail::to('penalverpablo@gmail.com')
        ->send(new \App\Mail\TestEmail());
    }

}
