<div class="animal-card">
    <a href="{{ route('animals.detail', $animal->id) }}">
        <img src="{{ asset('images/animaux/' . $animal->photo) }}" alt="{{ $animal->name }}" class="animal-photo">
    </a>
    <h2>{{ $animal->name }}</h2>
    <p>Espèce : {{ $animal->species }}</p>
    <p>Âge : {{ $animal->age }} ans</p>
    <p>{{ $animal->description }}</p>
    <div class="animal-actions">
        <span><a href="{{ route('animals.update', $animal->id) }}">Modifier</a></span>
        <span><a href="{{ route('animals.delete', $animal->id) }}">Supprimer</a></span>
    </div>
</div>
