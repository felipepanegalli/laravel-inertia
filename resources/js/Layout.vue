<template>
    <main>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Laravel Inertia</a>
            <inertia-link class="nav-link" href="/">Home</inertia-link>
            <inertia-link class="nav-link" href="/about">About</inertia-link>
            <inertia-link class="nav-link" href="/register">Register</inertia-link>
        </nav>
        <div class="container">
            <slot/>
        </div>
    </main>
</template>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
<script>
export default {
    // props: {
    //     title: String,
    // },
    // watch: {
    //     title: {
    //         immediate: true,
    //         handler(title) {
    //             document.title = title
    //         },
    //     },
    // },
};
</script>

<style>
.title {
    font-size: 24px;
}
</style>
