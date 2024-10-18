<template>
    <div>
        <h1>This is {{ title }}</h1>

    </div>
</template>

<script setup>
    defineProps({
        title: {
            type: String,
            required: true,
        },
        description: {
            type: String,
            required: true,
        },
    })
</script>
