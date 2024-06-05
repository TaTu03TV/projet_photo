<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\QueryException;
use App\DAO\ServiceClients;

class ClientsController extends Controller
{

    public function listClients()
    {
        try {
            $service = new ServiceClients();
            $clients = $service->getClients();
            return view('client/clients', compact('clients'));
        } catch (Illuminate\Database\QueryException $e) {
            return view('error', compact('e'));
        }
    }

    public function edit($id)
    {
        try {
            $service = new ServiceClients();
            $client = $service->getClient($id);
            return view('client/clientsEdit', compact('client'));
        } catch (Illuminate\Database\QueryException $e) {
            return view('error', compact('e'));
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $service = new ServiceClients();
            $client = $service->updateClient($request, $id);
            $clients = $service->getClients();
            return view('client/clients', compact('clients'));
        } catch (Illuminate\Database\QueryException $e) {
            return view('error', compact('e'));
        }
    }

    public function destroy($id)
    {
        try {
            $service = new ServiceClients();
            $client = $service->deleteClient($id);
            $clients = $service->getClients();
            return view('client/clients', compact('clients'));
        } catch (Illuminate\Database\QueryException $e) {
            return view('error', compact('e'));
        }
    }

    public function create()
    {
        return view('client/clientsCreate');
    }

    public function store(Request $request)
    {
        try {
            $service = new ServiceClients();
            $service->storeClient($request);
            $clients = $service->getClients();
            return view('client/clients', compact('clients'));
        } catch (Illuminate\Database\QueryException $e) {
            return view('error', compact('e'));
        }
    }
}
