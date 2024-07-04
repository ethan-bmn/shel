<script setup>
import { Link } from "@inertiajs/vue3";

// Définition des propriétés requises que le composant reçoit via les props
const props = defineProps({
    jeuRandom: {
        type: Object,
        required: true
    }
});

console.log(props.jeuRandom.picture);



</script>

<template id="test">
    <div class="row d-flex justify-content-center">
        <div class="col-auto cadre">
            <!-- Affichage de la liste des jeux populaire -->
            <span  class="gamehonor__title">Jeux à l'honneur</span>
                <div class="d-flex justify-content-center">
                    <Link :href="`/games/${jeuRandom.id}`">
                        <img :src="jeuRandom.picture" class="img-fluid cadre_image">
                    </Link>
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
    height: 50vh;
}
.cadre_image:hover{
    box-shadow:0px 0px 10px 2px rgba(3, 158, 192, 0.9000000095367432);
    border: 0.5px solid rgba(253, 253, 253, 0.4);
    border-radius: 15px;
}
.image{
    width: 100%;
    height: 100%;
}
</style>
