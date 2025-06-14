<script setup>
import { ref, onMounted } from 'vue';
import { router } from '@inertiajs/vue3';
import axios from 'axios';
import Header from '@/Components/Header.vue';
import Footer from '@/Components/Footer.vue';

const stats = ref({
  users: 0,
  posts: 0,
  tours: 0,
  bookings: 0,
  hotels: 0,
  locations: 0,
  events: 0,
  videos: 0,
  comments: 0,
  ratings: 0,
  likes: 0,
  pendingPosts: 0,
});
const posts = ref([]);
const currentPage = ref(1);
const lastPage = ref(1);
const perPage = 10;
const loading = ref(true);

onMounted(async () => {
  const token = localStorage.getItem('auth_token');
  if (!token) {
    router.visit('/login');
    return;
  }
  try {
    const userRes = await axios.get('/api/user', {
      headers: { Authorization: `Bearer ${token}` },
    });
    if (userRes.data.role !== 'admin') {
      router.visit('/');
      return;
    }
    await fetchData();
  } catch (err) {
    console.error('Lỗi tải dữ liệu:', err);
    if (err.response?.status === 401) {
      localStorage.removeItem('auth_token');
      router.visit('/login');
    }
  } finally {
    loading.value = false;
  }
});

const fetchData = async () => {
  try {
    const [statsRes, postsRes] = await Promise.all([
      axios.get('/api/admin/stats', {
        headers: { Authorization: `Bearer ${localStorage.getItem('auth_token')}` },
      }),
      axios.get('/api/posts/pending', {
        headers: { Authorization: `Bearer ${localStorage.getItem('auth_token')}` },
        params: { page: currentPage.value, per_page: perPage },
      }),
    ]);
    stats.value = statsRes.data;
    posts.value = postsRes.data.data;
    currentPage.value = postsRes.data.current_page;
    lastPage.value = postsRes.data.last_page;
  } catch (err) {
   console.error('Lỗi API:', {
      status: err.response?.status,
      data: err.response?.data,
      message: err.message,
    });
  }
};

const goToPage = (page) => {
  if (page >= 1 && page <= lastPage.value) {
    currentPage.value = page;
    fetchData();
  }
};

const approvePost = async (postId) => {
  try {
    await axios.put(`/api/posts/${postId}/approve`, {}, {
      headers: { Authorization: `Bearer ${localStorage.getItem('auth_token')}` },
    });
    posts.value = posts.value.filter(post => post.id !== postId);
    stats.value.pendingPosts--;
  } catch (err) {
    console.error('Lỗi duyệt bài:', err);
  }
};

const rejectPost = async (postId) => {
  if (confirm('Bạn chắc chắn muốn xóa bài viết này?')) {
    try {
      await axios.delete(`/api/posts/${postId}`, {
        headers: { Authorization: `Bearer ${localStorage.getItem('auth_token')}` },
      });
      posts.value = posts.value.filter(post => post.id !== postId);
      stats.value.pendingPosts--;
    } catch (err) {
      console.error('Lỗi xóa bài:', err);
    }
  }
};

const formatDate = date => new Date(date).toLocaleDateString('vi-VN');
</script>

<template>
  <div class="min-h-screen bg-gray-100">
    <Header />
    <main class="container mx-auto px-4 py-8">
      <h1 class="text-3xl font-bold text-gray-800 mb-6">Bảng điều khiển Admin</h1>
      <div v-if="loading" class="text-center text-gray-600">Đang tải...</div>
      <div v-else>
        <!-- Thẻ thống kê -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 mb-8">
          <div class="bg-white p-6 rounded-lg shadow">
            <h2 class="text-lg font-semibold text-gray-700">Người dùng</h2>
            <p class="text-2xl font-bold text-blue-600">{{ stats.users }}</p>
          </div>
          <div class="bg-white p-6 rounded-lg shadow">
            <h2 class="text-lg font-semibold text-gray-700">Bài viết</h2>
            <p class="text-2xl font-bold text-yellow-600">{{ stats.posts }}</p>
          </div>
          <div class="bg-white p-6 rounded-lg shadow">
            <h2 class="text-lg font-semibold text-gray-700">Tour</h2>
            <p class="text-2xl font-bold text-green-600">{{ stats.tours }}</p>
          </div>
          <div class="bg-white p-6 rounded-lg shadow">
            <h2 class="text-lg font-semibold text-gray-700">Đặt tour</h2>
            <p class="text-2xl font-bold text-purple-600">{{ stats.bookings }}</p>
          </div>
          <div class="bg-white p-6 rounded-lg shadow">
            <h2 class="text-lg font-semibold text-gray-700">Khách sạn</h2>
            <p class="text-2xl font-bold text-orange-600">{{ stats.hotels }}</p>
          </div>
          <div class="bg-white p-6 rounded-lg shadow">
            <h2 class="text-lg font-semibold text-gray-700">Địa điểm</h2>
            <p class="text-2xl font-bold text-teal-600">{{ stats.locations }}</p>
          </div>
          <div class="bg-white p-6 rounded-lg shadow">
            <h2 class="text-lg font-semibold text-gray-700">Sự kiện</h2>
            <p class="text-2xl font-bold text-pink-600">{{ stats.events }}</p>
          </div>
          <div class="bg-white p-6 rounded-lg shadow">
            <h2 class="text-lg font-semibold text-gray-700">Video</h2>
            <p class="text-2xl font-bold text-red-600">{{ stats.videos }}</p>
          </div>
        </div>

        <!-- Bảng bài viết chờ duyệt -->
        <div class="bg-white p-6 rounded-lg shadow">
          <h2 class="text-lg font-semibold text-gray-700 mb-4">Bài viết chờ duyệt ({{ stats.pendingPosts }})</h2>
          <table class="w-full text-left border-collapse">
            <thead>
              <tr class="bg-gray-100">
                <th class="p-3 border">Tiêu đề</th>
                <th class="p-3 border">Tác giả</th>
                <th class="p-3 border">Ngày tạo</th>
                <th class="p-3 border">Hành động</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="post in posts" :key="post.id" class="border-t">
                <td class="p-3 border">{{ post.title }}</td>
                <td class="p-3 border">{{ post.user.name }}</td>
                <td class="p-3 border">{{ formatDate(post.created_at) }}</td>
                <td class="p-3 border">
                  <button @click="approvePost(post.id)" class="bg-green-500 text-white px-3 py-1 rounded mr-2 hover:bg-green-600">Duyệt</button>
                  <button @click="rejectPost(post.id)" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Xóa</button>
                </td>
              </tr>
              <tr v-if="!posts.length">
                <td colspan="4" class="p-3 text-center text-gray-600 border">Không có bài viết chờ duyệt</td>
              </tr>
            </tbody>
          </table>

          <!-- Phân trang -->
          <div class="mt-4 flex justify-between items-center">
            <button
              :disabled="currentPage === 1"
              @click="goToPage(currentPage - 1)"
              class="px-4 py-2 bg-gray-300 rounded disabled:opacity-50 hover:bg-gray-400"
            >
              Trước
            </button>
            <span>Trang {{ currentPage }} / {{ lastPage }}</span>
            <button
              :disabled="currentPage === lastPage"
              @click="goToPage(currentPage + 1)"
              class="px-4 py-2 bg-gray-300 rounded disabled:opacity-50 hover:bg-gray-400"
            >
              Sau
            </button>
          </div>
        </div>
      </div>
    </main>
    <Footer />
  </div>
</template>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap');
body {
  font-family: 'Poppins', sans-serif;
}
</style>