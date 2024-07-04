<script setup>
import AddGame from "@/Components/AddGame.vue";
import Header from "@/Layouts/Elements/Header.vue";
import Sidebar from "@/Layouts/Elements/Sidebar.vue";
import axios from "axios";
import { onMounted, ref } from "vue";

const res =ref([]);

// Appelée lorsque le composant est monté sur le DOM
onMounted(async () => {
    try {
        const response = await axios.get('/api/games');
        console.log(response,'test csv');
        const dataGame = response.data;
        res.value = dataGame.boardgame;
        console.log(res.value,'test csv2');
        console.log(dataGame);

        return res.value;

    } catch (error) {
        console.error('Erreur lors de la récupération des jeux pour csv:', error);
    }
});

// Fonction pour exporter les jeux en format CSV
function exportCSV(){
    const headers = ['#','Nom du jeux', 'Nombre de joueurs', 'Durée de partie', 'Recommandation'];
    const data= res.value.map((game, index)=>[
        index+1,
        game.name,
        game.number_of_player,
        game.playing_time,
        game.number_of_recommendation
    ]);
    const csvContent = [
        headers.join(','),
        ...data.map(row=>row.join(','))
    ].join('\n');
    const blob = new Blob([csvContent],{type: 'text/csv;charset=utf-8;'});
    const url = URL.createObjectURL(blob);
    const link = document.createElement('a');
    link.setAttribute('href',url);
    link.setAttribute('download','games.csv');
    link.style.visibility='hidden';
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
}
</script>

<template>
    <div class="container-fluid min-vh-100 body">
        <div class="row">

            <div class="col-12">
                <div class="row">
                    <div class="col-12">
                        <Header/>
                    </div>
                </div>

                <div class="row">
                    <div class="col-2 mh-100">
                        <Sidebar page="home"/>
                    </div>
                    <div class="col-8 mh-100">
                        <AddGame/>
                        <button @click="exportCSV" class="btn btn-primary mt-3">Exporter en CSV</button>
                    </div>

                </div>
            </div>

        </div>
    </div>
</template>

<style scoped>
.body{
    overflow: hidden;
}


</style>
