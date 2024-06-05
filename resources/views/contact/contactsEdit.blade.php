@extends('layouts.master')

@section('content')

<h1 class="text-center stylish-title">Modifier le photographe </h1>

<div class="container">
    
    <form action="{{ route('contacts.update', $contact->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="firstname">Prénom</label>
            <input type="text" class="form-control" id="firstname" name="firstname" value="{{ $contact->firstname }}" required>

            <label for="lastname">Nom</label>
            <input type="text" class="form-control" id="lastname" name="lastname" value="{{ $contact->lastname }}" required>

            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $contact->email }}" required>

            <label for="message">Message</label>
            <textarea class="form-control" id="message" name="message" required>{{ $contact->message }}</textarea>  

        </div>
        <button type="submit" class="btn btn-primary">Valider</button>
        <button type="reset" class="btn btn-secondary">Annuler</button>
    </form>

</div>

@endsection