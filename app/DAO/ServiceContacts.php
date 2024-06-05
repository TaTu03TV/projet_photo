<?php 

namespace App\DAO;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ServiceContacts
{
    public function getContacts()
    {
        $contacts = DB::table('contacts')->get();
        return $contacts;
    }

    public function storeContact(\Illuminate\Http\Request $request)
    {
        DB::table('contacts')->insert(
            [
                'firstname' => $request->input('firstname'),
                'lastname' => $request->input('lastname'), 
                'email' => $request->input('email'), 
                'message' => $request->input('message')
            ]
        );
    }

    public function deleteContact($id)
    {
        $contacts = DB::table('contacts')->where('id', $id)->delete();
        return $contacts;
    }

    public function getContact($id)
    {
        $contact = DB::table('contacts')->where('id', $id)->first();
        return $contact;
    }

    public function updateContact(\Illuminate\Http\Request $request, $id)
    {
        DB::table('contacts')->where('id', $id)->update(
            [
                'firstname' => $request->input('firstname'),
                'lastname' => $request->input('lastname'), 
                'email' => $request->input('email'), 
                'message' => $request->input('message')
            ]
        );
    }


}