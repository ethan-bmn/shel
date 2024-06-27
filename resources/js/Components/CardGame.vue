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
    <div class="cardgamme__card" >
        <img src="../../../public/images/brassLancashire.png" class="cardgame__img" alt="...">
        <div class="cardgame__info cardgame__info--hover">
            <div class="cardgame__info-back cardgame__info-back--hover">
                <div class="cardgame__position"><p>{{ name }}</p> <p>{{ number_of_player }}</p></div>
                <div class="cardgame__hide cardgame__hide--hover"><p>{{ playing_time }}</p> <p>{{ name }}</p></div>
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

}

.cardgame__info--hover:hover{
    z-index: 2;
    bottom: 300px;
    padding-top: 0;
    height: 100%;
    position: relative;

}
.cardgame__info-back{
    padding-top: 10px;
    color: white;
    background-color: rgba(31, 53, 94, 0.8);
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    border-radius: 0 0 33px 33px;
}
.cardgame__info-back--hover:hover{
    border-radius: 33px;
}
.cardgame__position{
    display: flex;
    justify-content: center;
}
.cardgame__hide{
    display: none;
}
.cardgame__hide--hover:hover{
    display: flex;
    justify-content: center;
}
</style>
