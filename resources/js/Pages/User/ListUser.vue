<script setup>
import { Link } from "@inertiajs/inertia-vue3";

defineProps({
    users: Object,
});
</script>
<template>
    <div class="max-w-4xl m-auto mt-10 mb-10">
        <div class="card bg-primary w-full">
            <div class="card-body">
                <div class="overflow-x-auto">
                    <table class="table w-full">
                        <!-- head -->
                        <thead>
                            <tr>
                                <th></th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- row 1 -->
                            <tr v-for="user in users" class="hover">
                                <th>{{ user.id }}</th>
                                <td>{{ user.name }}</td>
                                <td>{{ user.email }}</td>
                                <td>
                                    <Link
                                        :href="`/user/${user.id}/edit`"
                                        class="btn btn-primary btn-sm m-1"
                                        >Edit</Link
                                    >
                                    <a href="" class="btn btn-error btn-sm m-1"
                                        >Delete</a
                                    >
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</template>
