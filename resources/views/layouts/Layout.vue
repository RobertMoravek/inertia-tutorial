<script setup lang="ts">
// This is a persistent layout
// Include me with <template layout="default" />
import Nav from "@/views/Shared/Nav.vue";
</script>

<template >


    <header class="flex bg-gray-400 py-4 px-6 justify-between">
        <h1 class="font-bold text-lg">My Inertia App</h1>
        <p>Welcome back, {{$page.props.auth.user.username}}</p>
        <Nav/>
    </header>

    <section class="p-6">
        <div class="max-w-3xl mx-auto">
            <slot />
        </div>

    </section>

</template>
