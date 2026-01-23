<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import PrintLeaderboard from './printLeaderboard.vue';

defineProps({
    cluster: String,
    leaderboard: Array,
})
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">{{cluster}} leaderboard</h2>
        </template>
        <PrintLeaderboard :leaderboard="leaderboard"/>
    </AuthenticatedLayout>
</template>
