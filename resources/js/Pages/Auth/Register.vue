<script setup>
import Layout from '@/Layouts/Guest.vue';
import { useForm, usePage } from '@inertiajs/vue3';

// Définition des propriétés requises que le composant reçoit via les props
defineOptions({
    layout: Layout
});
// Initialisation du formulaire avec useForm
const form = useForm({
    name: '',
    surname: '',
    email: '',
    password: '',
    password_confirmation: '',
});

const page = usePage();
// Fonction pour valider la création de compte
const submit = () => {
    page.props.errors = {};
    form.post(route('auth.register'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
</script>

<template>
    <form @submit.prevent="submit" class="text-light fs-5 w-25 mx-auto">
        <div class="mb-3">
            <label for="nameInput" class="form-label">Prénom</label>
            <input v-model="form.name" type="text" class="form-control" id="nameInput" required autofocus>
        </div>
        <div class="mb-3">
            <label for="surnameInput" class="form-label">Nom</label>
            <input v-model="form.surname" type="text" class="form-control" id="surnameInput" required>
        </div>
        <div class="mb-3">
            <label for="emailInput" class="form-label">Adresse e-mail</label>
            <input v-model="form.email" type="email" class="form-control" id="emailInput" required>
        </div>
        <div class="mb-3">
            <label for="passwordInput" class="form-label">Mot de passe</label>
            <input v-model="form.password" type="password" class="form-control" id="passwordInput" required>
        </div>
        <div class="mb-3">
            <label for="passwordConfirmationInput" class="form-label">Confirmer le mot de passe</label>
            <input v-model="form.password_confirmation" type="password" class="form-control" id="passwordConfirmationInput" required>
        </div>
        <div v-if="page.props.errors" class="mb-3">
            <p v-for="error in Object.keys(page.props.errors)">
                {{ page.props.errors[error] }}
            </p>
        </div>
        <div class="mb-3 d-flex justify-content-center">
            <button type="submit" class="btn btn-outline-light">Créer un compte</button>
        </div>
    </form>
</template>
