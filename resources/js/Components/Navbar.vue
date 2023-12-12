<template>
    <nav class="bg-customGreen md:bg-white">
        <div class="text-white max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <div>
                <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="/img/logo/logo.png" class="h-16" alt="Logo" />
                </a>
            </div>

            <span @click="MenuOpen()" class="absolute md:hidden right-6 top-6 cursor-pointer text-4xl">
                <i :class="[open ? 'bi bi-x' : 'bi bi-filter-left']"></i>
            </span>

            <ul class="md:flex md:items-center md:px-0 px-6 md:pb-0 pb-10 md:static absolute md:w-auto w-full top-20 duration-700 ease-in bg-customGreen md:bg-white text-white md:text-black"
                :class="[open ? 'left-0' : 'left-[-100%]']">
                <li class="md:mx-4 md:my-0 my-6" v-for="link in links" :key="link.name">
                    <a :href="link.link" class="text-md hover:text-green-700">{{ link.name }}</a>
                </li>

                <div class="block md:hidden">
                    <Button link="/login">Login</Button>
                    <Button link="/register">Register</Button>
                </div>
            </ul>

            <div class="hidden md:block">
                <Button link="/login">Login</Button>
                <Button link="/register">Register</Button>
            </div>
        </div>
    </nav>
</template>

<script>
import { ref } from "vue";
import Button from "./Button.vue";
export default {
    components: {
        Button,
    },

    setup() {
        let open = ref(false)
        let links = [
            { name: "Beranda", link: "/" },
            { name: "Toolskit", link: "/toolskit" },
            { name: "Artikel", link: "/artikel" },
            { name: "Tentang", link: "/tentang" }
        ];

        function MenuOpen() {
            open.value = !open.value
        }

        return { links, open, MenuOpen };
    }
}
</script>