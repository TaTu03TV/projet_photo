@extends('layouts.master')

@section('content')

<h1 class="text-center stylish-title">Liste des photographes </h1>

<div class="container">
    
    
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Image</th>
                <th>Bio</th>
                <th>Email</th>
                <th>Téléphone</th>
                <th>Date de création</th>
                <th>Date de modification</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($photographers as $photographer)
            <tr>
                <td>{{ $photographer->firstname }}</td>
                <td>{{ $photographer->lastname }}</td>
                <td><img src="{{ $photographer->img_link }}" alt="Image" style="width: 100px; height: 100px;"></td>
                <td>{{ $photographer->bio }}</td>
                <td>{{ $photographer->email }}</td>
                <td>{{ $photographer->phone }}</td>
                <td>{{ $photographer->created_at }}</td>
                <td>{{ $photographer->updated_at }}</td>
                <td>
                    <a href="{{ route('photographers.edit', $photographer->id) }}" class="btn btn-warning">Modifier</a>
                    <a href="{{ route('photographers.destroy', $photographer->id) }}" class="btn btn-danger">Supprimer</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    
    <a href="{{ route('photographers.create') }}" class="btn btn-primary">Ajouter un photographe</a>

</div>

<div class="container">
    <img src="https://images.pexels.com/photos/1540977/pexels-photo-1540977.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-fluid img-liste" alt="Responsive image">
    <img src="https://images.pexels.com/photos/1484771/pexels-photo-1484771.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-fluid img-liste" alt="Responsive image" style="float:right;">
</div>

@endsection