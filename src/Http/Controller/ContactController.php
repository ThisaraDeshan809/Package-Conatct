<?php

namespace CodeFusion\contact\Http\Controller;

use App\Http\Controllers\Controller;
use CodeFusion\contact\Mail\ConatctMailable;
use CodeFusion\contact\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
      return view('contact::contact');
    }

    public function send(Request $request)
    {

      Contact::create([
        'name' => $request->input('name'),
        'company' => $request->input('company'),
        'email' => $request->input('email'),
        'phone' => $request->input('phone'),
        'message' => $request->input('message')
      ]);

      return redirect(route('contact'));
    }
}