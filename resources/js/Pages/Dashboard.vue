<script setup>
import GameHonor from "@/Components/GameHonor.vue";
import Header from "@/Components/Header.vue";
import Sidebar from "@/Components/Sidebar.vue";
import GameProposition from "@/Components/GameProposition.vue";
import BestLocation from "@/Components/BestLocation.vue";

</script>

<template>
    <div class="container-fluid min-vh-100">
        <div class="row">

            <div class="col-12">
                <div class="row">
                    <div class="col-12">
                        <Header/>
                    </div>
                </div>

                <div class="row">
                    <div class="col-2 mh-100">
                        <Sidebar />
                    </div>
                    <div class="col-8 mh-100">
                        <div class="row mb-4">
                            <div class="col-12 d-flex-justify-content-center">
                                <GameHonor/>
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
.row {
    //border: solid red;
}
.col-2 {
    //border: solid blue;
}
.col-8 {
    //border: solid blue;
}

</style>
