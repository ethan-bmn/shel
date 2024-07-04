<script setup>
import Layout from "@/Layouts/Default.vue";
import { defineProps } from 'vue';
const props = defineProps({
    user: {
        type: Object,
        required: true
    }
});

console.log(props.user);


</script>

<template>
    <Layout :show-proposition="false">
        <div class="container-fluid body">
            <div class="">
                <img src="../../../public/images/claustrophobia.png" class="profil">
                <!-- <div>{{ user.name }}</div> -->
            </div>
            <form action="" class="row">

                <div class="m-2">
                    <p class="text-white">Mail</p>
                    <input type="text">
                </div>
                <div class="m-2">
                    <p class="text-white">Mot de passe </p>
                    <input type="text">
                </div>
                <div class="m-2 text">
                    <p class="text-white">Mot de passe</p>
                    <input type="text">
                </div>
            </form>
        </div>
    </Layout>
</template>

<style scoped>
.profil{
    border-radius: 300px;
    height: 300px;
    width: 300px;
}
.body{
    overflow: hidden;
}


</style>
