@extends('layouts.master')

@section('content')

<h1 class="text-center stylish-title">Formulaire de contact </h1>

<div class="container">
    
    <form action="{{ route('contacts.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="firstname">Prénom</label>
            <input type="text" class="form-control" id="firstname" name="firstname" required>

            <label for="lastname">Nom</label>
            <input type="text" class="form-control" id="lastname" name="lastname" required>

            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>

            <label for="message">Message</label>
            <textarea class="form-control" id="message" name="message" required></textarea>

        </div>
        <button type="submit" class="btn btn-primary">Envoyer</button>
        <button type="reset" class="btn btn-secondary">Annuler</button>
    </form>
    
</div>

@endsection