```vue
<template>
  <div class="p-6">
    <h1 class="text-3xl font-bold text-center text-gray-600 mb-6">Danh sách bài viết</h1>

    <!-- Loading -->
    <div v-if="loading" class="text-center text-gray-400">
      Đang tải danh sách bài viết...
    </div>

    <!-- Danh sách bài viết -->
    <div v-else class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
      <div
        v-for="post in posts"
        :key="post.id"
        class="p-4 bg-white rounded-lg shadow-md border border-gray-100 hover:shadow-lg transition-shadow"
      >
        <!-- Hình ảnh -->
        <div v-if="post.image">
          <img
            :src="`http://localhost:8000${post.image}`"
            alt="Hình ảnh bài viết"
            class="w-full h-48 object-cover rounded-lg border border-gray-200"
            @error="event => event.target.src = 'http://localhost:8000/images/placeholder.jpg'"
          />
        </div>

        <!-- Nội dung -->
        <div class="mt-4">
          <h2 class="text-xl font-semibold text-gray-800">{{ post.title }}</h2>
          <h3 class="text-blue-500">{{post.user.name}}</h3>
          <div class="mt-2">
            <h3 class="text-lg font-medium text-gray-800">Ngày đăng</h3>
            <p class="text-gray-600">
              {{ post.created_at ? new Date(post.created_at).toLocaleDateString('vi-VN') : 'Chưa xác định' }}
            </p>
          </div>
          <!-- Nút Xem chi tiết -->
          <div class="flex justify-end mt-4">
            <a
              :href="`/posts/${post.id}`"
              class="inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-200 transition-colors"
            >
              Xem chi tiết
            </a>
          </div>
        </div>
      </div>

      <!-- Không có dữ liệu -->
      <p v-if="!posts.length" class="text-center text-gray-500 mt-6 col-span-full">
        Chưa có bài viết nào!
      </p>
    </div>
  </div>
</template>

<script>
import { ref, onMounted } from 'vue';
import axios from 'axios';
import DefaultLayout from '@/Layouts/DefaultLayout.vue';

export default {
  layout: DefaultLayout,
  setup() {
    const posts = ref([]);
    const loading = ref(true);

    const fetchPosts = async () => {
      try {
        const response = await axios.get('/api/posts');
        posts.value = response.data;
      } catch (error) {
        console.error('Lỗi khi lấy danh sách bài viết:', error);
      } finally {
        loading.value = false;
      }
    };

    onMounted(fetchPosts);

    return { posts, loading };
  }
};
</script>