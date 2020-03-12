import Vue from 'vue';
import EventBus from './event';

import Search from "./components/Search";

window.EventBus = EventBus;

const app = new Vue({
    el: '#app',
    components: { Search, },
    data: {

    },
    methods: {
    }
});