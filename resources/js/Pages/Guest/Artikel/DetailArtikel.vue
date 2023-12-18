<script setup>
import { Head } from "@inertiajs/vue3";
import Container from "@/Components/Container.vue";

/*Get Data From Database */
const { artikels } = defineProps(["artikels"]);
</script>

<template>
    <Head title="Detail" />
    <Container>
        <section>
            <img src="/img/blog.png" alt="Artikel Image" class="w-full">
        </section>
        <section>
            <div class="section-title">
                <h2>{{ artikels[0].judul }}</h2>
                <span>{{ artikels[0].created_at }}</span>
                <hr class="my-5">
                <p>
                    {{ artikels[0].deskripsi }}
                </p>
            </div>
        </section>
    </Container>
</template>