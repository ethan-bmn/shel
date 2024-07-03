<script setup>import Layout from "@/Layouts/Default.vue";
import axios from 'axios';
import { onMounted, ref } from 'vue';

const res = ref([]);
const games = ref([]);
const user_Id = 1;
defineProps(['jeux'])


/*function goToGamePage(id) {
    router.visit(`/games/${id}`);
}*/

/**
 * Récupération des jeux populaire depuis l'API
 */
const fetchGame = async (gameId)=>{
    try{
        const response = await axios.get(`/api/game/${gameId}`);
        return response.data.name
        /*console.log(game.value.name,'game');*/

    }catch (error){
        console.log('Erreur lors de la récupération des info du jeu', error);
    }
}
onMounted(async () => {
    try {
        const response = await axios.get(`/api/locations/${user_Id}`);
        const locations =response.data;
        /*console.log(locations,'locations');*/
        games.value = await Promise.all(locations.map(async (location)=>{
            const game =await fetchGame(location.game_id);
            return{
                location,
                game
            };
        }));
        console.log(games.value, 'console');
    } catch (error) {
        console.error('Erreur lors de la récupération des jeux loué:', error);
    }

});


</script>

<template>
    <Layout :show-proposition="false">

        <div class="mh-100 panier__height" >
            <div class="panier__border-list">
                <div class="panier__scrollbar">
                    <div class="row mb-4">
                        <div class="col-12 infos" >
                            <div class="entete ">
                                Jeux
                            </div>
                            <div class="entete ">
                                Début location
                            </div>
                            <div class="entete ">
                                Fin location
                            </div>
                            <div class="entete ">
                                image jeux
                            </div>
                        </div>
                    </div>
                    <div v-if="games" v-for="loc in games" :key="loc.id"

                         class="col-12 px-0 hover-image ">
                        <div class="row mb-4">
                            <div class="col-12 infos">
                                <div class="card " >
                                    {{loc.game}}
                                </div>
                                <div class="card ">
                                    {{loc.location.start_date}}
                                </div>
                                <div v-if="loc.location.end_date" class="card ">
                                    {{ loc.location.end_date }}
                                </div>
                                <div v-else class="card ">
                                    En cours
                                </div>
                                <div  class="card-img">
                                    <img src="https://www.gigamic.com/1837-large_default/akropolis.jpg" class="img-fluid  img__form z-50" alt="...">
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </Layout>
</template>

<style scoped>


.img__form{
    border-radius: 15px;
    width: 100%;
    height: 100%;

}
.panier__height{
    height: 80%;
}
.panier__border-list{
    border: 1px solid #039EC0;
    border-radius: 33px;
    height: 80vh;
}
.panier__scrollbar{
    height: calc(100% - 50px);
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
.hover-image{
    display: flex;
    justify-content: center;
}

.card-img{

    height: 77px;
    width: 180px;
    filter: drop-shadow(0px 0px 5px rgba(0.16, 0.5, 0.98, 0.74));
    border-radius: 20px;
    /* border: 1px solid rgba(3, 158, 192, 0.7400000095367432); */
    margin: 5px;
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
}
</style>
