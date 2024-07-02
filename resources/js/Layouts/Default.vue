<script setup>
import BestLocation from "@/Components/BestLocation.vue";
import GameProposition from "@/Layouts/Elements/GameProposition.vue";
import Header from "@/Layouts/Elements/Header.vue";
import Sidebar from "@/Layouts/Elements/Sidebar.vue";
defineProps({
    showProposition: {
        type: Boolean,
        required: false,
        default: () => true
    }
});
</script>

<template>
    <div class="container-fluid min-vh-100">
        <div class="row me-3 my-2">
            <div class="col-1">
                <Sidebar />
            </div>
            <div class="col-11">
                <div class="row">
                    <Header/>
                </div>
                <div class="row">
                    <div class="col-10">
                        <slot />
                    </div>
                    <div class="col-2">
                        <BestLocation />
                    </div>
                    <div v-if="showProposition" class="col-10 mt-4">
                        <div class="row d-flex justify-content-evenly">
                            <GameProposition />
                        </div>
                    </div>
                </div>
            </div>
<!--                <div class="layout__grid-navbar mh-100">-->
<!--                    </div>-->
<!--                <div class="row layout__height-global">-->
<!--                    -->
<!--                    <div class=" mh-100">-->
<!--                        <div class="row mb-4">-->
<!--                            <div class="d-flex-justify-content-center">-->
<!--                                <slot />-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="row d-flex justify-content-center">-->
<!--                            <GameProposition />-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->

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
    display: grid;
    grid-template-columns:auto auto;

}
</style>
