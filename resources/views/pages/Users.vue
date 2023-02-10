
<template layout="Layout">

        <h1 class="text-4xl font-semibold">Users</h1>



<div style="margin-top: 2000px">
    <p>The current time is: {{time}}</p>
    <Link href="/users" preserve-scroll>Refresh</Link>
</div>

</template>



<script setup lang="ts">
import Nav from "@/views/Shared/Nav.vue";
import Layout from "@/views/layouts/Layout.vue";
defineProps({
    time : String,
})



</script>


