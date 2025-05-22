<x-layout>
    <h1>{{ $recette->nom }}</h1>
    <p><strong>Description :</strong> {{ $recette->description }}</p>
    <p><strong>Temps de préparation :</strong> {{ $recette->temps_preparation }} min</p>
    <p><strong>Temps de cuisson :</strong> {{ $recette->temps_cuisson }} min</p>
    <p><strong>Instructions :</strong><br>{{ $recette->instructions }}</p>
    <p>
        <a href="{{ route('recettes.edit', $recette->id) }}">Modifier</a> |
        <a href="{{ route('recettes.delete.view', $recette->id) }}">Supprimer</a>
    </p>
</x-layout>
