<script setup>
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
    }
});
</script>

<template>
    <div class="image-container rounded-3">
        <img :src="image" class="img-fluid z-0" alt="...">
        <div class="hover-text">
            <div class="card-body">
                <h5 class="card-title text-light">
                    {{ title }}
                </h5>
                <p class="card-text text-light">
                    {{ body }}
                </p>
            </div>
        </div>
    </div>
</template>

<style scoped>
.image-container {
    overflow: hidden;
}
.hover-text {
    position: absolute;
    top: 50%;
    left: 50%;
    display: block;
    transform: translate(-50%, -50%);
    color: white;
    background-color: rgba(0, 0, 0, 0.7);
    width: 100%;
    padding: 10px 20px;
    border-radius: 5px;
    opacity: 0;
    transition: opacity 0.3s ease-in-out;
    border: solid 1px red;
}
.image-container:hover .hover-text {
    opacity: 1;
}

</style>
