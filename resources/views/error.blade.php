@extends('layouts.master')

@section('content')

<h1 class="text-center">Erreur</h1>


@if(isset($e))
    <p class="alert alert-danger"> {{ $e->getMessage() }} </p>
@endif


@endsection