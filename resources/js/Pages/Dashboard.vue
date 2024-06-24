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
        <GameHonor image1="https://cf.geekdo-images.com/SPuwc6RJ6y4PnTH36Pegsg__imagepage/img/ivHc67HBVg5spOFT4f7CwUbNLT4=/fit-in/900x600/filters:no_upscale():strip_icc()/pic3511783.png"
        />
        <BestLocation/>
    </div>
    <div class="row">
        <GameProposition/>

    </div>
</template>

<style scoped>

</style>
