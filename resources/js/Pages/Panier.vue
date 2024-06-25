<script setup>
import GameHonor from "@/Components/GameHonor.vue";
import Header from "@/Components/Header.vue";
import Sidebar from "@/Components/Sidebar.vue";
import GameProposition from "@/Components/GameProposition.vue";
import BestLocation from "@/Components/BestLocation.vue";
//

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
                    <div class="col-8 mh-100" >
                        <div class="row mb-4">
                            <div class="col-12 infos" entete>
                                <div class="card col-2 px-0">
                                    Jeux
                                </div>
                                <div class="card ">
                                    Quantités
                                </div>
                                <div class="card ">
                                    Début location
                                </div>
                                <div class="card ">
                                    Fin location
                                </div>
                                <div class="card ">
                                    Prix
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="row d-flex justify-content-center">
                                    <GameProposition />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <BestLocation/>
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
.row {
    //border: solid red;
}
.col-2 {
    //border: solid blue;
}
.col-8 {
    //border: solid blue;
}
.infos{
    display: flex;
    flex-direction: row;
}
.entete{
    display: flex;
    justify-content: center;
    align-items: center;
}
.card{
    background-color:#ffffff;
    height:77px;
    width:200px;
    padding:0px;
    border-style:hidden;
    outline:none;
    margin: 5px;
    display: flex;
    justify-content: center;
    align-items: center;
}
</style>
