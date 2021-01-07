<template>
    <layout>
        <h3 class="title">HOME</h3>
        <p>Eu sou a home....</p>
        <div v-if="$page.props.flash.success" class="alert alert-success">
            {{ $page.props.flash.success }}
        </div>
        <ul>
            <li v-for="(user, i) in users" :key="i">
                {{ i }} - {{ user }}
            </li>
        </ul>
    </layout>
</template>

<script>
import Layout from '../Layout';

export default {
    components: {Layout},
    props: {
        users: {},
        flash: {},
    },
};
</script>
