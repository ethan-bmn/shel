<script setup>
import { Link } from "@inertiajs/vue3";

</script>

<template>

    <div class="navbar">
        <div class="sidebar__scrollbar fs-1">
                <img src="../../../../public/images/logo_shel.png" class="logo">
            <div>
                <Link type="button" class="icon" href="/" >
                    <i class="bi bi-house home"/>
                </Link>
            </div>
            <div>
                <Link type="button" class="icon" href="/cart">
                    <i class="bi bi-cart3 shopping" />
                </Link>
            </div>
            <div>
                <Link type="button" class="icon" href="/games">
                    <i class="bi bi-list-ul list" />
                </Link>
            </div>
        </div>
    </div>

</template>

<style scoped>

.navbar{
    border-radius: 15px;
    color: white;
    height: 100%;
    border: solid 0.2px rgba(253, 253, 253, 0.2);

}
.logo{
    width: 100%;
    padding-bottom: 70%;
}

.icon{
    background-color: transparent;
    border-radius: 15px;
    border: none;
    height: 50px;
    width: 50px;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #737272;
    margin: 30px;
}
.sidebar__scrollbar{
    height: 100%;
}
.sidebar__scrollbar div{
    display: flex;
    justify-content: center;
}
.icon:hover{
    box-shadow:0px 0px 10px 2px rgba(3, 158, 192, 0.9);
    background: linear-gradient(320deg, rgba(2,0,36,1) 0%, rgba(3,158,192,1) 1%, rgba(27,39,94,1) 15%, rgba(26,45,184,1) 97%, rgba(26,151,184,1) 100%);
    border: 0.5px solid rgba(253, 253, 253, 0.4);
    transform: scale(1.3);
    transition: 0.3s ease-in-out;
}

</style>
