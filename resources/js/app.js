import './bootstrap';
import { createApp } from 'vue';
import ExampleComponent from './components/ExampleComponent.vue';
import 'bootstrap';
import '../css/app.css';

const app = createApp({});
app.component('example-component', ExampleComponent);
app.mount('#app');
