<script setup>

import Header from "@/Layouts/Elements/Header.vue";
import Sidebar from "@/Layouts/Elements/Sidebar.vue";

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
                        <form>

                        </form>
                    </div>
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
