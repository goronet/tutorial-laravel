import './bootstrap.js';
import VerProducto   from '@/components/productos/VerProducto.vue';
import { createApp } from 'vue';

const el = document.getElementById('ver_producto');

createApp(VerProducto, {
    id: el.getAttribute('data-id'),
}).mount('#ver_producto');
