<x-layout>
    <h1>Supprimer la recette</h1>
    <p>Voulez-vous vraiment supprimer <strong>{{ $recette->nom }}</strong> ?</p>

    <form method="POST" action="{{ route('recettes.destroy', $recette->id) }}">
        @csrf
        @method('DELETE')
        <button type="submit">Oui, supprimer</button>
    </form>
</x-layout>
