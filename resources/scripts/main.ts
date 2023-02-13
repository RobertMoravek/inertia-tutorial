import { createApp, h } from 'vue'
import {createInertiaApp, Link} from '@inertiajs/inertia-vue3'
import { resolvePageComponent } from 'vite-plugin-laravel/inertia'
import {Inertia} from "@inertiajs/inertia";
import {InertiaProgress} from "@inertiajs/progress";
import Layout from "@/views/layouts/Layout.vue";

createInertiaApp({

    resolve: async (name) => {
        let page = await import(`../views/pages/${name}.vue`);
        page.default.layout ??= Layout;
        return page.default;
    },

	// resolve: (name) => resolvePageComponent(name, import.meta.glob('../views/pages/**/*.vue')),
    title: title => `My App ${title}`,
    setup({ el, app, props, plugin }) {
		createApp({ render: () => h(app, props) })
			.use(plugin)
            .component("Link", Link)
			.mount(el)

	},
})

InertiaProgress.init({
    showSpinner: true
});
