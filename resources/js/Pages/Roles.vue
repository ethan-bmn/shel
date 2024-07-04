<script setup>
import Layout from '@/Layouts/Default.vue';

defineOptions({
    layout: Layout
})

const props = defineProps({
    users: {
        type: Array,
        required: true
    }
});

function updateUserRole(user_id, current_role_id) {
    const new_role_id = current_role_id === 2 ? 1 : 2;
    axios.patch(route('updateRole', {user_id: user_id, role_id: new_role_id}));
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
            </tr>
        </tbody>

    </table>
</template>
