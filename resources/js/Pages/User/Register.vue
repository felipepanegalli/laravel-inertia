<template>
    <layout>
        <h3 class="title">REGISTER</h3>
        <div v-for="(error, index) in errors" :key="index">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ error }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
        <form @submit.prevent="handleForm">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" v-model="form.name" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" v-model="form.email" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" v-model="form.password" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </layout>
</template>

<script>
import Layout from '../../Layout';

export default {
    name: 'Register',
    components: {Layout},
    props: {
        errors: Object,
    },
    data: () => {
        return {
            form: {
                name: null,
                email: null,
                password: null,
            },
        };
    },
    methods: {
        handleForm() {
            this.$inertia.post('/register', this.form);
        },
    },
};
</script>

<style scoped>

</style>
