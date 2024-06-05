<?php 

namespace App\DAO;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class ServiceClients
{
    public function getClients()
    {
        $clients = DB::table('clients')->get();
        return $clients;
    }

    public function getClient($id)
    {
        $client = DB::table('clients')->where('id', $id)->first();
        return $client;
    }

    public function updateClient(\Illuminate\Http\Request $request, $id)
    {
        DB::table('clients')->where('id', $id)->update(
            [
                'firstname' => $request->input('firstname'),
                'lastname' => $request->input('lastname'), 
                'email' => $request->input('email'), 
                'phone' => $request->input('phone'),
                'address' => $request->input('address'),
            ]
        );
    }

    public function deleteClient($id)
    {
        $sessions = DB::table('sessions')->where('client_id', $id)->delete();

        $clients = DB::table('clients')->where('id', $id)->delete();
        return $clients;
    }

    public function storeClient(\Illuminate\Http\Request $request)
    {   
        $img_link = Http::withOptions(['verify' => false])->get('https://randomuser.me/api/')->json()['results'][0]['picture']['large'];


        DB::table('clients')->insert(
            [
                'firstname' => $request->input('firstname'),
                'lastname' => $request->input('lastname'), 
                'email' => $request->input('email'), 
                'img_link' => $img_link,
                'phone' => $request->input('phone'),
                'address' => $request->input('address'),
            ]
        );
    }
}