<script setup>
// Définition des propriétés requises que le composant reçoit via les props
defineProps({
    title: {
        type: String,
        required: true
    },
    body: {
        type: String,
        required: true
    },
    image: {
        type: String,
        required: true
    },
    id:{
        type:String,
        required: true
    }
});
</script>

<template >
    <div class="image-container rounded-3 mx-2">
        <img :src="image" class="img-fluid z-50" alt="...">
        <div class="hover-text">
            <h5 class="card-title text-light">
                {{ title }}
            </h5>
            <p class="card-text text-light">
                {{ body }}
            </p>
        </div>
    </div>
</template>

<style scoped>
.image-container {
    overflow: hidden;
    position: relative;
    z-index: -1;

}
.hover-text {
    position: absolute;
    display: block;
    color: white;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.7);
    padding: 10px 40px;
    border-radius: 5px;
    opacity: 0;
    /* transition: opacity 0.3s ease-in-out;*/
}
.image-container:hover .hover-text {
    opacity: 1;

}

</style>
