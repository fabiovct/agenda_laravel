<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contact;

class ContactsController extends Controller
{
   public function index()
   {
       return Contact::all();
   }
   public function list()
    {
        //$contacts = Auth::user()->contacts;
        $contacts = Contact::all();
        return view('admin.list_contacts', compact('contacts'));
    }
}
