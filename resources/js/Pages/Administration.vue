<script setup>
import AddGame from "@/Components/AddGame.vue";
import Layout from '@/Layouts/Default.vue';
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
    <Layout :show-proposition="false">
        <div class="mx-auto w-75">
            <AddGame/>
            <button @click="exportCSV" class="btn btn-primary mt-3">Exporter en CSV</button>
        </div>
    </Layout>
</template>

<style scoped>
.body{
    overflow: hidden;
}


</style>
