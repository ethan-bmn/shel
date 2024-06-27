<script setup>
defineProps({
    name: {
        type: String,
        required: true
    },
    description:{
        type: String,
        required: true
    },
    image:{
        type: String,
        required: true
    },
    number_of_player:{
        type: String,
        required:true
    },
    playing_time:{
        type: String,
        required: true
    }
});
</script>

<template>
    <div class="card">
        <img :src="image" class="card-img-top" alt="...">
        <div>
            <div class="card-body">
                <h5 class="card-title" style="border: solid 1px red">{{name}}</h5>
                <p class="card-text">{{description}}</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">{{number_of_player}}</li>
                <li class="list-group-item">{{ playing_time }}</li>

            </ul>
        </div>
    </div>
</template>

<style scoped>



</style>
