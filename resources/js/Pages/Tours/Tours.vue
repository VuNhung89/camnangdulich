<template>
  <div class="p-6 bg-slate-50 min-h-screen">
    <h1 class="text-3xl font-bold text-center text-gray-600 mb-6">Danh sách tour</h1>

    <!-- Loading -->
    <div v-if="loading" class="text-center text-gray-500">
      Đang tải danh sách tour...
    </div>

    <!-- Danh sách tour -->
    <div v-else class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
      <div
        v-for="tour in tours"
        :key="tour.id"
        class="bg-white p-4 rounded-lg shadow-md hover:shadow-lg transition-shadow"
      >
        <!-- Hình ảnh -->
        <div v-if="tour.image" class="mb-4">
          <img
            :src="tour.image"
            alt="Hình ảnh tour"
            class="w-full h-48 object-cover rounded-lg"
            @error="event => event.target.src = '/images/placeholder.jpg'"
          />
        </div>

        <!-- Tiêu đề -->
        <h2 class="text-xl font-semibold text-gray-600 mb-2">{{ tour.title }}</h2>

        <!-- Thông tin -->
        <div class="space-y-2">
          <div>
            <h3 class="text-lg font-medium text-gray-800">Giá</h3>
            <p class="text-gray-600">{{ tour.price.toLocaleString('vi-VN') }} VND</p>
          </div>
          <div>
            <h3 class="text-lg font-medium text-gray-800">Thời gian</h3>
            <p class="text-gray-600">
              {{ new Date(tour.start_date).toLocaleDateString('vi-VN') }} - 
              {{ new Date(tour.end_date).toLocaleDateString('vi-VN') }}
            </p>
          </div>
        </div>

        <!-- Nút Xem chi tiết -->
        <div class="flex justify-end mt-4">
          <a
            :href="`/tours/${tour.id}`"
            class="inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-200 transition-colors"
          >
            Xem chi tiết
          </a>
        </div>
      </div>
    </div>

    <!-- Không có dữ liệu -->
    <p v-if="!tours.length && !loading" class="text-center text-gray-500 mt-6">
      Chưa có tour nào!
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
    const tours = ref([]);
    const loading = ref(true);

    const fetchTours = async () => {
      try {
        const response = await axios.get('/api/tours');
        tours.value = response.data;
      } catch (error) {
        console.error('Lỗi khi lấy danh sách tour:', error);
      } finally {
        loading.value = false;
      }
    };

    onMounted(fetchTours);

    return { tours, loading };
  }
};
</script>