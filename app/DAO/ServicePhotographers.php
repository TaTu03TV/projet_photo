<?php 

namespace App\DAO;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class ServicePhotographers
{
    public function getPhotographers()
    {
        $photographers = DB::table('photographers')->get();
        return $photographers;
    }


    public function getPhotographer($id)
    {
        $photographer = DB::table('photographers')->where('id', $id)->first();
        return $photographer;
    }


    public function deletePhotographer($id)
    {
        $sessions = DB::table('sessions')->where('photographer_id', $id)->delete();

        $photographers = DB::table('photographers')->where('id', $id)->delete();
        return $photographers;
    }

    public function updatePhotographer(\Illuminate\Http\Request $request, $id)
    {
        
        DB::table('photographers')->where('id', $id)->update(
            [
                'firstname' => $request->input('firstname'),
                'lastname' => $request->input('lastname'), 
                'bio' => $request->input('bio'),
                'email' => $request->input('email'), 
                'phone' => $request->input('phone')
            ]
        );
    }

    public function storePhotographer(\Illuminate\Http\Request $request)
    {
        $img_link = Http::withOptions(['verify' => false])->get('https://randomuser.me/api/')->json()['results'][0]['picture']['large'];

        
        DB::table('photographers')->insert(
            [
                'firstname' => $request->input('firstname'),
                'lastname' => $request->input('lastname'), 
                'bio' => $request->input('bio'),
                'img_link' => $img_link,
                'email' => $request->input('email'), 
                'phone' => $request->input('phone')
            ]
        );
    }
}