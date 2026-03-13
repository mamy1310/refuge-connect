@extends('layouts.app')
@section('title', 'A propos de ' . $animal->name)
@section('content')
    <h1>{{ $animal->name }}</h1>
    <div class="animal-details">
        <img src="{{ asset('images/animaux/' . $animal->photo) }}" alt="{{ $animal->name }}" class="animal-details-photo">
        <div>
            <p>Espèce : {{ $animal->species }}</p>
            <p>Âge : {{ $animal->age }} ans</p>
            <p>Description : {{ $animal->description }}</p>
        </div>
    </div>
@endsection
