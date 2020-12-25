import VueRouter from "vue-router";
import ExampleComponent from "./components/ExampleComponent";
import Example2 from "./components/Example2";
import Bookables from './bookables/Bookables';


const routes = [
    {
        path: "/",
        component: Bookables,
        name: "Home"
    },
    {
        path: "/second",
        component: Example2,
        name: "Second"
    },
]

const router = new VueRouter({
    routes,
    mode: 'history'
})

export default router;
