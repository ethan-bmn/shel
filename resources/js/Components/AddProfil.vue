<script setup>

</script>

<template>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Nom</span>
        <input type="text" class="form-control" placeholder="Nom" aria-label="Nom" aria-describedby="basic-addon1" action="{{ route('boardgames.store') }}" method="POST">
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">@email</span>
        <input type="text" class="form-control" placeholder="@email" aria-label="@email" aria-describedby="basic-addon1">
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Password</span>
        <input type="text" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Con</span>
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
