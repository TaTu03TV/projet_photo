<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\QueryException;
use App\DAO\ServiceSessions;
use App\DAO\ServicePhotographers;
use App\DAO\ServiceClients;


class SessionsController extends Controller
{

    public function listSessions()
    {
        try {
            $service = new ServiceSessions();
            $sessions = $service->getSessions();
            return view('session/sessions', compact('sessions'));
        } catch (Illuminate\Database\QueryException $e) {
            return view('error', compact('e'));
        }
    }

    public function edit($id)
    {
        try {
            $service = new ServiceSessions();
            $session = $service->getSession($id);

            $servicephotographers = new ServicePhotographers();
            $photographers = $servicephotographers->getPhotographers();

            $serviceclients = new ServiceClients();
            $clients = $serviceclients->getClients();
            return view('session/sessionsEdit', compact('session', 'photographers', 'clients'));
        } catch (Illuminate\Database\QueryException $e) {
            return view('error', compact('e'));
        }
    }

    public function destroy($id)
    {
        try {
            $service = new ServiceSessions();
            $session = $service->deleteSession($id);
            $sessions = $service->getSessions();
            return view('session/sessions', compact('sessions'));
        } catch (Illuminate\Database\QueryException $e) {
            return view('error', compact('e'));
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $service = new ServiceSessions();
            $session = $service->updateSession($request, $id);
            $sessions = $service->getSessions();
            return view('session/sessions', compact('sessions'));
        } catch (Illuminate\Database\QueryException $e) {
            return view('error', compact('e'));
        }
    }

    public function create()
    {
        try {
            $service = new ServiceSessions();
            $sessions = $service->getSessions();

            $servicephotographers = new ServicePhotographers();
            $photographers = $servicephotographers->getPhotographers();

            $serviceclients = new ServiceClients();
            $clients = $serviceclients->getClients();
            return view('session/sessionsCreate', compact('sessions', 'photographers', 'clients'));
        } catch (Illuminate\Database\QueryException $e) {
            return view('error', compact('e'));
        }
    }

    public function store(Request $request)
    {
        try {
            $service = new ServiceSessions();
            $session = $service->storeSession($request);
            $sessions = $service->getSessions();
            return view('session/sessions', compact('sessions'));
        } catch (Illuminate\Database\QueryException $e) {
            return view('error', compact('e'));
        }
    }


}
