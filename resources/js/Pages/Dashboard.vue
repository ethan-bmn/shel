<script setup>
import GameHonor from "@/Components/GameHonor.vue";
import Header from "@/Components/Header.vue";
import Navbar from "@/Components/Navbar.vue";
import GameProposition from "@/Components/GameProposition.vue";
import BestLocation from "@/Components/BestLocation.vue";

</script>

<template >
    <div class="row">
        <Header/>
    </div>
    <div class="row">
        <Navbar/>
        <GameHonor/>
        <BestLocation/>
    </div>
    <div class="row">
        <GameProposition/>
    </div>
</template>

<style scoped>

</style>
