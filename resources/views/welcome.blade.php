@extends('layouts.app')
@section('title', 'Accueil')
@section('content')
    <h1>Nos animaux</h1>
    <div id="animal-list">
        @if($animals->isEmpty())
            <p>Aucun animal trouvé.</p>
        @else
            @foreach ($animals->chunk(3) as $row)
                <div class="animal-row">
                    @foreach ($row as $animal)
                        <x-animal :animal="$animal" />
                    @endforeach
                </div>
            @endforeach
        @endif
    </div>
@endsection