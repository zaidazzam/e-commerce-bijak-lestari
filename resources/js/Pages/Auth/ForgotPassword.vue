<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, useForm } from '@inertiajs/vue3';

defineProps({
    status: String,
});

const form = useForm({
    email: '',
});

const submit = () => {
    form.post(route('password.email'));
};
</script>

<template>
    <GuestLayout>
        <Head title="Forgot Password" />

        <div class=" bg-white p-10 box text-center">
            <div class="mb-8">
                <center>
                    <img src="/img/logo/logo.png" class=" w-52" alt="logo">
                </center>
            </div>
            <div class="mb-4 text-sm text-gray-600">
                Lupa kata sandi Anda? Tidak masalah. Cukup beri tahu kami alamat email Anda dan kami akan mengirimkan email berisi tautan pengaturan ulang kata sandi yang memungkinkan Anda memilih yang baru.
            </div>

            <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
                {{ status }}
            </div>

            <form @submit.prevent="submit">
                <div class="row items-center">
                    <div class=" w-3/4">
                        <TextInput
                            id="email"
                            type="email"
                            class="mt-1 block pilihan w-full"
                            placeholder="Masukkan Email"
                            v-model="form.email"
                            required
                            autofocus
                            autocomplete="username"
                        />

                        <InputError class="mt-2" :message="form.errors.email" />
                    </div>

                    <div class=" w-1/4 forgot">
                        <PrimaryButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                            Reset Password
                        </PrimaryButton>
                    </div>

                </div>
            </form>
        </div>
    </GuestLayout>
</template>
