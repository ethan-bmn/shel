<script setup>
import BestLocation from "@/Components/BestLocation.vue";
import GameHonor from "@/Components/GameHonor.vue";
import Layout from "@/Layouts/Default.vue";
//

defineOptions({
    layout: Layout
});

</script>

<template>
    <GameHonor />
</template>

<style scoped>
.body{
    overflow: hidden;
}

.dashboard__grid-global{
    padding: 16px;
    display: grid;
    gap: 16px;
    grid-template-columns: 20vh auto;
    grid-template-rows: auto auto;
    height: 100vh;
}
.dashboard__grid-navbar{
    grid-row-start: 1;
    height: calc(100vh - 32px);
    grid-row-end: 3;
}

.dashboard__grid-game{
    display: grid;
    grid-template-columns: auto 20%;
    grid-template-rows: 100vh;
}
.row {
    /* border: solid red; */
}
.col-2 {
/* border: solid blue; */
}
.col-8 {
    /* border: solid blue; */
}

</style>
