<script setup>
import Layout from "@/Layouts/Default.vue";
import { Link } from '@inertiajs/vue3';


// Définition des propriétés requises que le composant reçoit via les props
const props = defineProps({
    content: {
        type: Object,
        required: true
    },

});
const getCurrentDate = () => {
    const date = new Date();
    const year = date.getFullYear();
    const month = String(date.getMonth() + 1).padStart(2, '0');
    const day = String(date.getDate()).padStart(2, '0');
    return `${year}-${month}-${day}`;
};
const getAndDate = () => {
    const date = new Date();
    const year = date.getFullYear();
    const month = String(date.getMonth() + 1).padStart(2, '0');
    const day = String(date.getDate()+15).padStart(2, '0');
    return `${year}-${month}-${day}`;
};
function addToCart(game_id) {
    if (!usePage().props.auth.user) {
        router.visit('/login');
        return;
    }
    console.log('test')
    router.patch(`/api/add-to-cart/${game_id}`)
}

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
                                Image
                            </div>
                            <div class="entete">
                                supprimer
                            </div>
                        </div>
                    </div>
                    <div v-if="content" v-for="loc in content" :key="loc.id"

                         class="col-12 px-0 hover-image ">
                        <div class="row mb-4">
                            <div class="col-12 infos">
                                <div class="card " >
                                    {{loc.name}}
                                </div>
                                <div class="card ">
                                    {{ getCurrentDate() }}
                                </div>

                                <div class="card ">
                                    {{getAndDate()}}
                                </div>
                                <div  class="card-img">
                                    <img :src="loc.picture" class="img-fluid  img__form z-50" alt="...">
                                </div>
                                <button @click="addToCart(loc)" class="d-flex align-items-center justify-content-center fs-2 trash__color">
                                        <i class="bi bi-trash3 m-2"></i>
                                </button>

                            </div>

                        </div>
                    </div>
                </div>
            </div>


            <div class="row  justify-content-end">
                <div class="col-auto d-flex justify-content-end piedPage">
                    <a as="button" class="btn btn-primary btn-lg commande" href="/generate-pdf/2" target="_blank    ">Commander</a>
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

.trash__color{
    color: red;
    background: transparent;
    box-shadow: none;
    border : none;
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
    height: calc(100% - 90px);
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
.commande{
    box-shadow:0px 0px 10px 2px rgba(3, 158, 192, 0.9);
    border: 0.5px solid rgba(253, 253, 253, 0.4);
    border-radius: 15px;
    border: 1px solid white;
    font-size: 32px;
    width: 15rem;
}
.piedPage{
    margin-top: 16px;
    gap: 16px;
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
