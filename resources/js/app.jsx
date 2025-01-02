import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'
import VueSweetalert2 from "vue-sweetalert2";
import "@sweetalert2/themes/dark/dark.css"
import "@sweetalert2/themes/default/default.css"
import "@/assets/css/style.css";
import Vue3Toastify from "vue3-toastify";
import 'vue3-toastify/dist/index.css';


const app = createInertiaApp({
    resolve: name => {
        const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
        return pages[`./Pages/${name}.vue`]
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(Vue3Toastify)
            .use(VueSweetalert2)
            .mount(el)
    },
    progress: {
        delay: 250,
        color: '#29d',
        includeCSS: true,
        showSpinner: false,
    },
});
