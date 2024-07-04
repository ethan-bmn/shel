<script setup>
import { useForm } from '@inertiajs/vue3';
import { ref } from "vue";
// Définition des propriétés requises que le composant reçoit via les props
defineProps({
    canResetPassword: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});

// Initialisation du formulaire avec useForm
const form = useForm({
    email: '',
    password: '',
    remember: false,
});
const error = ref(false);
// Fonction pour tenter de se connecter
function attemptLogin() {
    error.value = false;
    form.post('/auth/login', {
        onSuccess: () => {
            window.location.assign(route(route().current()));
        },
        onError: () => {
            error.value = true;
            form.reset();
        }
    });

}
</script>

<template>
    <div class="container-fluid min-vh-100">
        <div class="row me-3 vh-100 d-flex justify-content-center">
            <div class="col-12 mt-5">
                <div class="row d-flex justify-content-center mx-auto">
                    <div class="col-4 d-flex justify-content-center">
                        <img src="/images/logo_shel.png" alt="" class="img-fluid">
                    </div>
                </div>
                <div v-if="status" class="mb-4 font-medium text-sm text-success">
                    {{ status }}
                </div>
                <!-- Formulaire de connexion -->
                <form @submit.prevent="attemptLogin" class="text-light fs-5 w-25 mx-auto">
                    <div class="mb-3">
                        <label for="emailInput" class="form-label">Adresse e-mail</label>
                        <input v-model="form.email" type="email" class="form-control" id="emailInput" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="passwordInput" class="form-label">Password</label>
                        <input v-model="form.password" type="password" class="form-control" id="passwordInput">
                    </div>
                    <div class="mb-3 d-flex justify-content-center">
                        <button type="submit" class="btn btn-outline-light">Se connecter</button>
                    </div>
                    <div v-if="error" class="mb-3">
                        <p>Mot de passe/e-mail incorrect</p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>
