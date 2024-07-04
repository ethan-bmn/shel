<script setup>
import Layout from "@/Layouts/Default.vue";
import { Link } from '@inertiajs/vue3';

//

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
                        </div>
                    </div>
                    <div v-for="i in [...Array(10).keys()]"
                        class="col-12 px-0 hover-image ">
                        <div class="row mb-4">
                            <div class="col-12 infos" entete>
                                <div class="card">
                                    Jeux
                                </div>
                                <div class="card ">
                                    Début location
                                </div>
                                <div class="card ">
                                    Fin location
                                </div>
                                <div class="d-flex align-items-center justify-content-center fs-2 trash__color">
                                    <i class="bi bi-trash3 m-2"></i>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div >
                    <div class=" d-flex justify-content-end piedPage">
                        <Link :href="`/generate-pdf/2`">
                            <button type="button" class="btn btn-primary btn-lg commande">Commander</button>
                        </Link>
                    </div>
                </div>
            </div>
        </div>
    </Layout>
</template>

<style scoped>


.trash__color{
    color: red;
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
</style>
