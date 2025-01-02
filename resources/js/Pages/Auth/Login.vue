<script setup>
import {ref} from "vue";
import axios from "axios";
import {router} from "@inertiajs/vue3";

const form = ref({});
const errors = ref('');
const isLoading = ref(false);
const formData = ref({
    email: "",
    password: "",
});

    const submitForm = async () => {
        isLoading.value = true;
        try {
            router.post('/login', formData.value);
            console.log(response?.data);
        }catch (e) {
            errors.value = e?.response?.data?.message;
        }
    }
</script>

<template>
    <div class="container">
        <div class="card shadow-lg">
            <div class="card-body">
                <div class="brand-logo">
                    <img src="@/assets/images/logo.jpeg" class="img-fluid" alt="">
                </div>
                <form @submit.prevent="submitForm" method="POST">
                    <!-- Username Input -->
                    <div class="mb-4">
                        <label for="username" class="form-label text-white">Username</label>
                        <div class="input-group">
                            <div class="input-group-text">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <input type="email" v-model="formData.email" class="form-control" id="username"
                                   placeholder="Enter your email" required>
                        </div>
                        <small v-if="errors" class="text-danger mt-2">{{ errors }}</small>
                    </div>

                    <!-- Password Input -->
                    <div class="mb-4">
                        <label for="password" class="form-label text-white">Password</label>
                        <div class="input-group">
                            <div class="input-group-text">
                                <i class="fas fa-lock"></i>
                            </div>
                            <input type="password" v-model="formData.password" class="form-control" id="password"
                                   placeholder="Enter your password" required>
                        </div>
                    </div>

                    <!-- Login Button -->
                    <button type="submit" class="btn btn-primary w-100">Login</button>
                </form>
            </div>
        </div>
    </div>
</template>

<style scoped>

.card {
    border-radius: 15px;
    border: none;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
}

.card-body {
    padding: 2rem;
}

.form-control {
    border-radius: 10px;
    box-shadow: none;
}

.form-control:focus {
    box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.25);
    border-color: #2585ff;
}

.btn-primary {
    background-color: #2585ff;
    border: none;
    border-radius: 10px;
    padding: 10px 20px;
    font-size: 16px;
}

.btn-primary:hover {
    background-color: #1f74e8;
}

.container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.brand-logo {
    margin: 0 auto;
    text-align: center;
    font-size: 30px;
    font-weight: bold;
    color: #fff;
    width: 80px;
    height: 80px;
    overflow: hidden;
    object-fit: contain;
    border-radius: 100%;
}
</style>
