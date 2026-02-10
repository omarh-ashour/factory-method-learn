<template>
    <div class="flex flex-col items-center space-y-2 p-4 ">
        <div class="text-2xl font-bold mb-5">Notifications</div>
        <div class="ml-4">
            <Link
                :href="create().url"
                class="rounded bg-blue-500 px-4 py-2 text-white"
            >
                Send Notification
            </Link>
        </div>
    </div>

    <div v-for="notification in notifications" :key="notification.id">
        {{ notification.data.message }}
    </div>
</template>
<script setup>
import { Link } from '@inertiajs/vue3';
import { create } from '@/actions/App/Http/Controllers/NotificationController';
const props = defineProps({
    notifications: Array,
});
</script>
