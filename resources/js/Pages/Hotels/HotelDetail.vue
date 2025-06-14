<template>
  <div class="p-6 bg-slate-50">
    <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-md">
      <!-- Loading -->
      <div v-if="loading" class="text-center text-gray-400">
        Đang tải chi tiết khách sạn...
      </div>

      <!-- Nội dung chính -->
      <div v-else class="space-y-6">
        <!-- Tiêu đề -->
        <h1 class="text-3xl font-bold text-center text-gray-600 mb-6">{{ hotel.name }}</h1>

        <!-- Hình ảnh -->
        <div v-if="hotel.image">
          <img
            :src="`http://localhost:8000${hotel.image}`"
            alt="Hình ảnh khách sạn"
            class="w-full h-96 object-cover rounded-lg"
            @error="event => event.target.src = 'http://localhost:8000/image/placeholder.jpg'"
          />
        </div>

        <!-- Mô tả -->
        <div>
          <h2 class="text-2xl font-semibold text-gray-800">Mô tả</h2>
          <div v-html="hotel.description" class="text-gray-600 mt-2"></div>
        </div>

        <!-- Giá -->
        <div>
          <h2 class="text-2xl font-semibold text-gray-800">Giá</h2>
          <p class="text-gray-600 mt-2">{{ hotel.price ? hotel.price.toLocaleString('vi-VN') + ' VND' : 'Chưa có thông tin giá' }}</p>
        </div>

        <!-- Địa chỉ -->
        <div>
          <h2 class="text-2xl font-semibold text-gray-800">Địa chỉ</h2>
          <p class="text-gray-600 mt-2">{{ hotel.address || 'Chưa có địa chỉ' }}</p>
        </div>

        <!-- Địa điểm -->
        <div v-if="hotel.location">
          <h2 class="text-2xl font-semibold text-gray-800">Địa điểm</h2>
          <div class="mt-2 p-4 bg-gray-50 rounded-lg border border-gray-200 flex items-start space-x-4">
            <!-- Ảnh địa điểm -->
            <div v-if="hotel.location.image" class="flex-shrink-0">
              <img
                :src="`http://localhost:8000${hotel.location.image}`"
                alt="Hình ảnh địa điểm"
                class="w-24 h-24 object-cover rounded-lg border border-gray-200"
                @error="event => event.target.src = 'http://localhost:8000/images/placeholder.jpg'"
              />
            </div>
            <!-- Thông tin địa điểm -->
            <div class="flex-1">
              <a
                :href="`/locations/${hotel.location.id}`"
                class="text-blue-500 hover:underline font-medium text-lg"
              >
                {{ hotel.location.name }}
              </a>
              <p class="text-gray-600 mt-1 text-sm">
                {{ hotel.location.description ? hotel.location.description.substring(0, 100) + '...' : 'Chưa có mô tả' }}
              </p>
            </div>
          </div>
        </div>

        <!-- Nút quay lại -->
        <div class="flex justify-center mt-6">
          <a
            href="/hotels"
            class="inline-block bg-blue-500 text-white px-6 py-3 rounded-lg hover:bg-gray-600 transition-colors"
          >
            Quay lại danh sách khách sạn
          </a>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { ref, onMounted } from 'vue';
import axios from 'axios';
import DefaultLayout from '@/Layouts/DefaultLayout.vue';

export default {
  layout: DefaultLayout,
  props: ['hotelId'],
  setup(props) {
    const hotel = ref({});
    const loading = ref(true);

    const fetchHotel = async () => {
      console.log('Đang fetch hotelId:', props.hotelId); // Debug
      try {
        const response = await axios.get(`/api/hotels/${props.hotelId}`);
        hotel.value = response.data;
      } catch (error) {
        console.error('Lỗi khi lấy chi tiết khách sạn:', error);
      } finally {
        loading.value = false;
      }
    };

    onMounted(fetchHotel);

    return { hotel, loading };
  },
};
</script>