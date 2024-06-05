<?php 

namespace App\DAO;
use Illuminate\Support\Facades\DB;

class ServiceSessions
{
    public function getSessions()
    {
        $sessions = DB::table('sessions')
        ->join('photographers', 'sessions.photographer_id', '=', 'photographers.id')
        ->join('clients', 'sessions.client_id', '=', 'clients.id')
        ->select('sessions.*', 'photographers.firstname as photographer_firstname', 'photographers.lastname as photographer_lastname', 'clients.firstname as client_firstname', 'clients.lastname as client_lastname')
        ->get();
        return $sessions;
    }

    public function getSession($id)
    {
        $session = DB::table('sessions')
        ->join('photographers', 'sessions.photographer_id', '=', 'photographers.id')
        ->join('clients', 'sessions.client_id', '=', 'clients.id')
        ->select('sessions.*', 'photographers.firstname as photographer_firstname', 'photographers.lastname as photographer_lastname', 'clients.firstname as client_firstname', 'clients.lastname as client_lastname')
        ->where('sessions.id', $id)
        ->first();
        return $session;
    }

    public function deleteSession($id)
    {
        $sessions = DB::table('sessions')->where('id', $id)->delete();
        return $sessions;
    }

    public function updateSession(\Illuminate\Http\Request $request, $id)
    {
        DB::table('sessions')->where('id', $id)->update(
            [
                'session_date' => $request->input('date'),
                'location' => $request->input('location'), 
                'description' => $request->input('description'),
                'photographer_id' => $request->input('photographer_id'), 
                'client_id' => $request->input('client_id')
            ]
        );
    }

    public function storeSession(\Illuminate\Http\Request $request)
    {
        DB::table('sessions')->insert(
            [
                'session_date' => $request->input('date'),
                'location' => $request->input('location'), 
                'description' => $request->input('description'),
                'photographer_id' => $request->input('photographer_id'), 
                'client_id' => $request->input('client_id')
            ]
        );
    }


}