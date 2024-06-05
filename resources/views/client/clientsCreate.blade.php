@extends('layouts.master')

@section('content')

<h1 class="text-center stylish-title">Créer un nouveau client </h1>

<div class="container">
    
    <form action="{{ route('clients.store') }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="firstname">Prénom</label>
            <input type="text" class="form-control" id="firstname" name="firstname" value="" required>

            <label for="lastname">Nom</label>
            <input type="text" class="form-control" id="lastname" name="lastname" value="" required>


            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="" required>

            <label for="phone">Téléphone</label>
            <input type="text" class="form-control" id="phone" name="phone" value="" required>    

            <label for="address">Adresse</label>
            <input type="text" class="form-control" id="address" name="address" value="" required>

        </div>
        <button type="submit" class="btn btn-primary">Valider</button>
        <button type="reset" class="btn btn-secondary">Annuler</button>
    </form>

</div>

@endsection