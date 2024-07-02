<script setup>
import { Link } from '@inertiajs/vue3';

const props = defineProps({
    id:{
        type: Number,
        required:true 
    },
    name: {
        type: String,
        required: true
    },
    description:{
        type: String,
        required: true
    },
    image:{
        type: String,
        required: true
    },
    number_of_player:{
        type: String,
        required:true
    },
    playing_time:{
        type: String,
        required: true
    }
});

function goToGamePage() {
        window.location.href=`/games/${props.id}`;
}
</script>

<template>
    <Link class="button" :href="`/games/${id}`">
        <div class="listelem__card">
            <img src="../../../public/images/brassLancashire.png" class="listelem__img" alt="...">
            <div class="listelem__info listelem__info--hover">
                <div class="listelem__info-back listelem__info-back--hover">
                    <div class="info">
                        <p>{{ name }}</p>
                        <p>{{ number_of_player }}</p>
                    </div>
                    <div class="additional-info">
                        <p>{{ playing_time }}</p>
                        <p>{{ description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </Link>
</template>

<style scoped>
.button{
    text-decoration: none;
}
.listelem__card{
    width: 240px;
    height: 300px;
    border-radius: 33px;
}
.listelem__img{
    width: 100%;
    height: 100%;
    position: relative;
    border-radius: 33px;
}
.listelem__info{
    z-index: 2;
    bottom: 300px;
    padding-top: 200px;
    height: 100%;
    position: relative;
    transition: all 0.3s ease-in;
}
.listelem__info--hover:hover{
    padding-top: 0;
}
.listelem__info-back{
    padding: 10px;
    color: white;
    background-color: rgba(31, 53, 94, 0.8);
    width: 100%;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    border-radius: 0 0 33px 33px;
    position: relative;
    overflow: hidden;
}
.listelem__info-back--hover:hover{
    border-radius: 33px;
}

.info{
    width: 100%;
}
.additional-info{
    opacity: 0;
    width: 100%;
    transition: opacity 0.3s ease;
    position: absolute;
    bottom: 10px;
    padding-left: 10px;
}
.listelem__info--hover:hover .additional-info{
    opacity: 1;
}
</style>
