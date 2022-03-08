<template>
    <Head title="Welcome" />

    <guest-layout>

        <main>
            <div
                class="text-center px-3 py-2 mb-2 border-b"
                v-for="news_item in props.news"
                :key="news_item"
            >
                {{news_item.name}}
            </div>
        </main>

    </guest-layout>
        
</template>

<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import GuestLayout from '@/Layouts/Guest.vue';

let props = defineProps({
    news: {
        type: Object,
        default: []
    }
})

</script>
