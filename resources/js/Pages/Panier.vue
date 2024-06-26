<script setup>
import BestLocation from "@/Components/BestLocation.vue";
import GameProposition from "@/Components/GameProposition.vue";
import Header from "@/Components/Header.vue";
import Sidebar from "@/Components/Sidebar.vue";
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
                            <div class="col-12 infos" >
                                <div class="entete ">
                                    Jeux
                                </div>
                                <div class="entete ">
                                    Quantités
                                </div>
                                <div class="entete ">
                                    Début location
                                </div>
                                <div class="entete ">
                                    Fin location
                                </div>
                                <div class="entete ">
                                    Prix
                                </div>
                            </div>
                        </div>
                        <div v-for="i in [...Array(5).keys()]"
                             class="col-12 px-0 hover-image ">
                                <div class="row mb-4">
                                    <div class="col-12 infos" entete>
                                        <div class="card">
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
    /* border: solid red; */
}
.col-2 {
    /* border: solid blue; */
}
.col-8 {
    /* border: solid blue; */
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
    width:200px;
    filter:drop-shadow(0px 0px 5px rgba(0.16470588743686676,0.49803921580314636,0.9882352948188782,0.7400000095367432));
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
</style>
