<script setup>
import { ref, onMounted } from 'vue';
import { router, Link } from '@inertiajs/vue3'; // Sử dụng Inertia.js
import axios from 'axios';
import Header from '@/Components/Header.vue';
import Footer from '@/Components/Footer.vue';

// Khởi tạo biến
const user = ref(null);
const events = ref([]);
const loading = ref(true);

// Lấy dữ liệu khi component được mount
onMounted(async () => {
  const token = localStorage.getItem('auth_token');
  if (!token) {
    router.visit('/login');
    return;
  }

  try {
    // Lấy thông tin user
    const userRes = await axios.get('/api/user', {
      headers: { Authorization: `Bearer ${token}` },
    });
    user.value = userRes.data;

    // Lấy danh sách sự kiện từ API
    const eventsRes = await axios.get('/api/events', { params: { per_page: 10 } });
    events.value = eventsRes.data.data || eventsRes.data;
  } catch (err) {
    if (err.response?.status === 401) {
      localStorage.removeItem('auth_token');
      router.visit('/login');
    }
    console.error('Lỗi khi tải dữ liệu:', err);
  } finally {
    loading.value = false;
  }
});

// Hàm hỗ trợ
const truncateText = (text, length) => {
  if (!text) return '';
  return text.length > length ? text.slice(0, length) + '...' : text;
};

const formatDate = date => new Date(date).toLocaleDateString('vi-VN');
</script>

<template>
  <div class="mb-1">
    <Header />
  </div>
  <div class="min-h-screen bg-gray-50">
    <!-- Main Content -->
    <main v-if="loading" class="text-center text-gray-600 text-xl py-10">
      Đang tải...
    </main>
    <main v-else class="space-y-12">
      <!-- Events List Section -->
      <section class="max-w-7xl mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold text-gray-800 mb-6">Danh sách sự kiện</h1>
        <div v-if="events.length" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
          <div v-for="event in events" :key="event.id" class="bg-white rounded-lg shadow-md overflow-hidden">
            <img
              :src="event.image"
              :alt="event.title"
              class="w-full h-48 object-cover"
            />
            <div class="p-4">
              <h2 class="text-xl font-semibold text-gray-800 mb-2">
                {{ truncateText(event.title, 50) }}
              </h2>
              <p class="text-gray-600 mb-2">
                <span class="font-semibold">Ngày:</span> {{ formatDate(event.date) }}
              </p>
              <p class="text-gray-600 mb-4">
                <span class="font-semibold">Địa điểm:</span> {{ event.location || 'Default' }}
              </p>
              <Link
                :href="`/events/${event.id}`"
                class="bg-blue-500 hover:bg-blue-700 text-white px-4 py-2 rounded font-semibold"
              >
                Xem chi tiết
              </Link>
            </div>
          </div>
        </div>
        <div v-else class="text-center text-gray-600 text-xl py-6">
          Không có sự kiện nào!
        </div>
      </section>
    </main>
    <div class="mt-16">
      <Footer />
    </div>
  </div>
</template>

<style scoped>
/* Tùy chỉnh kiểu dáng */
</style>