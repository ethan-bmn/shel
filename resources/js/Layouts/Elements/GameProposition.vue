<script setup>
import GameCard from "@/Components/GameCard.vue";
import { ref, onMounted } from 'vue';
import { Link, router } from "@inertiajs/vue3";
import axios from 'axios';

const res = ref(null);  // Créer une propriété réactive pour stocker les données

function goToGamePage(id) {
    router.visit(`/games/${id}`);
}

onMounted(async () => {
    try {
        const response = await axios.get('/api/jeux-random');
        res.value = response.data;  // Assigner les données récupérées à la propriété réactive
        console.log(res.value[0].id, 'console');
    } catch (error) {
        console.error('Erreur lors de la récupération des jeux:', error);
    }
});



</script>

<template>

    <div
        v-if="res && res.length" v-for="jeu in res" :key="jeu.id"
        class="col-2 px-0 hover-image "
    >
        <GameCard
            :title="jeu.name"
            :image="jeu.picture"
            :body="jeu.description"
            :id="jeu.id"
        />
    </div>

</template>

<style scoped>


.navbar{
    border: solid 1px red;
    border-radius: 15px;
    padding:5px 5px;

}
.carte{
    height: 20px;
    width: 40rem;
}


.hover-image {
    height: auto;
    transition: transform 0.3s ease-in-out;
    margin: 0.5rem ;
}

.hover-image:hover {
    transform: scale(1.2);
    box-shadow:0px 0px 10px 2px rgba(3, 158, 192, 0.9000000095367432);
    /* filter: blur(1px); */
    border: 0.5px solid rgba(253, 253, 253, 0.4);
    border-radius: 15px;
}
</style>
