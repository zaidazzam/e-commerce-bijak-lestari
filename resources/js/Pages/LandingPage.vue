<script setup>
import { Head, Link } from "@inertiajs/vue3";
import Navbar from "@/Components/Navbar.vue";
import Footer from "@/Components/Footer.vue";
import Button from "@/Components/Button.vue";
import Kategori from "@/Components/Kategori.vue";
import Box from "@/Components/home/Box.vue";
import Testimonial from "@/Components/home/Testimoni.vue";
import { defineComponent } from "vue";
import { Carousel, Navigation, Pagination, Slide } from "vue3-carousel";
import "vue3-carousel/dist/carousel.css";
// Import props
const { artikels } = defineProps(["artikels"]);
</script>

<template>
    <Head title="Bijak Lestari" />
    <Navbar />
    <section
        class="mx-auto w-full max-w-screen-xl px-4 lg:py-3 flex flex-col gap-8"
    >
        <!-- Hero Section -->
        <div id="hero-section">
            <div class="hero bg-gray-800 text-white">
                <div
                    class="flex md:justify-between md:items-end md:flex-row flex-col"
                >
                    <div class="px-10 py-20 md:w-[500px] w-full">
                        <h1 class="text-white text-4xl font-bold py-4">
                            Belajar lebih mudah Bersama Bijak Lestari
                        </h1>
                        <p class="text-white text-sm pt-2 pb-6">
                            🌎 Pelajari Teknik Permaculture yang Revolusioner 🌳
                            Menggabungkan Ilmu Pengetahuan dan Kreativitas Untuk
                            Mengubah Kehidupan Anda.
                        </p>
                        <Button link="/toolskit">Belajar Sekarang</Button>
                    </div>
                    <div class="image">
                        <div class="hero-image w-72">
                            <img
                                src="/img/ilustrasi/hero.png"
                                alt="Hero Image"
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Hero Section -->

        <!-- Produk Section -->
        <div id="paket-section">
            <div class="section-title">
                <h2>Toolskit Unggulan</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
            </div>
            <div
                class="flex md:justify-between md:gap-x-3 gap-y-3 justify-center md:flex-row flex-col"
            >
                <a href="#">
                    <div class="box-paket">
                        <img src="/img/paket.png" alt="Paket Toolskit" />
                        <div>
                            <Kategori>Hidroponik</Kategori>
                            <h3>Paket 12 Lubang</h3>
                            <ul>
                                <li>2 pcs Benih</li>
                                <li>Lorem ipsum dolor sit liquam fugit.</li>
                                <li>Lorem ipsum dolor sit liquam fugit.</li>
                                <li>Lorem ipsum dolor sit liquam fugit.</li>
                                <li>Lorem ipsum dolor sit liquam fugit.</li>
                            </ul>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="box-paket">
                        <img src="/img/paket.png" alt="Paket Toolskit" />
                        <div>
                            <Kategori>Hidroponik</Kategori>
                            <h3>Paket 12 Lubang</h3>
                            <ul>
                                <li>2 pcs Benih</li>
                                <li>Lorem ipsum dolor sit liquam fugit.</li>
                                <li>Lorem ipsum dolor sit liquam fugit.</li>
                                <li>Lorem ipsum dolor sit liquam fugit.</li>
                                <li>Lorem ipsum dolor sit liquam fugit.</li>
                            </ul>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="box-paket">
                        <img src="/img/paket.png" alt="Paket Toolskit" />
                        <div>
                            <Kategori>Hidroponik</Kategori>
                            <h3>Paket 12 Lubang</h3>
                            <ul>
                                <li>2 pcs Benih</li>
                                <li>Lorem ipsum dolor sit liquam fugit.</li>
                                <li>Lorem ipsum dolor sit liquam fugit.</li>
                                <li>Lorem ipsum dolor sit liquam fugit.</li>
                                <li>Lorem ipsum dolor sit liquam fugit.</li>
                            </ul>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="box-paket">
                        <img src="/img/paket.png" alt="Paket Toolskit" />
                        <div>
                            <Kategori>Hidroponik</Kategori>
                            <h3>Paket 12 Lubang</h3>
                            <ul>
                                <li>2 pcs Benih</li>
                                <li>Lorem ipsum dolor sit liquam fugit.</li>
                                <li>Lorem ipsum dolor sit liquam fugit.</li>
                                <li>Lorem ipsum dolor sit liquam fugit.</li>
                                <li>Lorem ipsum dolor sit liquam fugit.</li>
                            </ul>
                        </div>
                    </div>
                </a>
            </div>
            <div
                class="w-[500px] mt-10 mx-auto bg-customGreen text-white text-sm text-center p-4 rounded-lg"
            >
                <a href="/toolskit">Selengkapnya</a>
            </div>
        </div>
        <!-- End Produk Section -->

        <!-- Reason Section -->
        <div class="mt-10">
            <div
                class="flex md:justify-between md:items-center md:flex-row flex-col"
            >
                <div class="image">
                    <div class="hero-image w-72">
                        <img src="/img/reason.png" alt="Hero Image" />
                    </div>
                </div>
                <div class="px-10 py-16 md:w-1/2 w-full flex flex-col gap-2">
                    <h1 class="text-4xl font-bold py-4">
                        Mengapa memilih kami
                    </h1>
                    <p class="text-sm pb-6">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Integer ut elit sit amet diam lacinia euismod et non
                        dolor. Cras ornare dolor ut massa efficitur consequat.
                    </p>
                    <div class="flex gap-5">
                        <div>
                            <img
                                src="/img/logo/logo.png"
                                class="h-16 mb-3"
                                alt="Contoh"
                            />
                            <p>Fleksibilitas</p>
                            <p>
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit.
                            </p>
                        </div>
                        <div>
                            <img
                                src="/img/logo/favicon.png"
                                class="h-16 mb-3"
                                alt="Contoh"
                            />
                            <p>Lengkap</p>
                            <p>
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Reason Section -->

        <!-- Testimonial Section -->
        <hr />
        <div class="section-title" style="padding-bottom: 0px">
            <h2>Testimonial</h2>
            <p>Simak Pengalaman Lainnya dengan Produk dan Layanan Kami</p>
        </div>
        <div>
            <Carousel>
                <Slide v-for="index in 3" :key="index">
                    <Testimonial
                        :testimoni="slides[index - 1].testimoni"
                        :thumbnail="slides[index - 1].thumbnail"
                        :name="slides[index - 1].name"
                        :desc="slides[index - 1].desc"
                    />
                </Slide>

                <template #addons>
                    <Navigation />
                    <Pagination />
                </template>
            </Carousel>
        </div>
        <hr />
        <!-- End Testimonial Section -->

        <!-- Artikel Section -->
        <div id="artikel">
            <div class="section-title">
                <h2>Artikel Terbaru</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Vivamus hendrerit suscipit egestas.
                </p>
            </div>
            <div
                class="flex flex-col md:flex-row md:justify-between justify-center"
            >
                <Box
                    thumbnail="/img/blog.png"
                    v-for="artikel in artikels"
                    :key="artikel.id"
                    :created_at="artikel.publicationDate"
                    :judul="artikel.judul"
                    :deskripsi="artikel.deskripsi"
                    link="/toolskit"
                />

                <!-- <Box
                    thumbnail="/img/blog.png"
                    publicationDate="10 Desember 2023"
                    title="Creating a Pollinator Friendly Garden"
                    description="Vivamus accumsan diam eget ultricies auctor. Proin iaculis metus vel condimentum tincidunt."
                    link="/toolskit"
                />
                <Box
                    thumbnail="/img/blog.png"
                    publicationDate="10 Desember 2023"
                    title="Creating a Pollinator Friendly Garden"
                    description="Vivamus accumsan diam eget ultricies auctor. Proin iaculis metus vel condimentum tincidunt."
                    link="/toolskit"
                /> -->
            </div>
        </div>
    </section>
    <Footer />
</template>

<script>
export default defineComponent({
    data() {
        return {
            slides: [
                {
                    testimoni:
                        "Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer convallis volutpat dui quis scelerisque.",
                    thumbnail: "/img/logo/favicon.png",
                    name: "Alfina Balqis N",
                    desc: "Developer at Bangun Digital Indonesia",
                },
                {
                    testimoni:
                        "Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer convallis volutpat dui quis scelerisque.",
                    thumbnail: "/img/reason.png",
                    name: "lorem",
                    desc: "lorem",
                },
                {
                    testimoni:
                        "Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer convallis volutpat dui quis scelerisque.",
                    thumbnail: "/img/paket.png",
                    name: "lorem",
                    desc: "Developer",
                },
            ],
        };
    },
});
</script>

<style>
.carousel__item {
    min-height: 200px;
    width: 100%;
    background-color: red;
    color: black;
    font-size: 20px;
    border-radius: 8px;
    display: flex;
    justify-content: center;
    align-items: center;
}

.carousel__slide {
    padding: 10px;
}

.carousel__prev,
.carousel__next {
    box-sizing: content-box;
    background: rgba(59, 93, 80, 0.1);
    padding: 1rem;
    border-radius: 100%;
}
</style>
