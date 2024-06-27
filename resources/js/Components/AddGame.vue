<script setup>

</script>

<template>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Nom</span>
        <input type="text" class="form-control" placeholder="Nom" aria-label="Nom" aria-describedby="basic-addon1" action="{{ route('boardgames.store') }}" method="POST">
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Description</span>
        <input type="text" class="form-control" placeholder="Description" aria-label="Description" aria-describedby="basic-addon1">
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Nombre de joueur(s)</span>
        <input type="text" class="form-control" placeholder="Nombre de joueur(s)" aria-label="Nombre de joueur(s)" aria-describedby="basic-addon1">
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Temps de jeux</span>
        <input type="text" class="form-control" placeholder="Temps de jeux" aria-label="Temps de jeux" aria-describedby="basic-addon1">
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Quantité(s)</span>
        <input type="text" class="form-control" placeholder="Quantité(s)" aria-label="Quantité(s)" aria-describedby="basic-addon1">
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Catégorie</span>
        <input type="text" class="form-control" placeholder="Catégorie" aria-label="Catégorie" aria-describedby="basic-addon1">
    </div>
</template>

<style scoped>

</style>
