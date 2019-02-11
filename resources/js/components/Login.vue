<template>

</template>

<script>
import axios from 'axios';

export default {
    mounted() {
        axios
        .get('login', { crossDomain: true, withCredentials: true })
        .then((response) => {
            this.infousu = response.data;
            console.log(response);
        });
    }
}
</script>

<style>

</style>
