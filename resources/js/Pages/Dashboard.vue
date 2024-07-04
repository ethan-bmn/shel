<script setup>
import GameHonor from "@/Components/GameHonor.vue";
import Layout from "@/Layouts/Default.vue";
// Définition des propriétés requises que le composant reçoit via les props
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
