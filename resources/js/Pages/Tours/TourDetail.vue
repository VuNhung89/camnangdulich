<template>
  <div class="p-6">
    <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-md">
      <!-- Loading -->
      <div v-if="loading" class="text-center text-gray-500">
        Đang tải chi tiết tour...
      </div>

      <!-- Nội dung chính -->
      <div v-else class="space-y-6">
        <!-- Tiêu đề -->
        <h1 class="text-3xl font-semibold text-center text-gray-600 mb-6">{{ tour.title }}</h1>

        <!-- Hình ảnh -->
        <div v-if="tour.image">
          <img
            :src="tour.image"
            alt="Hình ảnh tour"
            class="w-full h-96 object-cover rounded-lg"
            @error="event => event.target.src = '/image/placeholder.jpg'"
          />
        </div>

        <!-- Thông tin chi tiết -->
        <div class="space-y-4">
          <!-- Mô tả -->
          <div>
            <h2 class="text-2xl font-semibold text-gray-800">Mô tả</h2>
            <div v-html="tour.description" class="text-gray-600 mt-2"></div>
          </div>

          <!-- Giá -->
          <div>
            <h2 class="text-2xl font-semibold text-gray-800">Giá</h2>
            <p class="text-gray-600 mt-2">{{ tour.price.toLocaleString('vi-VN') }} VND</p>
          </div>

          <!-- Thời gian -->
          <div>
            <h2 class="text-2xl font-semibold text-gray-800">Thời gian</h2>
            <p class="text-gray-600 mt-2">
              Từ {{ new Date(tour.start_date).toLocaleDateString('vi-VN') }} 
              đến {{ new Date(tour.end_date).toLocaleDateString('vi-VN') }}
            </p>
          </div>

          <!-- Địa điểm -->
          <div v-if="tour.location">
            <h2 class="text-2xl font-semibold text-gray-800">Địa điểm</h2>
            <p class="text-gray-600 mt-2">
              <a :href="`/locations/${tour.location.id}`" class="text-blue-500 hover:underline">
                {{ tour.location.name }}
              </a>
            </p>
          </div>
        </div>

        <!-- Nút quay lại -->
        <div class="flex justify-center mt-6">
          <a
            href="/tours"
            class="inline-block bg-blue-500 text-white px-6 py-3 rounded-lg hover:bg-gray-600 transition-colors"
          >
            Quay lại danh sách tour
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
  props: ['tourId'],
  setup(props) {
    const tour = ref({});
    const loading = ref(true);

    const fetchTour = async () => {
      try {
        const response = await axios.get(`/api/tours/${props.tourId}`);
        tour.value = response.data;
      } catch (error) {
        console.error('Lỗi khi lấy chi tiết tour:', error);
      } finally {
        loading.value = false;
      }
    };

    onMounted(fetchTour);

    return { tour, loading };
  }
};
</script>