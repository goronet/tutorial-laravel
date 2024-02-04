<script setup>
import { ref } from 'vue';

const props = defineProps({
    id: {
        type: Number,
        default: 0
    },
    stock: {
        type: Number,
        default: 0
    },
});

// Data
const cantidad = ref(0);

// Metodos
const agregarAlCarrito = () => {

    // Validamos stock
    if (props.stock < cantidad.value) {
        return;
    }

    const productos = JSON.parse(localStorage.getItem('productos')) || [];
    const indexExisteProductos = productos.findIndex((el) => parseInt(el.id) === parseInt(props.id));

    // Si no existe el producto
    if (indexExisteProductos === -1) {
        productos.push({
            id: props.id,
            cantidad: cantidad.value
        });
    } else { // si existe el producto

        // Agregamos la cantidad
        productos[indexExisteProductos].cantidad += cantidad.value;
    }

    localStorage.setItem('productos', JSON.stringify(productos));
};
</script>

<template>
    <div class="row align-items-center justify-content-center">
        <div class="col-12 col-sm-6">
            <input type="number"
                   class="form-control"
                   v-model="cantidad"
                   :max="stock"
                   placeholder="Ingrese cantidad">
        </div>
        <div class="col-12 col-sm-6">
            <button type="button" class="btn btn-success" @click="agregarAlCarrito">
                AGREGAR AL CARRITO
            </button>
        </div>
    </div>
</template>

<style scoped>

</style>
