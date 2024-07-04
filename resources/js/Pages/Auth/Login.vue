<script setup>
import Layout from '@/Layouts/Guest.vue';
import { Link, useForm } from '@inertiajs/vue3';
import { ref } from "vue";
// Définition des propriétés requises que le composant reçoit via les props
defineOptions({
    layout: Layout
});

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
    <div v-if="status" class="mb-4 font-medium text-sm text-success">
        {{ status }}
    </div>
    <!-- Formulaire de connexion -->
    <form @submit.prevent="attemptLogin" class="text-light fs-5 w-25 mx-auto">
        <div class="mb-3">
            <label for="emailInput" class="form-label">Adresse e-mail</label>
            <input v-model="form.email" type="email" class="form-control" id="emailInput" required autofocus>
        </div>
        <div class="mb-3">
            <label for="passwordInput" class="form-label">Mot de passe</label>
            <input v-model="form.password" type="password" class="form-control" id="passwordInput" required>
        </div>
        <div class="mb-3 d-flex justify-content-center">
            <button type="submit" class="btn btn-outline-light">Se connecter</button>
        </div>
        <div class="mb-3 d-flex justify-content-center">
            <Link as="button" href="/auth/register" class="btn btn-outline-light">Créer un compte</Link>
        </div>
        <div v-if="error" class="mb-3">
            <p>Mot de passe/e-mail incorrect</p>
        </div>
    </form>
</template>
