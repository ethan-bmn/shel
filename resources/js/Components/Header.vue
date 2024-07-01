<script setup>

</script>

<template>

    <div>
        <div>
            <nav class="navbar navbar-expand-lg bc-color-input-search entete">
                <div class="container-fluid header__grid">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <span><img class="icon-link" src="../../../public/images/chercher.svg"></span>
                        <form class="d-flex" role="search">
                            <input class="form-control header__placeholder me-2 perso" type="search" placeholder="Recherche" aria-label="Search" >
                        </form>
                    </div>
                    <div>
                        <button class="btn alerte">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
                                <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2M8 1.918l-.797.161A4 4 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4 4 0 0 0-3.203-3.92zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5 5 0 0 1 13 6c0 .88.32 4.2 1.22 6"/>
                            </svg>
                        </button>
                        <button class="btn ">
                            <img src="../../../public/images/claustrophobia.png" class="profil">
                        </button>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</template>

<style scoped>
.header__placeholde::placeholder{
    font-size: 25px;
}

.header__grid{
    display: grid;
    grid-template-columns: 1fr 10%;
    gap: 16px;
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
