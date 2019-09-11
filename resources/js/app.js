require('./bootstrap');

window.Vue = require('vue');

import { Form, HasError, AlertError } from "vform";

window.Form = Form;

Vue.component(HasError.name, HasError);
Vue.component(AlertError.name, AlertError);

import VueRouter from "vue-router";
Vue.use(VueRouter);

import VueProgressBar from "vue-progressbar";

Vue.use(VueProgressBar, {
    color: "rgb(143, 255, 199)",
    failedColor: "red",
    height: "5px"
});

import Swal from "sweetalert2";
window.Swal = Swal;

 
const Toast = Swal.mixin({
    toast: true,
    position: "top-end",
    showConfirmButton: false,
    timer: 3000
});
window.Toast=Toast;

window.Fire = new Vue();

import Dashboard from "./components/Dashboard";
import Profile from "./components/Profile";
import Users from "./components/Users";
import Developer from "./components/Developer";

let routes = [
    { path: "/dashboard", component: Dashboard },
    { path: "/profile", component: Profile },
    { path: "/users", component: Users },
    { path: "/developer", component: Developer }
];

const router = new VueRouter({
    mode: "history",
    routes // short for `routes: routes`
});

Vue.component(
    "passport-clients",
    require("./components/passport/Clients.vue").default
);

Vue.component(
    "passport-authorized-clients",
    require("./components/passport/AuthorizedClients.vue").default
);

Vue.component(
    "passport-personal-access-tokens",
    require("./components/passport/PersonalAccessTokens.vue").default
);

const app = new Vue({
    el :"#app",
    router
})