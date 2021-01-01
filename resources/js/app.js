
require('./bootstrap');

import router from "./routes";
import VueRouter from  "vue-router";
import Index from "./Index";
import moment from "moment";
import StarRating from "./shared/components/StarRating";
import FatalError from "./shared/components/FatalError";
import ValidationErrors from "./shared/components/ValidationErrors";

window.Vue = require('vue');

Vue.use(VueRouter);

Vue.filter("fromNow", value => moment(value).fromNow());

Vue.component("star-rating", StarRating);
Vue.component("fatal-error", FatalError);
Vue.component("v-errors", ValidationErrors)

const app = new Vue({
    el: '#app',
    router: router,
    components: {
        "index" : Index
    }
});

