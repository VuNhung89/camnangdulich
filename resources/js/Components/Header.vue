<script setup>
import { ref, onMounted } from 'vue';
import axios from 'axios';
import { router } from '@inertiajs/vue3';

const isAuthenticated = ref(false);
const user = ref(null);
const searchQuery = ref('');
const showDropdown = ref(false);

const getCsrfToken = () => {
  const token = document.querySelector('meta[name="csrf-token"]')?.content;
  if (!token) console.error('CSRF token not found');
  return token;
};

onMounted(async () => {
  const token = localStorage.getItem('auth_token');
  if (token) {
    try {
      const response = await axios.get('/api/user', {
        headers: { Authorization: `Bearer ${token}` },
      });
      isAuthenticated.value = true;
      user.value = response.data;
    } catch (error) {
      console.error('Lỗi khi lấy thông tin người dùng:', error);
      localStorage.removeItem('auth_token');
      localStorage.removeItem('remembered_email');
    }
  }
});

const logout = async () => {
  console.log('Đăng xuất được gọi'); // Debug
  try {
    await axios.post('/api/logout', {}, {
      headers: {
        Authorization: `Bearer ${localStorage.getItem('auth_token')}`,
        'X-CSRF-TOKEN': getCsrfToken(),
      },
    });
    localStorage.removeItem('auth_token');
    localStorage.removeItem('remembered_email');
    isAuthenticated.value = false;
    user.value = null;
    showDropdown.value = false;
    router.visit('/login');
  } catch (error) {
    console.error('Đăng xuất thất bại:', error.response?.data || error.message);
  }
};

const search = () => {
  if (searchQuery.value) {
    router.visit(`/search?query=${encodeURIComponent(searchQuery.value)}`);
  }
};

const toggleDropdown = () => {
  console.log('Toggle dropdown:', !showDropdown.value); // Debug
  showDropdown.value = !showDropdown.value;
};
</script>

<template>
  <nav class="bg-slate-50 shadow-md sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between items-center h-16">
        <!-- Logo -->
        <div class="flex-shrink-0">
          <a href="/" class="text-2xl font-serif text-gray-600">CẨM NANG DU LỊCH</a>
        </div>
        <!-- Menu -->
        <div class="hidden md:flex space-x-8">
          <a href="/locations" class="text-gray-700 hover:text-yellow-600">Địa điểm</a>
          <a href="/tours" class="text-gray-700 hover:text-yellow-600">Tour</a>
          <a href="/hotels" class="text-gray-700 hover:text-yellow-600">Khách sạn</a>
          <a href="/posts" class="text-gray-700 hover:text-yellow-600">Mẹo du lịch</a>
        </div>
        <!-- Tìm kiếm và Auth -->
        <div class="flex items-center space-x-4">
          <div v-if="isAuthenticated" class="relative">
            <button
              @click="toggleDropdown"
              class="text-gray-700 hover:text-yellow-600 flex items-center space-x-1 focus:outline-none"
            >
              <span>{{ user ? user.name : 'Tài khoản' }}</span>
              <svg
                class="w-4 h-4"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
              </svg>
            </button>
            <div
              v-show="showDropdown"
              class="absolute right-0 mt-2 w-48 bg-white shadow-lg rounded-md py-2 z-[60]"
            >
              <a
                href="/profile"
                class="block px-4 py-2 text-gray-700 hover:bg-gray-100"
              >
                Hồ sơ
              </a>
              <button
                @click="logout"
                class="w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100"
              >
                Đăng xuất
              </button>
            </div>
          </div>
          <div v-else class="space-x-2">
            <a href="/login" class="text-gray-700 hover:text-yellow-600">Đăng nhập</a>
            <a href="/register" class="text-gray-700 hover:text-yellow-600">Đăng ký</a>
          </div>
        </div>
      </div>
    </div>
  </nav>
</template>