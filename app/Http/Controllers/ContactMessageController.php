<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ContactMessageController extends Controller
{
    public function getContactIndex()
    {
        return view('frontend.other.contact');
    }
}
