<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import { Head, Link, useForm } from "@inertiajs/vue3";

const form = useForm({
    name: "",
    email: "",
    password: "",
    password_confirmation: "",
    terms: false,
});

const submit = () => {
    form.post(route("register"), {
        onFinish: () => form.reset("password", "password_confirmation"),
    });
};
</script>

<template>
    <GuestLayout>
        <Head title="Daftar" />

        <div class="flex justify-between">
            <div class="w-1/2 box bg-white py-10 px-5">
                <div class="mb-8">
                    <center>
                        <img src="/img/logo/logo.png" class=" w-32" alt="logo">
                    </center>
                </div>
                
                <form @submit.prevent="submit" class="py-4">
                    <div class="row">
                        <div class="register">
                            <InputLabel for="name" value="Nama Lengkap" />
                            <TextInput
                                id="name"
                                type="text"
                                class="mt-1 block w-full pilihan"
                                placeholder="Masukkan Nama"
                                v-model="form.name"
                                required
                                autofocus
                                autocomplete="name"
                            />

                            <InputError class="mt-2" :message="form.errors.name" />
                        </div>

                        <div class="register">
                            <InputLabel for="username" value="Username" />
                            <TextInput
                                id="username"
                                type="text"
                                class="mt-1 block w-full pilihan"
                                placeholder="Masukkan Username"
                                v-model="form.username"
                                required
                                autofocus
                                autocomplete="username"
                            />

                            <InputError class="mt-2" :message="form.errors.username" />
                        </div>
                    </div>

                    <div class="mt-4">
                        <div class="register">
                            <InputLabel for="email" value="Email" />
                            <TextInput
                                id="email"
                                type="email"
                                placeholder="Masukkan Email"
                                class="mt-1 block w-full pilihan"
                                v-model="form.email"
                                required
                                autocomplete="username"
                            />

                            <InputError class="mt-2" :message="form.errors.email" />
                        </div>
                    </div>

                    <div class="mt-4">
                        <InputLabel for="password" value="Password" />
                        <TextInput
                            id="password"
                            type="password"
                            placeholder="Masukkan Password"
                            class="mt-1 block w-full pilihan"
                            v-model="form.password"
                            required
                            autocomplete="new-password"
                        />

                            <InputError class="mt-2" :message="form.errors.password" />
                        </div>

                    <div class="mt-4">
                        <InputLabel for="password_confirmation" value="Confirm Password"/>
                        <TextInput
                            id="password_confirmation"
                            type="password"
                            class="mt-1 block w-full pilihan"
                            placeholder="Masukkan Password"
                            v-model="form.password_confirmation"
                            required
                            autocomplete="new-password"
                        />

                        <InputError
                            class="mt-2"
                            :message="form.errors.password_confirmation"
                        />
                    </div>

                    <div class="mt-6">
                        <PrimaryButton
                            class=" w-full text-center"
                            :class="{ 'opacity-25': form.processing }"
                            :disabled="form.processing"
                        >
                            Daftar
                        </PrimaryButton>
                    </div>
                </form>
                <div class=" mt-6 text-xs text-center">
                    Sudah Punya Akun?
                    <Link :href="route('login')"
                        class="underline font-bold text-xs text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        >
                        Masuk
                    </Link>
                </div>
            </div>

            <div class=" w-1/2">
                <img src="/img/ilustrasi/berkebun-2.jpg"
                class="box h-full"
                alt="Ilustrasi Berkebun" />
            </div>
        </div>

        
    </GuestLayout>
</template>
