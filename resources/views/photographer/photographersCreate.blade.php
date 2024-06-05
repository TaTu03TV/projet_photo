@extends('layouts.master')

@section('content')

<h1 class="text-center stylish-title">Créer un nouveau photographe </h1>

<div class="container">
    
    <form action="{{ route('photographers.store') }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="firstname">Prénom</label>
            <input type="text" class="form-control" id="firstname" name="firstname" value="" required>

            <label for="lastname">Nom</label>
            <input type="text" class="form-control" id="lastname" name="lastname" value="" required>

            <label for="bio">Bio</label>
            <textarea class="form-control" id="bio" name="bio" required></textarea>

            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="" required>

            <label for="phone">Téléphone</label>
            <input type="text" class="form-control" id="phone" name="phone" value="" required>    

        </div>
        <button type="submit" class="btn btn-primary">Valider</button>
        <button type="reset" class="btn btn-secondary">Annuler</button>
    </form>

</div>

@endsection