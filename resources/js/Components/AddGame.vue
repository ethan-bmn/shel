<script setup>
import axios from 'axios';
import { onMounted, ref } from 'vue';

// Références réactives pour stocker les catégories et la catégorie sélectionnée
const categories = ref([]);
const selectedCategory = ref(null);


// Récupération des catégories depuis l'API

onMounted(async () => {
    try {
        const response = await axios.get('/api/category-choice');
        categories.value = response.data;
        console.log(categories.value[0].id, 'console')
    } catch (error) {
        // Capture et affiche les erreurs liées à la récupération des catégories
        console.error('Erreur lors de la récupération des catégories:', error);
    }
});

</script>

<template>
    <form :action="route('boardgames.store')" method="POST">
         <!-- Champs du formulaire pour créer un jeu de société -->

        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Nom</span>
            <input type="text" name="name" class="form-control" placeholder="Uno" aria-label="Nom" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Description</span>
            <input type="text" name="description" class="form-control" placeholder="Jeu de carte avec 4 couleurs le premier qui n'a plus de carte a gagné!" aria-label="Description" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Nombre de joueur(s)</span>
            <input type="text" name="number_of_player" class="form-control" placeholder="beaucoup" aria-label="Nombre de joueur(s)" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Temps de jeux</span>
            <input type="text" name="playing_time" class="form-control" placeholder="15-60 min" aria-label="Temps de jeux" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Image</span>
            <input type="text" name="picture" class="form-control" placeholder="image" aria-label="Temps de jeux" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Catégorie</span>
            <select class="form-select" aria-label="Default select example" v-model="selectedCategory" name="category_id" required>
                <option v-for="category in categories" :key="category.id" :value="category.id">
                    {{ category.name_category }}
                </option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Soumettre</button>
    </form>
</template>

<style scoped>
</style>
