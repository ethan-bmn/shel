<script setup>
import {Link} from "@inertiajs/vue3";
import {ref} from "vue";

function goToGamePage(id) {
    router.visit(`/games/${id}`);
}

const randomJeux = ref([]);
axios.get('/api/jeux-aleatoires').then((res) => {
    randomJeux.value = res.data;
    console.log(randomJeux.value);
});


</script>

<template id="test">
    <div class="row d-flex justify-content-center">
        <div class="col-auto cadre">
            <span  class="gamehonor__title">Jeux à l'honneur</span>

            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="d-flex justify-content-center">
                        <div class="carousel-inner cadre_image">
                            <div v-for="jeu of randomJeux" class="carousel-item">
                                <Link @click="goToGamePage(jeu.id)">
                                    <img :src="jeu.picture">
                                </Link>
                            </div>
                        </div>
                </div>
            </div>

        </div>
    </div>
</template>
<style scoped>
.gamehonor__title{
    color: white;
    font: bold;
    font-size: 32px;
}
.cadre{
    width: 90%;



}
.cadre_image{
    border-radius: 15px;
}
.cadre_image:hover{
    box-shadow:0px 0px 10px 2px rgba(3, 158, 192, 0.9000000095367432);
    /* filter: blur(1px); */
    border: 0.5px solid rgba(253, 253, 253, 0.4);
    border-radius: 15px;
}
.image{
    width: 100%;
    height: 100%;
}
</style>
