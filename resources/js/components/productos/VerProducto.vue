<script setup>
import AgregarAlCarrito   from '@/components/productos/AgregarAlCarrito.vue';
import { onMounted, ref } from 'vue';

// Props
const props = defineProps({
    id: {
        type: Number,
        default: 0
    },
});

// Data
const nombre = ref('');
const precio = ref('');
const stock = ref('');

// Eventos
onMounted(() => {

    // Traemos info del producto
    axios.get('/api/productos/' + props.id).then(response => {
        const producto = response.data;

        // Seteamos variables del componente
        nombre.value = producto.nombre;
        precio.value = producto.precio;
        stock.value = producto.stock;
    });
});

</script>

<template>

    <div class="container mt-5 mb-5">
        <div class="row align-items-center">
            <div class="col-12 col-sm-6">
                <img src="https://picsum.photos/300/200" alt="" class="img-fluid">
            </div>
            <div class="col-12 col-sm-6">
                <div class="row align-items-center">
                    <div class="col-12">
                        <h1>{{ nombre }}</h1>
                    </div>

                    <div class="col-12">
                        <p>DESCRIPTION DEL PRODUCTO</p>
                    </div>

                    <div class="col-12">
                        <h6><strong>PRECIO:</strong> ${{ precio }}</h6>
                    </div>

                    <div class="col-12">
                        <h6><strong>STOCK:</strong> {{ stock }}</h6>
                    </div>

                    <div class="col-12 mt-3">
                        <AgregarAlCarrito :id="props.id" :stock="stock"></AgregarAlCarrito>
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>

<style scoped>

</style>
