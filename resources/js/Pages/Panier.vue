<script setup>
import Header from "@/Components/Header.vue";
import Sidebar from "@/Components/Sidebar.vue";
//

</script>

<template>
    <div class="container-fluid min-vh-100 body">
        <div class="row">

            <div class="col-12">
                <div class="row">
                    <div class="col-12">
                        <Header/>
                    </div>
                </div>

                <div class="row panier__height-global">
                    <div class="col-2 mh-100">
                        <Sidebar page="home"/>
                    </div>
                    <div class="col-8 mh-100 panier__height" >
                        <div class="panier__border-list">
                            <div class="panier__scrollbar">
                                <div class="row mb-4">
                                    <div class="col-12 infos" >
                                        <div class="entete ">
                                            Jeux
                                        </div>
                                        <div class="entete ">
                                            Quantités
                                        </div>
                                        <div class="entete ">
                                            Début location
                                        </div>
                                        <div class="entete ">
                                            Fin location
                                        </div>
                                        <div class="entete ">
                                            Prix
                                        </div>
                                    </div>
                                </div>
                                <div v-for="i in [...Array(10).keys()]"
                                    class="col-12 px-0 hover-image ">
                                    <div class="row mb-4">
                                        <div class="col-12 infos" entete>
                                            <div class="card">
                                                Jeux
                                            </div>
                                            <div class="card ">
                                                Quantités
                                            </div>
                                            <div class="card ">
                                                Début location
                                            </div>
                                            <div class="card ">
                                                Fin location
                                            </div>
                                            <div class="card ">
                                                Prix
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="row">
                            <div class="col-12">
                                <div class=" d-flex justify-content-end piedPage">
                                    <div class="panier__total-order">
                                        TOTAL COMMANDE
                                    </div>
                                    <div class="panier__price">
                                        <div>15.90</div>
                                        <div>€</div>
                                    </div>
                                    <button type="button" class="btn btn-primary btn-lg commande">Commander</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</template>

<style scoped>
.panier__height-global{
    height: 100vh;
}
.panier__height{
    height: 100%;
}
.panier__border-list{
    border: 1px solid #039EC0;
    border-radius: 33px;
    height: 70%;
}
.panier__scrollbar{
    height: calc(100% - 50px);
    position: relative;
    overflow-x: hidden;
    overflow-y: auto;
    top: 25px;

}

.panier__total-order{
    display: flex;
    font-size:32px;
    align-items: center;
    color: white;
}
.panier__price{
    padding: 0 16px;
    display: grid;
    grid-template-columns: auto auto;
    align-items: center;
    justify-content: space-between;
    color: white;
    font-size:32px;
    background-color: #1E2945;
    width: 268px;
    border-radius: 20px;
    
}

.row {
    /* border: solid red; */
}
.col-2 {
    /* border: solid blue; */
}
.col-8 {
    /* border: solid blue; */
}
.infos{
    display: flex;
    flex-direction: row;
    justify-content: center;
}
.entete{
    display: flex;
    justify-content: center;
    align-items: center;
}
.card{
    background-color:#1e2945;
    height:77px;
    width:180px;
    filter:drop-shadow(0px 0px 5px rgba(0.16470588743686676,0.49803921580314636,0.9882352948188782,0.7400000095367432));
    border-radius:20px;
    /* border:1px solid rgba(3, 158, 192, 0.7400000095367432); */
    margin: 5px;
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;

}
.entete{
    background-color:transparent;
    height:77px;
    width:200px;
    padding:0px;
    border-style:hidden;
    outline:none;
    margin: 5px;
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
    text-shadow: 0px 0px 20px #020024;
    font-size: larger;
}
.hover-image{
    display: flex;
    justify-content: center;
}
.commande{
    box-shadow:0px 0px 10px 2px rgba(3, 158, 192, 0.9000000095367432);
    border: 0.5px solid rgba(253, 253, 253, 0.4);
    border-radius: 15px;
    border: 1px solid white;
    font-size: 32px;
    width: 15rem;
}
.piedPage{
    margin-top: 16px;
    gap: 16px;
}
</style>
