<script setup>
defineProps(['title_cardGame','texte_cardGame'])
</script>

<template>
    <div class="row row-cols-1 row-cols-md-4 g-4">
        <div class="col">
            <div class="card h-50 overflow-auto" style="border: solid 1px red">
                <img src="https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/869241/header.jpg?t=1555788090" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{title_cardGame}}</h5>
                    <p class="card-text ">{{texte_cardGame}}</p>
                </div>

            </div>
        </div>
        <div class="col">
            <div class="card h-50 overflow-hidden">
                <img src="https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/869241/header.jpg?t=1555788090" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                </div>
                <div class="card-footer">
                    <small class="text-body-secondary">Last updated 3 mins ago</small>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-50 overflow-hidden">
                <img src="https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/869241/header.jpg?t=1555788090" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-50 overflow-hidden">
                <img src="https://shared.akamai.steamstatic.com/store_item_assets/steam/apps/869241/header.jpg?t=1555788090" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                </div>
                <div class="card-footer">
                    <small class="text-body-secondary">Last updated 3 mins ago</small>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
.migniature{
    height: 18rem;
    border-radius: 15px;

}
.card{
    color: beige;
    background-color: transparent;
}


</style>
