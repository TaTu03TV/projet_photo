@extends('layouts.master')

@section('content')

<h1 class="text-center stylish-title">Liste des séances </h1>

<div class="container">
    
    
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Photographer</th>
                <th>Client</th>
                <th>Session Date</th>
                <th>Location</th>
                <th>Description</th>
                <th>Créer le</th>
                <th>Mis à jour le</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sessions as $session)
            <tr>
                <td>{{ $session->photographer_firstname }} {{ $session->photographer_lastname }}</td>
                <td>{{ $session->client_firstname }} {{ $session->client_lastname }}</td>
                <td>{{ $session->session_date }}</td>
                <td>{{ $session->location }}</td>
                <td>{{ $session->description }}</td>
                <td>{{ $session->created_at }}</td>
                <td>{{ $session->updated_at }}</td>
                <td>
                    <a href="{{ route('sessions.edit', $session->id) }}" class="btn btn-warning">Modifier</a>
                    <a href="{{ route('sessions.destroy', $session->id) }}" class="btn btn-danger">Supprimer</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('sessions.create') }}" class="btn btn-primary">Ajouter une séance</a>
</div>

@endsection