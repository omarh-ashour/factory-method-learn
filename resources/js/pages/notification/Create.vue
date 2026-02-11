<template>
    <div class="max-w-md mx-auto mt-8 p-4">
        <h1 class="text-2xl font-bold mb-6">Create Notification</h1>
        
        <form @submit.prevent="form.post(store().url)">
            <div class="mb-4">
                <label class="block text-sm font-medium mb-2">Type</label>
                <div class="space-y-2">
                    <label class="flex items-center">
                        <input 
                            v-model="form.type" 
                            type="radio" 
                            value="email"
                            class="mr-2"
                        />
                        <span>Email</span>
                    </label>
                    <label class="flex items-center">
                        <input 
                            v-model="form.type" 
                            type="radio" 
                            value="sms"
                            class="mr-2"
                        />
                        <span>SMS</span>
                    </label>
                    <label class="flex items-center">
                        <input 
                            v-model="form.type" 
                            type="radio" 
                            value="push"
                            class="mr-2"
                        />
                        <span>Push Notification</span>
                    </label>
                </div>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium mb-2">Recipient</label>
                <input 
                    v-model="form.recipient" 
                    type="text" 
                    placeholder="email or phone number"
                    class="w-full border rounded px-3 py-2"
                />
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium mb-2">Message</label>
                <textarea 
                    v-model="form.message" 
                    placeholder="Enter message"
                    class="w-full border rounded px-3 py-2 h-24"
                ></textarea>
            </div>

            <button 
                type="submit" 
                class="w-full bg-blue-500 text-white rounded px-4 py-2 hover:bg-blue-600"
            >
                Send
            </button>
        </form>
    </div>
</template>

<script setup>
import { useForm } from '@inertiajs/vue3';
import { store } from '@/actions/App/Http/Controllers/NotificationController';

const form = useForm({
    type: '',
    recipient: '',
    message: '',
});
</script>