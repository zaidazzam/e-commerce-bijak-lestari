<script setup>
import Button from "@/Components/Button.vue"
</script>
<template>
    <section class="mt-10">
        <div class="flex md:justify-between md:items-center md:flex-row flex-col">
            <div class="image">
                <div class="hero-image w-72">
                    <img src="/img/reason.png" alt="Hero Image" />
                </div>
            </div>
            <div class="px-10 py-16 flex flex-col gap-2">
                <h2 class="text-4xl font-bold py-4">
                    Belajar Bersama Bijak Lestari
                </h2>
                <p class="text-sm pb-6">
                    Projek Bijak Lestari didasari oleh 3 prinsip utama dari gaya hidup permakultur yaitu Produce no waste, Observe and interact, dan obtain a yield. <br>
                    Kami berupaya mendorong seluruh elemen Masyarakat dimulai dari kota bandung untuk menggerakkan bijak Lestari. Kami akan membantu anda sehingga mampu melangkah lebih bijak dalam segala aktifitas sehari hari anda. Memulai Gerakan bijak dapat dilakukan dari hal sederhana seperti bangun lebih pagi, tidak menyisakan residu, memaksimalkan penggunaan seluruh benda hingga belajar untuk menyediakan pangan mandiri. Semua hal yang kamu perlu ketahui untuk memulai hidup Bijak Lestari akan kamu dapatkan disini. Tapi sebelum itu kamu harus memahami 3 prinsip gaya hidup permakultur yang mendasari Gerakan Bijak Lestari.

                </p>
                <Button link="/tentang">Selengkapnya</Button>
                <!-- <div class="flex gap-5">
                    <div>
                        <img src="/img/logo/logo.png" class="h-16 mb-3" alt="Contoh" />
                        <p>Fleksibilitas</p>
                        <p>
                            Lorem ipsum dolor sit amet consectetur
                            adipisicing elit.
                        </p>
                    </div>
                    <div>
                        <img src="/img/logo/favicon.png" class="h-16 mb-3" alt="Contoh" />
                        <p>Lengkap</p>
                        <p>
                            Lorem ipsum dolor sit amet consectetur
                            adipisicing elit.
                        </p>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
</template>