<script setup>


import GameCard from "@/Components/GameCard.vue";
</script>

<template>

    <div  v-for="i in [...Array(5).keys()]"
         class="col-2 px-0 hover-image " >
        <button @click="goToGamePage" class="list-group-item list-group-item-action cadre ">
            <GameCard title="" image="public/images/brassLancashire.png" body=""></GameCard>
        </button>


<!--        <span class="d-flex justify-content-center" style="color: white">POPULAIRE</span>
        <button type="button" class="list-group-item list-group-item-action cadre " aria-current="true" @click="goToGamePage">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR2iWB6jGX6Skzi0d0UQ_p1UjxaFT2PgVEHuA&s" class="img-fluid image" alt="...">
        </button>
        <button type="button" class="list-group-item list-group-item-action cadre" >
            <img src="https://imgs.search.brave.com/EPK3Qvrgr913_E2v1SPbZFgmDLWG10eWXsJnF0GSQFY/rs:fit:500:0:0/g:ce/aHR0cHM6Ly93d3cu/bGlsbG9qZXV4LmNh/L3dwLWNvbnRlbnQv/dXBsb2Fkcy8yMDE0/LzExL2NhcmNhc3Nv/bm5lLWpldS5qcGc" class="img-fluid image" alt="...">
        </button>
        <button type="button" class="list-group-item list-group-item-action cadre">
            <img src="https://imgs.search.brave.com/EPK3Qvrgr913_E2v1SPbZFgmDLWG10eWXsJnF0GSQFY/rs:fit:500:0:0/g:ce/aHR0cHM6Ly93d3cu/bGlsbG9qZXV4LmNh/L3dwLWNvbnRlbnQv/dXBsb2Fkcy8yMDE0/LzExL2NhcmNhc3Nv/bm5lLWpldS5qcGc" class="img-fluid image" alt="...">
        </button>
        <button type="button" class="list-group-item list-group-item-action cadre">
            <img src="https://cf.geekdo-images.com/Oh3kHw6lweg6ru71Q16h2Q__imagepage/img/Yb3tBDagMIaGMxDlhomv8pLc3Zk=/fit-in/900x600/filters:no_upscale():strip_icc()/pic5235277.jpg" class="img-fluid image" alt="...">
        </button>
        <button type="button" class="list-group-item list-group-item-action cadre">
            <img src="https://cf.geekdo-images.com/Oh3kHw6lweg6ru71Q16h2Q__imagepage/img/Yb3tBDagMIaGMxDlhomv8pLc3Zk=/fit-in/900x600/filters:no_upscale():strip_icc()/pic5235277.jpg" class="img-fluid image" alt="...">
        </button>-->




    </div>
</template>

<style scoped>
.list-group{
    margin-right: 10px;
}
.image{
    height: 80px;
    width: 280px;
    border-radius: 5px;

}
.cadre{
    background-color: transparent;
    border: none;
    padding-right: 0;
    margin-top: 10px;
}
.image:hover{
    box-shadow:0px 0px 10px 2px rgba(3, 158, 192, 0.9000000095367432);
    //filter: blur(1px);
    border: 0.5px solid rgba(253, 253, 253, 0.4);
    border-radius: 15px;
    transform: scale(1.2);
    margin-bottom: 5px;
    margin-top: 5px;
}
</style>
<script>
export default {
    methods:{goToGamePage() {
            window.location.href = '/games';
        }
    }
}
</script>
