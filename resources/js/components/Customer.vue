<template>
    <div class="m-2">
        <div>Tarea CRUD</div>
        <div class="tabla">
            <table-c :tableData="customers" @delete="deleteCustomer"></table-c>
        </div>
        <div class="form">
            <form-c @save="addCustomer"></form-c>
        </div>
    </div>
</template>

<script>
import TableC from "./table.vue";
import FormC from "./form.vue";
import axios from "axios";
export default {
    components: { TableC, FormC },
    data: () => ({ customers: [] }),
    mounted() {
        this.readCustomer();
    },
    methods: {
        async addCustomer(customer) {
            try {
                await axios.post("/customer", customer);
                this.readCustomer();
            } catch (error) {}
        },
        async readCustomer() {
            try {
                const { data } = await axios.get("/customers");
                this.customers = data;
            } catch (error) {}
        },
        async deleteCustomer(id) {
            try {
                await axios.delete(`/customer/${id}`);
                this.readCustomer();
            } catch (error) {}
        },
    },
};
</script>


<style></style>
