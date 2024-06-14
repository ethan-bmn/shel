<script setup>

</script>

<template>
    <div class="d-flex justify-content-center">
        <div class="col-6">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <img class="icon-link" src="../../../public/images/chercher.svg">
                        <form class="d-flex" role="search">

                            <input class="form-control me-2" type="search" placeholder="Recherche" aria-label="Search">

                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>

                    </div>
                </div>
            </nav>
        </div>
    </div>
</template>

<style scoped>
.icon-link{
    margin-right: 10px;
    width: 20px;
    height: 20px;
}

</style>
