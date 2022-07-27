<script setup>
    defineProps({
        name: {
            type: String,
        }
    })
</script>
<template>
    <h1>Hello, {{ name }}</h1>
</template>