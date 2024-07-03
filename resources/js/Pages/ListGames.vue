<script setup>
import ListElem from "@/Components/ListElem.vue";
import Layout from "@/Layouts/Default.vue";

//
defineProps(['jeux']
);
</script>

<template>
    <Layout :show-proposition="false">
        <div>
            <div class="listgames__border-list">
                <div class="listgames__scrollbar">
                    <div class="cardGame">
                        <div v-for="jeu in jeux" :key="jeu.id"
                                class=" px-0 listgame__card">
                            <ListElem :playing_time="jeu.playing_time" :number_of_player="jeu.number_of_player" :description="jeu.description" :name="jeu.name" :id="jeu.id" :picture="jeu.picture"></ListElem>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </Layout>
</template>

<style scoped>


.listgame__card{
    padding-bottom: 16px;
    display: flex;
    justify-content: center;
}
.listgames__border-list{
    border: 1px solid #039EC0;
    border-radius: 33px;
    height: 80vh;
}
.listgames__scrollbar{
    height: 82%;
    position: relative;
    overflow-x: hidden;
    overflow-y: auto;
    top: 25px;
}
.infos{
    display: flex;
    flex-direction: row;
    justify-content: center;
}
.entete{
    display: flex;
    justify-content: center;
    align-items: center;
}
.card{
    background-color:#1e2945;
    height:77px;
    width:180px;
    filter:drop-shadow(0px 0px 5px rgba(0.16,0.5,0.98,0.74));
    border-radius:20px;
    /* border:1px solid rgba(3, 158, 192, 0.7400000095367432); */
    margin: 5px;
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
}
.entete{
    background-color:transparent;
    height:77px;
    width:200px;
    padding:0px;
    border-style:hidden;
    outline:none;
    margin: 5px;
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
    text-shadow: 0px 0px 20px #020024;
    font-size: larger;
}
.cardGame{
    display:grid;
    grid-template-columns: auto auto auto;
    grid-template-rows: repeat(auto-fill);
}
</style>
