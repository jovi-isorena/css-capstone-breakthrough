<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\DemoMail;

class TestController extends Controller
{
    // this controller is for testing purpose only

    public function sendMail(Request $request){
        Mail::to('jovito.isorena.jr@gmail.com')->send(new DemoMail('jovi'));
    }
}
