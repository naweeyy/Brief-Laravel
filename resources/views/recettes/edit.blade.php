<x-layout>
    <h1>Modifier la recette</h1>
    <form method="POST" action="{{ route('recettes.update', $recette->id) }}">
        @csrf
        @method('PUT')
        <label>Nom : <input type="text" name="nom" value="{{ $recette->nom }}"></label><br>
        <label>Description : <textarea name="description">{{ $recette->description }}</textarea></label><br>
        <label>Temps de préparation : <input type="number" name="temps_preparation" value="{{ $recette->temps_preparation }}"></label><br>
        <label>Temps de cuisson : <input type="number" name="temps_cuisson" value="{{ $recette->temps_cuisson }}"></label><br>
        <label>Instructions : <textarea name="instructions">{{ $recette->instructions }}</textarea></label><br>
        <button type="submit">Mettre à jour</button>
    </form>
</x-layout>
