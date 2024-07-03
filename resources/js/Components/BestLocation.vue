<script setup>
import { Link, router } from "@inertiajs/vue3";
import axios from 'axios';
import { onMounted, ref } from 'vue';

const res = ref(null);


function goToGamePage(id) {
    router.visit(`/games/${id}`);
}

/**
 * Récupération des jeux populaire depuis l'API
 */
onMounted(async () => {
    try {
        const response = await axios.get('/api/jeux-populaires');
        res.value = response.data;
        console.log(res.value[0].id, 'console');
    } catch (error) {
        console.error('Erreur lors de la récupération des jeux:', error);
    }
});
</script>

<template>
    <div>
        <p class="d-flex justify-content-center BestLocation__title">POPULAIRE</p>
        <div v-if="res && res.length" v-for="jeu in res" :key="jeu.id" class="px-0">
            <div class="image-container rounded-3 mx-2">
                <div class="list-group-item list-group-item-action cadre d-flex justify-content-center hover-image">
                    <Link :href="`/games/${jeu.id}`" class="h-100 w-100">
                        <img :src="jeu.picture" class="img-fluid img__border z-50 h-100 w-100" alt="...">
                    </Link>
                </div>
            </div>
        </div>
        <div v-else>
            <p style="color: white">Chargement...</p>
        </div>
    </div>
</template>


<style scoped>


.BestLocation__title{
    color: white;
    font-size: 32px;
}
.list-group-item{
    margin-right: 15px;
}
.hover-image{
    height: 110px;
    width: 210px;
    border-radius: 5px;
    margin-bottom: 10px;

}
.cadre{
    background-color: transparent;
    border: none;
    padding-right: 0;
    margin-top: 10px;
}

.img__border{
    border-radius: 15px;
}
.hover-image:hover {
    transform: scale(1.2);
    box-shadow:0px 0px 10px 2px rgba(3, 158, 192, 0.90);
    /* filter: blur(1px); */
    border: 0.5px solid rgba(253, 253, 253, 0.4);
    border-radius: 15px;
}
</style>
<script>

</script>
