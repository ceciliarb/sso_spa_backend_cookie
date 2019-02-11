<template>
    <div>
        <pre class="prettyprint">
            <code>
                {{ infousu }}
            </code>
        </pre>
    </div>
</template>

<script>
export default {
    props: {
    },
    data() {
        return {
            infousu: [],
        }
    },
    mounted() {
        this.$axios.get('user', { withcredentials: true, crossdomain: true }).then((response) => {
            this.infousu = response.data;
            console.log(response);
        });

    }
}
</script>

<style>

</style>
