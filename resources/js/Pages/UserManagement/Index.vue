<script setup>
    import AppLayout from '@/Layouts/AppLayout.vue';
    import { useForm, Link } from "@inertiajs/vue3";

    defineProps({
        users: {
            type: Array,
            default: () => [],
        },
    });

    const headers = ["Nama", "Email", "Aksi"];
    
    const form = useForm({});

    const deleteUser = (user) => {
        console.log(user)
        form.delete(route('manajemen-pengguna.destroy',user), {preserveScroll: true,});
    };
</script>

<template>
    <AppLayout title="User Management">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Manajemen Pengguna
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-end mb-4">
                    <Link href="manajemen-pengguna/buat" class="inline-flex items-center px-3 py-2.5 bg-blue-500 border border-transparent rounded-md font-semibold text-xs font-medium  text-white uppercase tracking-widest hover:bg-blue-600 active:bg-blue-700 focus:outline-none focus:border-blue-700 focus:ring focus:ring-blue-200 transition ease-in-out duration-150">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 mr-2 stroke-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>
                        Buat
                    </Link>
                </div>
                <div class="bg-white overflow-hidden shadow sm:rounded-lg p-6">
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th v-for="header in headers" :key="header" scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        {{ header }}
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr v-for="user in users" :key="user.id">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                        {{ user.name }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        {{ user.email }}

                                    </td>
                                    <td class="w-px px-6 py-4 whitespace-nowrap">
                                        <div class="flex space-x-4">
                                            <a href="#" class="text-blue-600 font-medium hover:text-blue-700 hover:underline">
                                                View
                                            </a>
                                            <a href="#" class="text-green-600 font-medium hover:text-green-700 hover:underline">
                                                Edit
                                            </a>
                                            <button @click="deleteUser(user.id)" class="text-red-600 font-medium hover:text-red-700 hover:underline">
                                                Delete
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>