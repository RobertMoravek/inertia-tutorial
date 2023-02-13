<script setup lang="ts">
// This is a persistent layout
// Include me with <template layout="default" />
import Nav from "@/views/Shared/Nav.vue";
</script>

<template >



    <section class="p-6">
        <div class="max-w-3xl mx-auto">
            <slot />
        </div>

    </section>

</template>
