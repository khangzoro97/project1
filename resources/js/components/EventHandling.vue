<template>
    <div class="event-handling">
        <div @click.self="alertHello">
            <button @click.exact="onClick">A</button>
        </div>
    </div>
</template>

<script>
export default {
    methods: {
        onClick() {
            alert('Hello')
        },
        alertWelcome() {
            alert('Welcome')
        }
    }
}
</script>

<style lang="scss" scoped>
</style>
