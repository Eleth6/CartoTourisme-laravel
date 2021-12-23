<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\CTMail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index()
    {
        return view('dashboard.contact.answer');
    }
    
    // public function sendEmail()
    // {
    //     $details = [
    //         'title' => '', 
    //         'body' => ''
    //     ]

    //     Mail::to("")->send(new CTMail($details));
    //     return "Email sent";
    // }
}
