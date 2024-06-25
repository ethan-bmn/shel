<script setup>
import { useForm } from '@inertiajs/vue3';

defineProps({
    canResetPassword: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
    <div id="loginPage" class="row d-flex justify-content-center h-100">
        <div class="col-4 my-5 d-flex justify-content-center">
            <img src="/images/logo_shel.png" alt="">
        </div>
        <div class="col-9">
            <div v-if="status" class="mb-4 font-medium text-sm text-success">
                {{ status }}
            </div>
            <form @submit.prevent="submit">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>

            </form>
        </div>
    </div>
</template>
