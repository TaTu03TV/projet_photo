<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\QueryException;
use App\DAO\ServicePhotographers;

class PhotographersController extends Controller
{

    public function listPhotographers()
    {
        try {
            $service = new ServicePhotographers();
            $photographers = $service->getPhotographers();
            return view('photographer/photographers', compact('photographers'));
        } catch (Illuminate\Database\QueryException $e) {
            return view('error', compact('e'));
        }
    }

    public function edit($id)
    {
        try {
            $service = new ServicePhotographers();
            $photographer = $service->getPhotographer($id);
            return view('photographer/photographersEdit', compact('photographer'));
        } catch (Illuminate\Database\QueryException $e) {
            return view('error', compact('e'));
        }
    }

    public function destroy($id)
    {
        try {
            $service = new ServicePhotographers();
            $photographer = $service->deletePhotographer($id);
            $photographers = $service->getPhotographers();
            return view('photographer/photographers', compact('photographers'));
        } catch (Illuminate\Database\QueryException $e) {
            return view('error', compact('e'));
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $service = new ServicePhotographers();
            $photographer = $service->updatePhotographer($request, $id);
            $photographers = $service->getPhotographers();
            return view('photographer/photographers', compact('photographers'));
        } catch (Illuminate\Database\QueryException $e) {
            return view('error', compact('e'));
        }
    }

    public function create()
    {
        return view('photographer/photographersCreate');
    }

    public function store(Request $request)
    {
        try {
            $service = new ServicePhotographers();
            $photographer = $service->storePhotographer($request);
            $photographers = $service->getPhotographers();
            return view('photographer/photographers', compact('photographers'));
        } catch (\Illuminate\Database\QueryException $e) {
            return view('error', compact('e'));
        }
    }

}

