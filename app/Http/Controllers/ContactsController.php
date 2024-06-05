<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Input;
use Illuminate\Database\QueryException;
use App\DAO\ServiceContacts;
use Illuminate\Http\Request;

class ContactsController extends Controller
{

    public function listContacts()
    {
        try {
            $service = new ServiceContacts();
            $contacts = $service->getContacts();
            return view('contact/contacts', compact('contacts'));
        } catch (Illuminate\Database\QueryException $e) {
            return view('error', compact('e'));
        }
    }

    public function store(Request $request)
    {
        try {
            $service = new ServiceContacts();
            $service->storeContact($request);
            return redirect()->route('contacts');
        } catch (Illuminate\Database\QueryException $e) {
            return view('error', compact('e'));
        }
    }

    public function destroy($id)
    {
        try {
            $service = new ServiceContacts();
            $service->deleteContact($id);
            $contacts = $service->getContacts();
            return view('contact/contacts', compact('contacts'));
        } catch (Illuminate\Database\QueryException $e) {
            return view('error', compact('e'));
        }
    }

    public function edit($id)
    {
        try {
            $service = new ServiceContacts();
            $contact = $service->getContact($id);
            return view('contact/contactsEdit', compact('contact'));
        } catch (Illuminate\Database\QueryException $e) {
            return view('error', compact('e'));
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $service = new ServiceContacts();
            $service->updateContact($request, $id);
            $contacts = $service->getContacts();
            return view('contact/contacts', compact('contacts'));
        } catch (Illuminate\Database\QueryException $e) {
            return view('error', compact('e'));
        }
    }

    public function create()
    {
        return view('contact/contactsCreate');
    }

    
}
