<script setup>
defineProps({
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
</script>

<template>
    <div class="cardgamme__card">
        <img src="../../../public/images/brassLancashire.png" class="cardgame__img" alt="...">
        <div class="cardgame__info cardgame__info--hover">
            <div class="cardgame__info-back cardgame__info-back--hover">
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
</template>

<style scoped>
.cardgamme__card{
    width: 240px;
    height: 300px;
    border-radius: 33px;
}
.cardgame__img{
    width: 100%;
    height: 100%;
    position: relative;
    border-radius: 33px;
}
.cardgame__info{
    z-index: 2;
    bottom: 300px;
    padding-top: 200px;
    height: 100%;
    position: relative;
    transition: all 0.3s ease-in;
}
.cardgame__info--hover:hover{
    padding-top: 0;
}
.cardgame__info-back{
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
.cardgame__info-back--hover:hover{
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
.cardgame__info--hover:hover .additional-info{
    opacity: 1;
}
</style>
