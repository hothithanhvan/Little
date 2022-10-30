<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->contacts = new Contact();
    }
    public function index()
    {
        return view('contact.index');
    }

    public function create(Request $request)
    {

        $contact = $this->contacts->create($request);
        return redirect()->route('contact');
    }
}
