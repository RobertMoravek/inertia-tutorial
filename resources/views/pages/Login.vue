<template layout="Layout2">
<h1>Login</h1>
    <form @submit.prevent="submit">
        <div class="mb-6">
            <label for="email">E-Mail</label>
            <input v-model="form.email"  class="border border-gray-400 p-2 w-full"  type="text" email="email" id="email" >
            <div v-if="form.errors.email" v-text="form.errors.email" class="text-red-500"></div>

        </div>
        <div class="mb-6">
            <label for="password">Password</label>
            <input v-model="form.password"  class="border border-gray-400 p-2 w-full"  type="password" password="password" id="password" >
            <div v-if="form.errors.password" v-text="form.errors.password" class="text-red-500"></div>

        </div>
        <input type="submit">
    </form>
</template>

<script setup>
import {useForm} from '@inertiajs/inertia-vue3';

let form = useForm({
    email: "",
    password: ""
})

let submit = () => {
    form.post("/login")
}
</script>
