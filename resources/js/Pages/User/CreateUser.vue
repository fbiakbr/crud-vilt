<script setup>
import { useForm } from "@inertiajs/inertia-vue3";

const form = useForm({
    name: "",
    email: "",
    password: "",
});
</script>
<template>
    <div class="max-w-7xl m-auto mt-10 mb-10">
        <div class="card lg:card-side shadow-xl">
            <figure>
                <img src="https://placeimg.com/400/400/arch" alt="Album" />
            </figure>
            <div class="card-body">
                <form @submit.prevent="form.post('/user')">
            <div class="form-control w-full max-w-xs">
                <label class="label">
                    <span class="label-text">Name</span>
                </label>
                <input
                    type="text"
                    placeholder="Enter your name"
                    class="input input-secondary input-bordered w-full max-w-xs"
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
                    class="input input-secondary input-bordered w-full max-w-xs"
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
                    class="input input-secondary input-bordered w-full max-w-xs"
                    name="password"
                    v-model="form.password"
                />
            </div>
            <input
                type="submit"
                value="Create"
                class="btn btn-outline mt-4"
            />
        </form>
            </div>
        </div>
        
    </div>
</template>
