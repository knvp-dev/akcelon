<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;

class ContactController extends Controller
{
	public function store()
    {
        \Mail::to("info@example.com")->send(new ContactMail(request()));

        return back()->with('success', 'Bedankt, uw formulier werd succesvol verzonden!');
    }
}
