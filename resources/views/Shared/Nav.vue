<template>
    <nav class="mb-6">
        <ul class="flex space-x-6">
            <NavLink href="/" :active="$page.component == 'Home'"></NavLink>
            <li><NavLink href="/" :active="$page.component == 'Home'">Home</NavLink></li>
            <li><NavLink href="/users" :active="$page.component == 'Users'">Users</NavLink></li>
            <li><NavLink href="/settings"  :active="$page.component=='Settings'">Settings</NavLink></li>
            <li><Link method="post" as="button" href="/logout">Logout</Link></li>
        </ul>
    </nav>
</template>



<script setup>
import NavLink from '@/views/Shared/NavLink.vue';

</script>
