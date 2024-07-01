<script setup>
defineProps({
    page: {
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

function goToHomePage() {
    window.location.href = '/';
}

function goToFavoritesPage() {
    window.location.href='/favorites';
}

function goToCartPage() {
        window.location.href='/cart';
}

function goToListPage() {
        window.location.href='/boardgames';
}

</script>

<template>

    <div class="navbar">

            <img src="../../../public/images/logo_shel.png" class="logo">
        <div>
            <button class="icon" @click="goToHomePage" >

                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-house home" viewBox="0 0 16 16" >
                    <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z"/>
                </svg>
            </button>
        </div>
        <div>
            <button class="icon" @click="goToCartPage">
                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-cart3 shopping" viewBox="0 0 16 16">
                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l.84 4.479 9.144-.459L13.89 4zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                </svg>
            </button>
        </div>
        <div>
            <button class="icon" >
                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-star star" viewBox="0 0 16 16">
                    <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.56.56 0 0 0-.163-.505L1.71 6.745l4.052-.576a.53.53 0 0 0 .393-.288L8 2.223l1.847 3.658a.53.53 0 0 0 .393.288l4.052.575-2.906 2.77a.56.56 0 0 0-.163.506l.694 3.957-3.686-1.894a.5.5 0 0 0-.461 0z"/>
                </svg>
            </button>
        </div>
        <div>
            <button class="icon" @click="goToListPage">
                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-list-ul list" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m-3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2m0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2m0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2"/>
                </svg>
            </button>
        </div>

        <!--<div>construction in progress</div>
        <img
            src="https://media.istockphoto.com/id/177370583/fr/photo/c%C3%B4nes-de-signalisation-et-casque-de-chantier-3d-isol%C3%A9.jpg?s=612x612&w=0&k=20&c=Mm0a5rzoOMcHY4f_sNzkzE-k126cG9WDuQfmx9Ch65c="
            class="img-fluid"
            alt="..."
        >-->
    </div>

</template>

<style scoped>

.navbar{
    border-radius: 15px;
    margin-left: 16px;
    color: white;
    justify-content: start;
    display: flex;
    height: 100%;
    flex-direction: column;
    align-items: center;
    border: solid 0.2px rgba(253, 253, 253, 0.2000000095367432);

}
.logo{
    width: 60%;
}
.icon{
    background-color: transparent;
    border: none;
    height: 50px;
    width: 50px;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #737272;
    margin: 30px;
}
.icon:hover{
    box-shadow:0px 0px 10px 2px rgba(3, 158, 192, 0.9000000095367432);
    background: linear-gradient(320deg, rgba(2,0,36,1) 0%, rgba(3,158,192,1) 1%, rgba(27,39,94,1) 15%, rgba(26,45,184,1) 97%, rgba(26,151,184,1) 100%);
    border: 0.5px solid rgba(253, 253, 253, 0.4);
    border-radius: 15px;
    transform: scale(1.3);
}
.navbar:hover{
   box-shadow:0px 0px 10px 2px rgba(3, 158, 192, 0.9000000095367432);
    border: 0.5px solid rgba(253, 253, 253, 0.4);
    border-radius: 15px;

}

</style>
