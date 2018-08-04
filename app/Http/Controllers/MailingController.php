<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateMailingFormRequest;
use Mail;

class MailingController extends Controller
{
    public function create(CreateMailingFormRequest $request){
        $name="Iulian";
        Mail::send('emails.welcome', ['name'=>$name] ,function($m){
            $m->to('durlan.iulian@yahoo.com')
            ->subject('Welcome man!');
        });
        return redirect()->route('home')->with('status','Email sent!');
    }
}
