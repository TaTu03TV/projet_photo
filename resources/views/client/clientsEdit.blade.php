@extends('layouts.master')

@section('content')

<h1 class="text-center stylish-title">Modifier un client </h1>

<div class="container">
    
    <form action="{{ route('clients.update', $client->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="firstname">Prénom</label>
            <input type="text" class="form-control" id="firstname" name="firstname" value="{{ $client->firstname }}" required>

            <label for="lastname">Nom</label>
            <input type="text" class="form-control" id="lastname" name="lastname" value="{{ $client->lastname }}" required>

            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $client->email }}" required>

            <label for="phone">Téléphone</label>
            <input type="text" class="form-control" id="phone" name="phone" value="{{ $client->phone }}" required>    

            <label for="address">Adresse</label>
            <input type="text" class="form-control" id="address" name="address" value="{{ $client->address }}" required>

        </div>
        <button type="submit" class="btn btn-primary">Valider</button>
        <button type="reset" class="btn btn-secondary">Annuler</button>
    </form>
    
</div>

@endsection