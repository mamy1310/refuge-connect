@extends('layouts.app')
@section('title', 'Accueil')
@section('content')
    <h1>Nos animaux</h1>
    <div id="animal-list">
        @forelse ($animals as $animal)
            <a href="{{ route('animals.detail', $animal->id) }}" class="no-decoration">
                <x-animal :animal="$animal" />
            </a>
        @empty
            <li>Aucun animal trouvé.</li>
        @endforelse
    </div>
@endsection