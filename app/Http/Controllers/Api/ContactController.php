<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    //
    public function store(Request $request)
{
    Contact::create($request->only(['name', 'email', 'message']));
    //dd($contact);
   return redirect()->back()->with('alert', 'Updated!');
}
}
