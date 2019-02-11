<template>
    <div>
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <ul class="navbar-nav">
                    <router-link :to="{ name: 'home' }" class="nav-link">Home</router-link>
                    <router-link :to="{ name: 'info' }" class="nav-link" >Info</router-link>
                </ul>
            </div>
        </nav>
        <main>
            <router-view></router-view>
        </main>
    </div>
</template>

<script>
export default {
    data() {
        return {

        }
    },

}
</script>

<style>

</style>
