<template>
    <nav class="bg-customGreen md:bg-white">
        <div class="text-white flex flex-wrap items-center justify-between mx-auto p-4">
            <div>
                <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="/img/logo/logo.png" class="h-12" alt="Logo" />
                </a>
            </div>

            <span @click="menuOpen()" class="absolute md:hidden right-6 top-6 cursor-pointer text-4xl">
                <i :class="[open ? 'bi bi-x' : 'bi bi-filter-left']"></i>
            </span>

            <ul class="md:flex md:items-center md:px-0 px-6 md:pb-0 pb-10 md:static absolute md:w-auto w-full top-20 duration-700 ease-in bg-customGreen md:bg-white text-white md:text-black"
                :class="[open ? 'left-0' : 'left-[-100%]']">
                <li class="md:mx-4 md:my-0 my-6" v-for="link in links" :key="link.name"
                    :class="{ 'font-bold underline': isLinkActive(link.link) }">
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
import { ref, onMounted } from "vue";
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

        function menuOpen() {
            open.value = !open.value
        }

        // Function to check if a link is active
        function isLinkActive(link) {
            const currentPath = window.location.pathname;

            if (
                (link === "/artikel" && currentPath.startsWith("/artikel/detail/")) ||
                (link === "/toolskit" && currentPath.startsWith("/toolskit/detail/"))
            ) {
                return true;
            }

            return currentPath.endsWith(link);
        }

        // Add event listener to update styles on route change
        onMounted(() => {
            window.addEventListener("popstate", () => {
                // Update styles on route change
                links.forEach((link) => {
                    link.isActive = isLinkActive(link.link);
                });
            });

            // Initialize link state on component mount
            links.forEach((link) => {
                link.isActive = isLinkActive(link.link);
            });
        });

        return { links, open, menuOpen, isLinkActive };
    }
}
</script>