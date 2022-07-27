<script setup>
defineProps({
    users: Object,
});
</script>
<template>
    <div class="max-w-4xl m-auto mt-10 mb-10">
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
                    <tr v-for="user in users">
                        <th>{{ user.id }}</th>
                        <td>{{ user.name }}</td>
                        <td>{{ user.email }}</td>
                        <td>
                            <a href="" class="btn btn-primary btn-sm m-1">Edit</a>
                            <a href="" class="btn btn-error btn-sm m-1">Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>
