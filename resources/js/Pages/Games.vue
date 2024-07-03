<script setup>
import Layout from "@/Layouts/Default.vue";
import {onMounted, ref} from 'vue';
import {router, usePage} from "@inertiajs/vue3";
import axios from "axios";

const res = ref([]);
const comment = ref('');
const commentaires = ref([]);
const user_Id=1;
//const game_Id=55;
const isFilled = ref(false);

const props = defineProps({
    jeu: {
        type: Object,
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
async function submitComment() {
    try {
        await axios.post('/api/recommendation', {
            user_id: user_Id,
            boardgame_id: props.jeu.id,
            commentary: comment.value
        });
        comment.value = ''; // Reset the comment input after submission
    } catch (error) {if (error.response && error.response.status === 422) {
        errors.value = error.response.data.errors; // Stocker les erreurs de validation
    } else {
        console.error('Erreur lors de l\'ajout du commentaire:', error);
    }
    }
}

function addToCart() {
    if (!usePage().props.auth.user) {
        router.visit('/login');
        return;
    }
    isAdded.value = !isAdded.value;
    router.patch(`/api/add-to-cart/${props.jeu.id}`)
}
onMounted(async () => {
    try {
        const response = await axios.get('/api/read-recommendation');
        res.value = response.data;
        const filteredComments = [];
        for (const com of res.value) {
            if (com.boardgame_id === props.jeu.id) {
                filteredComments.push(com.commentary);
            }
        }
        commentaires.value = filteredComments;
        console.log(commentaires.value[0], 'commentaire');
        return commentaires;

    } catch (error) {
        console.error('Erreur lors de la récupération des commentaire:', error);
    }
});
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
                            <button class="button" @click="addToCart">
                                <i :class="`shopping icon bi bi-cart${isInCart ? '-fill' : ''}`"/>
                            </button>
                        </div>
                        <form @submit.prevent="submitComment">
                            <div class="input-group flex-nowrap">
                                <span class="input-group-text" id="addon-wrapping"><i class="bi bi-chat-quote icon"/></span>
                                <input type="text" v-model="comment" class="form-control" placeholder="Votre commentaire" aria-label="Commentaire" aria-describedby="addon-wrapping">
                                <button type="submit" class="btn btn-light" style="border-left: solid 1px lightgrey">Soumettre</button>
                            </div>
                        </form>
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
                <div class="description" >
                    Description:
                    <br>
                    {{jeu.description}}
                </div>
                <table class="table" >
                    <thead>
                    <tr class="d-flex justify-content-center">
                        <th scope="col">#</th>
                        <th scope="col">commentaire</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="(comment, index) in commentaires" :key="index" class="d-flex justify-content-center">
                        <th scope="row">{{ index + 1 }}</th>
                        <td>{{ comment }}</td>
                    </tr>
                    </tbody>
                </table>
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
