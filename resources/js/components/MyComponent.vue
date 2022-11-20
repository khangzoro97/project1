<template>
    <div class="my-component">
        <div>{{ reverseMessage }}</div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            message: 'This is my first component using binding data'
        }
    },
    computed: {
        reverseMessage() {
            return this.message.split('').reverse().join('')
        }
    }
}
</script>

<style scoped>
.my-component {
    color: red;
}
</style>
