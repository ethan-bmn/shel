<script setup>
import BestLocation from "@/Components/BestLocation.vue";
import GameProposition from "@/Components/GameProposition.vue";
import Header from "@/Components/Header.vue";
import Sidebar from "@/Components/Sidebar.vue";

</script>

<template>
    <div class="container-fluid min-vh-100 body">
        <div class="row">

            <div class="layout__grid-global">
                <div class="row">
                    <div>
                        <Header/>
                    </div>
                </div>
                <div class="layout__grid-navbar mh-100">
                        <Sidebar page="home"/>
                    </div>
                <div class="row layout__height-global">
                    
                    <div class=" mh-100">
                        <div class="row mb-4">
                            <div class="d-flex-justify-content-center">
                                <slot />
                            </div>
                        </div>
                        <div class="row">
                            <div>
                                <div class="row d-flex justify-content-center">
                                    <GameProposition />
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
    </div>
</template>

<style scoped>
.layout__grid-global{
    padding: 16px;
    display: grid;
    gap: 16px;
    grid-template-columns: 20vh auto;
    grid-template-rows: auto auto;
    height: 100vh;
}
.layout__grid-navbar{
    grid-row-start: 1;
    height: calc(100vh - 32px);
    grid-row-end: 3;
}

.layout__grid-game{
    display: grid;
    grid-template-columns: auto 20%;
    grid-template-rows: 100vh;
}
.layout__height-global{
    height: calc(100vh - 32px);
    padding-bottom: 25px;

}
</style>
