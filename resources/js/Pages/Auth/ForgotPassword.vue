<script setup>
import { useForm } from '@inertiajs/vue3';
import axios from 'axios';
import { ref } from 'vue';

const form = useForm({
  email: '',
});
const message = ref(null);

const submit = async () => {
  try {
    const response = await axios.post('/api/forgot-password', {
      email: form.email,
    });
    message.value = response.data.message;
    form.reset();
  } catch (error) {
    form.errors = error.response?.data?.errors || {
      email: error.response?.data?.message || 'Đã có lỗi xảy ra.',
    };
  }
};
</script>

<template>
  <div class="min-h-screen bg-gray-100 flex items-center justify-center px-4">
    <div class="flex w-full max-w-screen-md bg-white rounded-lg shadow-lg overflow-hidden">
      <div class="w-1/2 hidden md:block">
        <img src="/image/image.png" alt="Forgot Password background" class="w-full h-full object-cover" />
      </div>
      <div class="w-full md:w-1/2 flex items-center justify-center p-6">
        <div class="w-full">
          <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Quên Mật Khẩu</h2>
          <p v-if="message" class="text-green-500 text-center mb-4">{{ message }}</p>
          <form @submit.prevent="submit" class="space-y-5">
            <div>
              <input
                v-model="form.email"
                type="email"
                placeholder="Nhập email của bạn"
                class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                required
              />
              <p v-if="form.errors.email" class="text-red-500 text-sm mt-1">{{ form.errors.email }}</p>
            </div>
            <button
              type="submit"
              class="w-full bg-blue-600 font-bold text-white py-3 rounded-md hover:bg-blue-700 transition duration-200"
              :disabled="form.processing"
            >
              {{ form.processing ? 'Đang xử lý...' : 'Gửi Link Reset' }}
            </button>
          </form>
          <p class="text-center text-sm text-gray-600 mt-4">
            <a href="/login" class="text-blue-600 font-semibold hover:underline">Quay lại đăng nhập</a>
          </p>
        </div>
      </div>
    </div>
  </div>
</template>