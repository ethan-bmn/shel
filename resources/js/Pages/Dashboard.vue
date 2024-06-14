<script setup>
import GameHonor from "@/Components/GameHonor.vue";
import Header from "@/Components/Header.vue";
import Navbar from "@/Components/Navbar.vue";
import GameProposition from "@/Components/GameProposition.vue";

</script>

<template >
    <div class="row">
    <Header/>
    </div>
    <div class="row">
    <Navbar/>
    <GameHonor/>
        <GameProposition/>

    </div>
</template>

<style scoped>

</style>
