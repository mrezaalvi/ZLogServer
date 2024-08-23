<script setup>
  import AppLayout from '@/Layouts/AppLayout.vue';
  import { Link, useForm } from "@inertiajs/vue3";
  
  defineProps({ errors: Object })

  const form = useForm({
    name: "",
    email: "",
    password: "",
    password_confirmation: "",
  });
  const submit = () => {
    form.post("/manajemen-pengguna");
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
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <form @submit.prevent="submit" class="space-y-6">
                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                <div class="sm:col-span-3">
                                    <label for="name" class="block text-sm font-medium leading-6 text-gray-600">Nama</label>
                                    <div class="mt-2">
                                        <input type="text" name="name" id="name" v-model="form.name" placeholder="Masukkan nama anda" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6">
                                    </div>
                                    <div v-if="errors.name" class="mt-2 text-sm text-red-600">
                                        {{ errors.name }}
                                    </div>
                                </div>
                            </div>
                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                <div class="sm:col-span-2">
                                    <label for="email" class="block text-sm font-medium leading-6 text-blue-600">Email</label>
                                    <div class="mt-2">
                                        <input type="text" name="email" id="email" v-model="form.email" placeholder="Masukkan email anda" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6">
                                    </div>
                                    <div v-if="errors.email" class="mt-2 text-sm text-red-600">
                                        {{ errors.email }}
                                    </div>
                                </div>
                            </div>
                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                <div class="sm:col-span-2">
                                    <label for="password" class="block text-sm font-medium leading-6 text-gray-600">Password</label>
                                    <div class="mt-2">
                                        <input type="password" name="password" id="password" v-model="form.password" placeholder="Masukkan password anda" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6">
                                    </div>
                                    <div v-if="errors.password" class="mt-2 text-sm text-red-600">
                                        {{ errors.password }}
                                    </div>
                                </div>
                            
                                <div class="sm:col-span-2">
                                    <label for="password-confirmation" class="block text-sm font-medium leading-6 text-gray-600">Konfirmasi Password</label>
                                    <div class="mt-2">
                                        <input type="password" name="password_confirmation" id="password-confirmation" v-model="form.password_confirmation" placeholder="Masukkan kembali password anda untuk konfirmasi" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6">
                                    </div>
                                    <div v-if="errors.password_confirmation" class="mt-2 text-sm text-red-600">
                                        {{ errors.password_confirmation }}
                                    </div>
                                </div>
                            </div>
                            <div class="mt-6 flex items-center justify-end gap-x-6">
                                <Link href="/manajemen-pengguna" class="sm:min-w-28 rounded-md border-2 border-red-500 px-3 py-2 text-sm font-semibold text-center text-red-500 shadow-sm hover:border-red-600 hover:text-red-600 focus:text-red-600">
                                    Batal
                                </Link>

                                <button type="submit" class="sm:min-w-28 rounded-md bg-blue-600 px-3 py-2.5 text-sm font-semibold text-center text-white shadow-sm hover:bg-blue-500">
                                    Simpan
                                </button>
                            </div>
                            
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
    </AppLayout>
</template>
    
  
  