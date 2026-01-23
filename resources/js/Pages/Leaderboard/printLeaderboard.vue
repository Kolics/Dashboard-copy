<script setup>

defineProps({
    leaderboard: Array,
})

</script>

<template>
    <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg w-9/10">
                    <table class="text-gray-800 dark:text-white w-full justify-stretch text-center">
                        <thead class="text-l font-semibold">
                            <tr>
                                <th>Tribe name</th>
                                <th>Tribe score</th>
                                <th>Combined playtime</th>
                            </tr>
                        </thead>
                        <tbody class="text-red-400">
                            <tr v-for="tribe in leaderboard">
                                <td>{{ tribe.name }}</td>
                                <td>{{ tribe.score }}</td>
                                <td>{{ tribe.playtime }} h</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</template>