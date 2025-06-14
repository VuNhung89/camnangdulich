<script setup>
import Header from '@/Components/Header.vue';
import Footer from '@/Components/Footer.vue';
</script>

<template>
    <div>
        <!-- Header -->
        <Header/>
        <!-- Main content -->
        <main class="flex-grow">
            <div class="max-w-7xl mx-auto">
                <slot />
            </div>
        </main>
        <!-- Footer -->
         <Footer />
    </div>
</template>