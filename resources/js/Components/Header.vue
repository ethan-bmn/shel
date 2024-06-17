<script setup>

</script>

<template>

    <div >
        <div class="col-10 d-flex justify-content-center ">
            <nav class="navbar navbar-expand-lg bc-color-input-search">
                <div class="container-fluid d-flex justify-content-between">

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <span><img class="icon-link" src="../../../public/images/chercher.svg"></span>
                        <form class="d-flex" role="search">
                            <input class="form-control me-2 perso" type="search" placeholder="Recherche" aria-label="Search" >
                        </form>
                    </div>
                    <div class="collapse navbar-collapse d-flex justify-content-end">
                        <form class="d-flex">
                            <button class="btn btn-outline-success" type="submit">Chercher</button>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</template>

<style scoped>
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

</style>
