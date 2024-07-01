<script setup>

</script>

<template>
    <div class="row ">
        <div class="col-10">
            <nav class="navbar navbar-expand-lg bc-color-input-search entete header__nav">
                <img class="icon-link ms-3" src="../../../public/images/chercher.svg">
                <input class="form-control header__placeholder me-2 perso" type="search" placeholder="Recherche" aria-label="Search" >
            </nav>
        </div>
        <div class="col-2 d-flex justify-content-center">
            <button class="btn alerte">
                <i class="bi bi-bell fs-3 text-light" />
            </button>
            <button class="btn ">
                <img src="../../../public/images/claustrophobia.png" class="profil">
            </button>
        </div>
    </div>
<!--    <div>-->
<!--        <div>-->
<!--            <nav class="navbar navbar-expand-lg bc-color-input-search entete header__nav">-->
<!--                <div class="container-fluid header__grid">-->
<!--                    <div class="collapse navbar-collapse header" id="navbarSupportedContent">-->
<!--                        <div class="header__search"><img class="icon-link" src="../../../public/images/chercher.svg"></div>-->
<!--                        <form class="d-flex" role="search">-->
<!--                            <input class="form-control header__placeholder me-2 perso" type="search" placeholder="Recherche" aria-label="Search" >-->
<!--                        </form>-->
<!--                    </div>-->
<!--                    <div class="header__notif-user">-->

<!--                    </div>-->
<!--                </div>-->
<!--            </nav>-->
<!--        </div>-->
<!--    </div>-->
</template>

<style scoped>

.header__nav{
    padding: 0;
}
.header{
    height: 100%;
}

.header__search{
    padding-left: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: rgba(35, 51, 77, 35%);
    border-radius: 15px 0 0 15px;
    height: 100%;
    width: 55px;
}

.header__placeholder::placeholder{
    font-size: 25px;
}

.header__grid{
    padding: 0;
    display: grid;
    grid-template-columns: 1fr 10%;
    gap: 16px;
}
.header__notif-user{
    padding: 6px 0;
}
.entete{
    padding-right: 0;
    padding-left: 0;
    max-height: 1550px;
}
.bc-color-input-search{
    background-image: linear-gradient(to right, #1f355e, #273c67, #2f4371, #374b7a, #3f5284);
    border-radius: 15px;
    margin:  16px 0;
}
.icon-link{
    margin-right: 10px;
    width: 20px;
    height: 20px;
}
.btn-outline-success{
    color: beige;
    border-color: beige;
}
.form-control{
    width: 100%;
}
.perso{
    background-color: transparent ;
    border: none;
}

::placeholder {
    color: beige;
    opacity: 0.8;
}
.profil{
    width: 45px;
    height: 45px;
    border-radius: 22px;
}
</style>
