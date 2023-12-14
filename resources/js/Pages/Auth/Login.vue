<script setup>
import Checkbox from '@/Components/Checkbox.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

defineProps({
    canResetPassword: Boolean,
    status: String,
});

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
    <GuestLayout>
        <Head title="Masuk" />

        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div>

        <div class="flex justify-between">
            <div class="w-1/2 box bg-white p-10">
                <div class="mb-8">
                    <center>
                        <img src="/img/logo/logo.png" class=" w-32" alt="logo">
                    </center>
                </div>
                
                <form @submit.prevent="submit">
                    <div>
                        <InputLabel for="email" value="Email" />
                        <TextInput
                            id="email"
                            type="email"
                            class="mt-1 block w-full pilihan"
                            placeholder="Masukkan Email"
                            v-model="form.email"
                            required
                            autofocus
                            autocomplete="username"
                        />

                        <InputError class="mt-2" :message="form.errors.email" />
                    </div>

                    <div class="mt-6">
                        <InputLabel for="password" value="Password" />
                        <TextInput
                            id="password"
                            type="password"
                            class="mt-1 block w-full pilihan"
                            placeholder="Masukkan Password"
                            v-model="form.password"
                            required
                            autocomplete="current-password"
                        />

                        <InputError class="mt-2" :message="form.errors.password" />
                    </div>

                    <div class="flex justify-between mt-6">
                        <label class="flex items-center">
                            <Checkbox name="remember" v-model:checked="form.remember" />
                            <span class="text-xs text-gray-600">Remember me</span>
                        </label>

                        <Link
                            v-if="canResetPassword"
                            :href="route('password.request')"
                            class="underline text-xs text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        >
                            Lupa Password?
                        </Link>
                    </div>

                    <div class="mt-6">
                        <PrimaryButton class="w-full text-center" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                            Masuk
                        </PrimaryButton>
                    </div>
                </form>
                
                <div class="mt-6 text-xs text-center">
                    Belum Punya Akun? 
                    <Link :href="route('register')"
                        class="text-xs text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 underline font-bold">
                        Daftar
                    </Link>
                </div>
            </div>

            <div class=" w-1/2">
                <img src="/img/ilustrasi/berkebun.jpg"
                class="box h-full"
                alt="Ilustrasi Berkebun" />
            </div>
        </div>
    </GuestLayout>
</template>
