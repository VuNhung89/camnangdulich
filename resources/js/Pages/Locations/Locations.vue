<template>
  <div class="p-4 bg-slate-50">
    <h1 class="text-3xl font-bold text-center text-gray-600 mb-6">Danh sách địa điểm</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
      <div
        v-for="location in locations"
        :key="location.id"
        class="bg-white p-4 rounded-lg shadow-md hover:shadow-lg transition-shadow"
      >
        <!-- Tiêu đề -->
        <h2 class="text-xl font-semibold text-gray-600 mb-2">{{ location.title }}</h2>

        <!-- Hình ảnh -->
        <div v-if="location.image" class="mb-4">
          <img
            :src="location.image"
            alt="Hình ảnh địa điểm"
            class="w-full h-48 object-cover rounded-lg"
          >
        </div>

        <!-- Mô tả & Booking -->
        <div class="space-y-2">
          <div>
            <h3 class="text-lg font-medium text-gray-800">Mô tả</h3>
            <p class="text-gray-600">{{ location.description.substring(0, 100) }}...</p>
          </div>

          <div>
            <h3 class="text-lg font-medium text-gray-800">Booking</h3>
            <p class="text-gray-600">{{ location.booking_info || 'Chưa có thông tin' }}</p>
          </div>
        </div>

        <!-- Nút Xem chi tiết -->
        <div class="flex justify-end mt-4">
          <a
            :href="`/locations/${location.id}`"
            class="inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-200 transition-colors"
          >
            Xem chi tiết
          </a>
        </div>
      </div>
    </div>

    <!-- Trạng thái khi không có dữ liệu -->
    <p v-if="!locations.length" class="text-center text-gray-500 mt-6">
      Chưa có địa điểm nào!
    </p>
  </div>
</template>

<script>
import { ref, onMounted } from 'vue';
import axios from 'axios';
import DefaultLayout from '@/Layouts/DefaultLayout.vue'; 

export default {
  layout: DefaultLayout,
  setup() {
    const locations = ref([]);

    const fetchLocations = async () => {
      try {
        const response = await axios.get('/api/locations');
        locations.value = response.data;
      } catch (error) {
        console.error('Lỗi khi lấy danh sách địa điểm:', error);
      }
    };

    onMounted(fetchLocations);

    return { locations };
  }
};
</script>