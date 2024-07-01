<script setup>
import GameHonor from "@/Components/GameHonor.vue";
import Layout from "@/Layouts/Default.vue";
//
defineProps({
    jeuRandom: {
        type: Object,
        required: true
    }
});

defineOptions({
    layout: Layout
});

</script>

<template>
    <GameHonor :jeuRandom />
</template>

<style scoped>
.body{
    overflow: hidden;
}

</style>
