<x-layout>
    <h1>Liste des recettes</h1>

    <div style="margin-bottom: 1rem;">
        <a href="{{ route('recettes.create') }}">
            <button>Créer une nouvelle recette</button>
        </a>
    </div>

    <ul>
        @foreach ($recettes as $recette)
            <li>
                <a href="{{ route('recettes.show', $recette->id) }}">{{ $recette->nom }}</a>
                (<a href="{{ route('recettes.edit', $recette->id) }}">éditer</a>,
                <a href="{{ route('recettes.delete.view', $recette->id) }}">supprimer</a>)
            </li>
        @endforeach
    </ul>
</x-layout>
