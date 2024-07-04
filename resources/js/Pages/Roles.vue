<script setup>
import Layout from '@/Layouts/Default.vue';
import {usePage} from "@inertiajs/vue3";

defineOptions({
    layout: Layout
})

const props = defineProps({
    users: {
        type: Array,
        required: true
    }
});

const page = usePage();

function updateUserRole(user_id, current_role_id) {
    const new_role_id = current_role_id === 2 ? 1 : 2;
    axios.patch(route('updateRole', {user_id: user_id, role_id: new_role_id}));
}

function deleteUser(user_id) {
    axios.delete(route('deleteUser', {user_id: user_id}))
        .then(() => {
            window.location.reload();
        });
}

</script>

<template>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Nom</th>
            <th scope="col">Prénom</th>
            <th scope="col">Email</th>
            <th scope="col">Administrateur ?</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
            <tr v-for="user in users">
                <td>{{ user.surname }}</td>
                <td>{{ user.name }}</td>
                <td>{{ user.email }}</td>
                <td>
                    <input
                        type="checkbox"
                        role="switch"
                        class="form-check-input"
                        :checked="user.role_id === 2"
                        @input="updateUserRole(user.id, user.role_id)"
                    >
                </td>
                <td>
                    <button
                        v-if="user.id !== page.props.auth.user.id"
                        class="btn btn-danger"
                        :data-bs-target="`#deleteUserModal${user.id}`"
                        data-bs-toggle="modal"
                    >
                        <i class="bi bi-trash-fill" />
                    </button>
                    <div class="modal fade" tabindex="-1" :id="`deleteUserModal${user.id}`">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Confirmation</h5>
                                    <button
                                        type="button"
                                        class="btn-close"
                                        data-bs-dismiss="modal"
                                        aria-label="Close" />
                                </div>
                                <div class="modal-body">
                                    <p>Voulez-vous vraiment supprimer l'utilisateur '{{user.email}}' ?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal" @click="deleteUser(user.id)">
                                        Confirmer
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </td>
            </tr>
        </tbody>

    </table>
</template>
