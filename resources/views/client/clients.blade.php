@extends('layouts.master')

@section('content')

<h1 class="text-center stylish-title">Liste des clients </h1>

<div class="container">
    
    
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
                <th>Image</th>
                <th>Téléphone</th>
                <th>Adresse</th>
                <th>Date de création</th>
                <th>Date de modification</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clients as $client)
            <tr>
                <td>{{ $client->firstname }}</td>
                <td>{{ $client->lastname }}</td>
                <td>{{ $client->email }}</td>
                <td><img src="{{ $client->img_link }}" alt="Image" style="width: 100px; height: 100px;"></td>
                <td>{{ $client->phone }}</td>
                <td>{{ $client->address }}</td>
                <td>{{ $client->created_at }}</td>
                <td>{{ $client->updated_at }}</td>
                <td>
                    <a href="{{ route('clients.edit', $client->id) }}" class="btn btn-warning">Modifier</a>
                    <a href="{{ route('clients.destroy', $client->id) }}" class="btn btn-danger">Supprimer</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('clients.create') }}" class="btn btn-primary">Ajouter un client</a>
</div>

@endsection