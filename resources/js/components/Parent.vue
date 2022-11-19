<template>
    <div>
        <h1 class="welcome-text">
            This is parent
        </h1>
        <Child></Child>
    </div>
</template>

<script>
import Child from './Child.vue'
export default {
    components: {
        Child
    }
}
</script>

<style>
.welcome-text {
    color: red;
}
</style>
