<script setup>
import { useForm } from "@inertiajs/inertia-vue3";

const props = defineProps({
    user: Object
});

const form = useForm({
    name: props.user.name,
    email: props.user.email,
});
</script>
<template>
    <div class="max-w-4xl m-auto mt-10 mb-10">
        <form @submit.prevent="form.put(`/user/${user.id}`)">
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
            <input
                type="submit"
                value="Update"
                class="btn btn-outline btn-primary btn-sm mt-4"
            />
        </form>
    </div>
</template>
