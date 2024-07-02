<script setup>
import GameHonor from "@/Components/GameHonor.vue";
import Header from "@/Layouts/Elements/Header.vue";
import Sidebar from "@/Layouts/Elements/Sidebar.vue";
import GameProposition from "@/Layouts/Elements/GameProposition.vue";
import BestLocation from "@/Components/BestLocation.vue";
import AddGame from "@/Components/AddGame.vue";
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
                    <div class="col-8 mh-100">
                        <AddGame/>
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


</style>
