<script setup>
import CardGame from "@/Components/CardGame.vue";
import GameCard from "@/Components/GameCard.vue";



</script>

<template>
<!--        <CardGame class="carte"/>-->
<!--        <CardGame class="carte"/>-->

    <div
        v-for="i in [...Array(5).keys()]"
        class="col-2 px-0 hover-image "
    >
        <GameCard
            title="Title"
            image="https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/869241/header.jpg?t=1555788090"
            body="Body" />
    </div>

</template>

<style scoped>


.navbar{
    border: solid 1px red;
    border-radius: 15px;
    padding:5px 5px;

}
.carte{
    height: 20px;
    width: 40rem;
}


.hover-image {
    height: auto;
    transition: transform 0.3s ease-in-out;
    margin: 0.5rem ;
}

.hover-image:hover {
    transform: scale(1.2);
    box-shadow:0px 0px 10px 2px rgba(3, 158, 192, 0.9000000095367432);
    //filter: blur(1px);
    border: 0.5px solid rgba(253, 253, 253, 0.4);
    border-radius: 15px;
}
</style>
