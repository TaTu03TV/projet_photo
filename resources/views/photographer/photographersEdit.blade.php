@extends('layouts.master')

@section('content')

<h1 class="text-center stylish-title">Modifier le photographe </h1>

<div class="container">
    
    <form action="{{ route('photographers.update', $photographer->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="firstname">Prénom</label>
            <input type="text" class="form-control" id="firstname" name="firstname" value="{{ $photographer->firstname }}" required>

            <label for="lastname">Nom</label>
            <input type="text" class="form-control" id="lastname" name="lastname" value="{{ $photographer->lastname }}" required>

            <label for="bio">Bio</label>
            <textarea class="form-control" id="bio" name="bio" required>{{ $photographer->bio }}</textarea>

            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $photographer->email }}" required>

            <label for="phone">Téléphone</label>
            <input type="text" class="form-control" id="phone" name="phone" value="{{ $photographer->phone }}" required>    

        </div>
        <button type="submit" class="btn btn-primary">Valider</button>
        <button type="reset" class="btn btn-secondary">Annuler</button>
    </form>

</div>

@endsection