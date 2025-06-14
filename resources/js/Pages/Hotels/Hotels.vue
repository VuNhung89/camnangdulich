<template>
  <div class="p-6 bg-slate-50">
    <h1 class="text-3xl font-bold text-center text-gray-600 mb-6">Danh sách khách sạn</h1>

    <!-- Loading -->
    <div v-if="loading" class="text-center text-gray-500">
      Đang tải danh sách khách sạn...
    </div>

    <!-- Danh sách khách sạn -->
    <div v-else class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
      <div
        v-for="hotel in hotels"
        :key="hotel.id"
        class="bg-white p-4 rounded-lg shadow-md hover:shadow-lg transition-shadow"
      >
        <!-- Hình ảnh -->
        <div v-if="hotel.image" class="mb-4">
          <img
            :src="`http://localhost:8000${hotel.image}`"
            alt="Hình ảnh khách sạn"
            class="w-full h-48 object-cover rounded-lg border border-gray-200"
            @error="event => event.target.src = 'http://localhost:8000/image/placeholder.jpg'"
          />
        </div>

        <!-- Tên khách sạn -->
        <h2 class="text-xl font-semibold text-gray-600 mb-2">{{ hotel.name }}</h2>

        <!-- Thông tin -->
        <div class="space-y-2">
          <div>
            <h3 class="text-lg font-medium text-gray-800">Giá</h3>
            <p class="text-gray-600">{{ hotel.price.toLocaleString('vi-VN') }} VND</p>
          </div>
          <div>
            <h3 class="text-lg font-medium text-gray-800">Địa chỉ</h3>
            <p class="text-gray-600">{{ hotel.address || 'Chưa có địa chỉ' }}</p>
          </div>
          <div v-if="hotel.location">
            <h3 class="text-lg font-medium text-gray-800">Địa điểm</h3>
            <p class="text-gray-600">
              <a :href="`/locations/${hotel.location.id}`" class="text-yellow-500 hover:underline">
                {{ hotel.location.name }}
              </a>
            </p>
          </div>
        </div>

        <!-- Nút Xem chi tiết -->
        <div class="flex justify-end mt-4">
          <a
            :href="`/hotels/${hotel.id}`"
            class="inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-200 transition-colors"
          >
            Xem chi tiết
          </a>
        </div>
      </div>
    </div>

    <!-- Không có dữ liệu -->
    <p v-if="!hotels.length && !loading" class="text-center text-gray-500 mt-6">
      Chưa có khách sạn nào!
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
    const hotels = ref([]);
    const loading = ref(true);

    const fetchHotels = async () => {
      try {
        const response = await axios.get('/api/hotels');
        hotels.value = response.data;
      } catch (error) {
        console.error('Lỗi khi lấy danh sách khách sạn:', error);
      } finally {
        loading.value = false;
      }
    };

    onMounted(fetchHotels);

    return { hotels, loading };
  }
};
</script>