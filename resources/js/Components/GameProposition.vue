<script setup>
import CardGame from "@/Components/CardGame.vue";



</script>

<template>
    <div class=" navbar " >
        <CardGame class="carte" title_card-game="Titre dynamique" texte_card-game="texte dynamique"/>
        <CardGame class="carte"/>



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
</style>
