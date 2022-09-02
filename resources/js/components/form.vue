<template>
    <div>
        <div>Formulario Cliente</div>
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" class="form-control" id="name" v-model="name" />
        </div>
        <div class="form-group">
            <label for="address">Direccion</label>
            <input
                type="text"
                class="form-control"
                id="address"
                v-model="address"
            />
        </div>
        <div class="form-group">
            <label for="phone">Telefono</label>
            <input
                type="text"
                class="form-control"
                id="phone"
                v-model="phoneNumber"
            />
        </div>
        <button class="btn btn-primary" @click="addCustomer">Guardar</button>
    </div>
</template>

<script>
export default {
    data: () => ({
        name: "",
        address: "",
        phoneNumber: "",
    }),
    methods: {
        addCustomer() {
            this.$emit("save", {
                name: this.name,
                address: this.address,
                phone_number: this.phoneNumber,
            });
        },
    },
};
</script>

<style></style>
