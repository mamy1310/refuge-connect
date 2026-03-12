<div class="animal-card">
    <img src="{{ asset('images/animaux/' . $animal->photo) }}" alt="{{ $animal->name }}" class="animal-photo">
    <h2>{{ $animal->name }}</h2>
    <p>Espèce : {{ $animal->species }}</p>
    <p>Âge : {{ $animal->age }} ans</p>
    <p>{{ $animal->description }}</p>
    <div>
        <a href="#">Modifier</a>
        <a href="#">Supprimer</a>
    </div>
</div>
