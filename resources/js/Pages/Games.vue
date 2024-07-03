<script setup>
import Layout from "@/Layouts/Default.vue";
import { ref } from 'vue';
import {router, usePage} from "@inertiajs/vue3";

const isFilled = ref(false);

const props = defineProps({
    jeu: {
        type: Object,
        required: true
    },
    isInCart: {
        type: Boolean,
        required: true
    }
});

const isAdded = ref(props.isInCart);

function toggleHeart() {
    isFilled.value = !isFilled.value;
    axios.patch(`/api/games/${props.jeu.id}/like`, {
        action: isFilled.value ? 'like' : 'unlike'
    });
}

function addToCart() {
    if (!usePage().props.auth.user) {
        router.visit('/login');
        return;
    }
    isAdded.value = !isAdded.value;
    router.patch(`/api/add-to-cart/${props.jeu.id}`)
}

</script>

<template>
    <Layout :show-proposition="false">
        <div class="col-9 mh-100">
            <div class="title">
                {{jeu.name}}
            </div>
            <div id="img_pic" class="description__position">
                <div>
                    <img :src="jeu.picture" class="gameImage">
                    <div class="row mb-4 ">
                        <div class="col-2 d-flex fs-1">
                            <button class="button" @click="toggleHeart">
                                <i :class="[!isFilled ? 'bi-heart' : 'bi-heart-fill text-danger', 'bi', 'icon']"/>
                            </button>
                            <button class="button">
                                <i class="bi bi-chat-quote icon"/>
                            </button>
                            <button class="button" @click="addToCart">
                                <i :class="`shopping icon bi bi-cart${isInCart ? '-fill' : ''}`"/>
                            </button>
                        </div>
                        <p v-if="isAdded" class="text-light fs-4">Jeu ajouté au panier</p>
                        <div class="description">
                            Nombre de joueurs :
                            {{jeu.number_of_player}}
                            joueurs
                        </div>
                        <div class="description">
                            Temps pour une partie:
                            {{jeu.playing_time}}
                        </div>

                    </div>
                </div>

                <div class="description">
                    Description:
                    <br>
                    {{jeu.description}}
                </div>

            </div>

        </div>
    </Layout>
</template>

<style scoped>
.body{
    overflow: hidden;
}
.title{
    font-size: xxx-large;
    color: white;
    text-shadow: 0px 0px 20px #020024;

}
.gameImage{
    border-radius: 15px;
    height: 300px;
}
.description{
    color: white;
    text-align: justify;
}

.description__position{
    display: flex;
    flex-direction: row;
    gap: 16px;
}
.button{
    border-radius: 10px;
    background-color: transparent;
    border: none;
    color: white;
    margin: 10px;
}
.button:hover{
    box-shadow:0px 0px 10px 2px rgba(3, 158, 192, 0.9);
    border: 0.7px solid rgba(253, 253, 253, 0.4);
    border-radius: 10px;
    background: linear-gradient(320deg, rgba(7,161,236,1) 0%, rgba(41,124,246,1) 54%, rgba(27,39,94,1) 100%, rgba(26,45,184,1) 100%, rgba(26,151,184,1) 100%);
    transition: ease-in-out 0.3s;
}
.icon{
    color:#737272;
}
</style>
