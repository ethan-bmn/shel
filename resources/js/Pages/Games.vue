<script setup>
import Layout from "@/Layouts/Default_without_propal.vue";



import { ref } from 'vue';

const isFilled = ref(false);


defineOptions({
    layout: Layout
});
//
const props = defineProps({
    jeu: {
        type: Object,
        required: true
    }
});
function toggleHeart() {
    isFilled.value = !isFilled.value;
}
</script>

<template>
    <div class="col-6 mh-100">
        <div class="title">
            {{jeu.name}}
        </div>
        <div id="img_pic">
            <img :src="jeu.picture" class="gameImage">
        </div>
        <div class="row mb-4 ">
            <div class="col-2 d-flex test">
                <button @click="toggleHeart" class="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-heart icon" viewBox="0 0 16 16">
                        <path v-if="isFilled" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                        <path v-else d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15"/>
                    </svg>
                </button>
                    <button class="button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-chat-quote icon" viewBox="0 0 16 16">
                            <path d="M2.678 11.894a1 1 0 0 1 .287.801 11 11 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8 8 0 0 0 8 14c3.996 0 7-2.807 7-6s-3.004-6-7-6-7 2.808-7 6c0 1.468.617 2.83 1.678 3.894m-.493 3.905a22 22 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a10 10 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9 9 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105"/>
                            <path d="M7.066 6.76A1.665 1.665 0 0 0 4 7.668a1.667 1.667 0 0 0 2.561 1.406c-.131.389-.375.804-.777 1.22a.417.417 0 0 0 .6.58c1.486-1.54 1.293-3.214.682-4.112zm4 0A1.665 1.665 0 0 0 8 7.668a1.667 1.667 0 0 0 2.561 1.406c-.131.389-.375.804-.777 1.22a.417.417 0 0 0 .6.58c1.486-1.54 1.293-3.214.682-4.112z"/>
                        </svg>
                    </button>
                    <button class="button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cart3 shopping icon" viewBox="0 0 16 16">
                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l.84 4.479 9.144-.459L13.89 4zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                        </svg>
                    </button>
            </div>
            <div class="description">
                Description:
                {{jeu.description}}
            </div>

        </div>
    </div>
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
}
.button{
    border-radius: 10px;
    background-color: transparent;
    border: none;
    color: white;
    margin: 10px;
}
.test {
    margin-top: 10px;
    justify-content: space-between;
}
.button:hover{
    box-shadow:0px 0px 10px 2px rgba(3, 158, 192, 0.9000000095367432);
    border: 0.7px solid rgba(253, 253, 253, 0.4);
    border-radius: 10px;
    background: linear-gradient(320deg, rgba(7,161,236,1) 0%, rgba(41,124,246,1) 54%, rgba(27,39,94,1) 100%, rgba(26,45,184,1) 100%, rgba(26,151,184,1) 100%);
}
   
.icon{
    color:#737272; 
    transition: fill 0.3s ease;
}

</style>
