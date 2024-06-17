<script setup>
import CardGame from "@/Components/CardGame.vue";


</script>

<template>
    <div class="d-flex navbar" >
        <CardGame class="carte"/>
        <CardGame class="carte"/>

    </div>

</template>

<style scoped>
.navbar{
    border: solid 1px red;
    border-radius: 15px;
}
.carte{
    height: 20px;
}
</style>
