<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <Link :href="'/'">
        <div class="flex flex-col items-center gap-2">
            <img class="w-16 h-16" src="images/logo.png" alt="logo">
            <h3 class="font-bold uppercase text-blue-700">Construction & Investment</h3>
        </div>
    </Link>
</template>
