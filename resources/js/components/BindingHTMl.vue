<template>
    <div class="binding-html">
        <div class="text-title" :class="classObject" :style="{backgroundColor: color}">
            This is text
        </div>
        <div>
            <button @click="isActive = true">Active text</button>
        </div>
        <div>
            <button @click="isHide = true">Hide text</button>
        </div>
        <div>
            <button @click="isBold = true">Bold text</button>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            isActive: false,
            isHide: false,
            isBold: false,
            activeClass: 'active',
            boldClass: 'bold',
            classObject: {
                active: true,
                bold: true
            },
            color: 'blue'
        }
    }
}
</script>

<style scoped>
.active {
    color: red;
}
.hide {
    display: none;
}
.bold {
    font-weight: bold;
}
</style>
