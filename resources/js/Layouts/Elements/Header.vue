<script setup>
import { Link, usePage } from "@inertiajs/vue3";

const page = usePage();
console.log(page.props.auth.user);
async function logout() {
    axios.post('/auth/logout').then(() => {
        window.location.assign(route(route().current()))
    });
}
</script>

<template>
    <div class="row ">
        <div class="col-10">
            <nav class="navbar navbar-expand-lg bc-color-input-search entete header__nav">
                <img class="icon-link ms-3" src="../../../../public/images/chercher.svg">
                <form action="/games/54" class="w-100">
                    <input class="form-control header__placeholder me-2 perso" type="search" placeholder="Recherche" aria-label="Search" >
                </form>
            </nav>
        </div>
        <div class="col-2 d-flex justify-content-center">
            <div class="dropdown my-auto">
                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="../../../../public/images/claustrophobia.png" class="profil">
                </button>
                <ul class="dropdown-menu text-center fs-5">
                    <template v-if="page.props.auth.user">
                        <li><Link href="/profile">Mon profil</Link></li>
                        <li><button class="btn btn-danger" @click="logout">Se déconnecter</button></li>
                    </template>
                    <li v-else>
                        <Link href="/login">Connexion</Link>
                    </li>
                </ul>
            </div>
        </div>
    </div>

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
    color: white;
}

.header__placeholder{
    font-size: 25px;
    color: white;
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
