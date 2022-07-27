<script setup>
import { useForm } from '@inertiajs/inertia-vue3';

    const form = useForm({
        name: '',
        email: '',
        password: '',
    })
</script>
<template>
    <div class="max-w-4xl m-auto mt-10 mb-10">
        <form @submit.prevent="form.post('/user')">
            <div class="form-control w-full max-w-xs">
                <label class="label">
                    <span class="label-text">Name</span>
                </label>
                <input
                    type="text"
                    placeholder="Enter your name"
                    class="input input-primary input-bordered w-full max-w-xs"
                    name="name"
                    v-model="form.name"
                />
            </div>
            <div class="form-control w-full max-w-xs">
                <label class="label">
                    <span class="label-text">Email</span>
                </label>
                <input
                    type="text"
                    placeholder="Enter your email"
                    class="input input-primary input-bordered w-full max-w-xs"
                    name="email"
                    v-model="form.email"
                />
            </div>
            <div class="form-control w-full max-w-xs">
                <label class="label">
                    <span class="label-text">Password</span>
                </label>
                <input
                    type="password"
                    placeholder="Enter your password"
                    class="input input-primary input-bordered w-full max-w-xs"
                    name="password"
                    v-model="form.password"
                />
            </div>
            <input type="submit" value="Create" class="btn btn-primary btn-sm mt-4">
        </form>
    </div>
</template>
