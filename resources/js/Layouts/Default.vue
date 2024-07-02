<script setup>
import BestLocation from "@/Components/BestLocation.vue";
import GameProposition from "@/Layouts/Elements/GameProposition.vue";
import Header from "@/Layouts/Elements/Header.vue";
import Sidebar from "@/Layouts/Elements/Sidebar.vue";
import { router } from "@inertiajs/vue3";
import NProgress from 'nprogress';

defineProps({
    showProposition: {
        type: Boolean,
        required: false,
        default: () => true
    }
});

//Loading progress indicator config
NProgress.configure({
    showSpinner: true,
    blur: true,
    parent: '#slot',
});
let timeout = null;

router.on('start', () => {
    timeout = setTimeout(() => NProgress.start(), 250)
});

router.on('progress', (event) => {
    if (NProgress.isStarted() && event.detail.progress.percentage) {
        NProgress.set((event.detail.progress.percentage / 100) * 0.9)
    }
});

router.on('finish', (event) => {
    clearTimeout(timeout);
    if (!NProgress.isStarted()) {
        return;
    } else if (event.detail.visit.completed) {
        NProgress.done();
    } else if (event.detail.visit.interrupted) {
        NProgress.set(0);
    } else if (event.detail.visit.cancelled) {
        NProgress.done();
        NProgress.remove();
    }
});
</script>

<template>
    <div class="container-fluid min-vh-100">
        <div class="row me-3 vh-100">
            <div class="col-1 my-3">
                <Sidebar />
            </div>
            <div class="col-11">
                <div class="row">
                    <Header/>
                </div>
                <div class="row">
                    <div class="col-10">
                        <div id="slot" >
                            <slot />
                        </div>
                        <div v-if="showProposition" class="mt-4">
                            <div class="row d-flex justify-content-evenly">
                                <GameProposition />
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <BestLocation/>
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
