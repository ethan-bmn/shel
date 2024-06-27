<script setup>
import BestLocation from "@/Components/BestLocation.vue";
import Header from "@/Components/Header.vue";
import Sidebar from "@/Components/Sidebar.vue";
//

</script>

<template>
    <div class=" min-vh-100 body">
        <div class=" listgames__grid-global">

                <div >
                    <div >
                        <Header/>
                    </div>
                </div>
                <div class="mh-100 listgames__grid-navbar">
                    <Sidebar page="home"/>
                </div>
                <div class="listgames__grid-game">

                    <div class=" mh-100 listgames__height" >
                        <div class="listgames__border-list">
                            <div class="listgames__scrollbar">
                                <div class=" mb-4">
                                    <div class=" infos" >
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
                                <div v-for="i in [...Array(10).keys()]"
                                    class=" px-0 hover-image ">
                                    <div class=" mb-4">
                                        <div class=" infos" entete>
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
                            </div>
                        </div>
                    </div>
                    <div >
                        <BestLocation/>
                    </div>
                </div>
            </div>

        </div>
</template>

<style scoped>
.listgames__grid-global{
    padding: 16px;
    display: grid;
    gap: 16px;
    grid-template-columns: 20vh auto;
    grid-template-rows: auto auto;
    height: 100vh;
}
.listgames__grid-navbar{
    grid-row-start: 1;
    height: calc(100vh - 32px);
    grid-row-end: 3;
}
.listgames__grid-game{
    display: grid;
    grid-template-columns: auto 20%;
    grid-template-rows: 100vh;
}
.listgames__height{
    height: 100%;
}
.listgames__border-list{
    border: 1px solid #039EC0;
    border-radius: 33px;
    height: 70%;
}
.listgames__scrollbar{
    height: calc(100% - 50px);
    position: relative;
    overflow-x: hidden;
    overflow-y: auto;
    top: 25px;

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
    width:180px;
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
