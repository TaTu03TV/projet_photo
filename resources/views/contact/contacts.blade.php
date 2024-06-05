@extends('layouts.master')

@section('content')

<h1 class="text-center stylish-title">Liste des contacts </h1>

<div class="container">
    
    <table class="table">
        <thead>
            <tr>
                <th>Prénom</th>
                <th>Nom</th>
                <th>Email</th>
                <th>Message</th>
                <th>Créé le</th>
                <th>Mis à jour le</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contacts as $contact)
            <tr>
                <td>{{ $contact->firstname }}</td>
                <td>{{ $contact->lastname }}</td>
                <td>{{ $contact->email }}</td>
                <td>{{ $contact->message }}</td>
                <td>{{ $contact->created_at }}</td>
                <td>{{ $contact->updated_at }}</td>
                <td>
                    <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-warning">Modifier</a>
                    <a href="{{ route('contacts.destroy', $contact->id) }}" class="btn btn-danger">Supprimer</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    
    </table>

    <a href="{{ route('contacts.create') }}" class="btn btn-primary">Ajouter un contact</a>
</div>

@endsection