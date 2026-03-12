@extends('layouts.app')
@section('title', 'Accueil')
@section('content')
    <h1>Nos animaux</h1>
    <div id="animal-list">
        @forelse ($animals as $animal)
            <x-animal :animal="$animal" />
        @empty
            <li>Aucun animal trouvé.</li>
        @endforelse
    </div>
@endsection