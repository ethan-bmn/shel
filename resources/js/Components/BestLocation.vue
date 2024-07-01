<script setup>


import CardBestLocation from "@/Components/CardBestLocation.vue";
</script>

<template>
    <div>
        <p class="d-flex justify-content-center BestLocation__title">POPULAIRE</p>
        <div  v-for="i in [...Array(5).keys()]"
            class="px-0 " >
            <button @click="goToGamePage" class="list-group-item list-group-item-action cadre d-flex justify-content-center">
                <CardBestLocation class="hover-image"
                title="Titre"
                image="https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/869241/header.jpg?t=1555788090"
                />
            </button>
        </div>
    </div>
</template>

<style scoped>


.BestLocation__title{
    color: white;
    font-size: 32px;
}
.list-group-item{
    margin-right: 15px;
}
.hover-image{
    height: 80px;
    width: 268px;
    border-radius: 5px;
    margin-bottom: 10px;



}
.cadre{
    background-color: transparent;
    border: none;
    padding-right: 0;
    margin-top: 10px;
}


.hover-image:hover {
    transform: scale(1.2);
    box-shadow:0px 0px 10px 2px rgba(3, 158, 192, 0.9000000095367432);
    /* filter: blur(1px); */
    border: 0.5px solid rgba(253, 253, 253, 0.4);
    border-radius: 15px;
}
</style>
<script>
export default {
    methods:{goToGamePage() {
            window.location.href = '/games';
        }
    }
}
</script>
