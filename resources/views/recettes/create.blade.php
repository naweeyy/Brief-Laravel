<x-layout>
    <h1>Créer une nouvelle recette</h1>
    <form method="POST" action="{{ route('recettes.store') }}">
        @csrf
        <label>Nom : <input type="text" name="nom"></label><br>
        <label>Description : <textarea name="description"></textarea></label><br>
        <label>Temps de préparation : <input type="number" name="temps_preparation"></label><br>
        <label>Temps de cuisson : <input type="number" name="temps_cuisson"></label><br>
        <label>Instructions : <textarea name="instructions"></textarea></label><br>
        <button type="submit">Créer</button>
    </form>
</x-layout>
