<script setup>
const props = defineProps(['image1','image2','image3'])
console.log(props.image1)

</script>
<template id="test">

    <div class="col-7 honor">
        <span style="color: white;">Jeux à l'honneur</span>
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="d-flex justify-content-center ">
                <div class="carousel-inner">
                    <div class="carousel-item active ">
                        <img :src="image1" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">

                        <img src={{image1}}/>

                    </div>
                    <div class="carousel-item">

                        <img src={{image3}} class="d-block w-100" alt="...">
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
.honor{
    max-height: 200px;
}
img{
    max-height: 480px;
    border-radius: 15px;
}
</style>


