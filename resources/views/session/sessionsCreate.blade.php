@extends('layouts.master')

@section('content')

<h1 class="text-center stylish-title">Créer une nouvelle session </h1>

<div class="container">
    
    <form action="{{ route('sessions.store') }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="photographer_id">Photographe</label>
            <select class="form-control" id="photographer_id" name="photographer_id" required>
                @foreach($photographers as $photographer)
                    <option value="{{ $photographer->id }}">{{ $photographer->firstname }} {{ $photographer->lastname }}</option>
                @endforeach
            </select>
            
            <label for="client_id">Client</label>
            <select class="form-control" id="client_id" name="client_id" required>
                @foreach($clients as $client)
                    <option value="{{ $client->id }}">{{ $client->firstname }} {{ $client->lastname }}</option>
                @endforeach
            </select>

            <label for="date">Date</label>
            <input type="date" class="form-control" id="date" name="date" value="" required>

            <label for="location">Lieu</label>
            <input type="text" class="form-control" id="location" name="location" value="" required>

            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" required></textarea>

        </div>
        <button type="submit" class="btn btn-primary">Valider</button>
        <button type="reset" class="btn btn-secondary">Annuler</button>
    </form>

</div>

@endsection