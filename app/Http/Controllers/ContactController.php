<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }
    public function create(Request $request)
    {
        $request->validate([
            'ten' => 'required',
            'email' => 'required',
            'sdt' => 'required',
            'diachi' => 'required',
            'loinhan' => 'required',  
        ],
    [
        'loinhan.required' => 'Nhập đầy đủ các trường thông tin',
    ]);
        Contact::create($request->all());
        return view('contact.index');
    }
}
