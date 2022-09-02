<template>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Direccion</th>
            <th scope="col">Telefono</th>
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="element in tableData" :key="element">
            <th scope="row">{{ element.id }}</th>
            <td>{{ element.name }}</td>
            <td>{{ element.address }}</td>
            <td>{{ element.phone_number }}</td>
            <td>
                <button
                    class="btn btn-danger"
                    @click="deleteCustomer(element.id)"
                >
                    Eliminar
                </button>
            </td>
        </tr>
        </tbody>
    </table>
</template>

<script>
export default {
    props: {
        tableData: {
            type: Array,
            default: () => [],
        },
    },
    methods: {
        deleteCustomer(id) {
            this.$emit("delete", id);
        },
    },
};
</script>

<style></style>
