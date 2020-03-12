<template>
    <div>
        <input
            v-model="string"
            type="search"
            class="border rounded-full py-2 pl-8 pr-5 lg:mt-6 mt-3 w-full focus:outline-none"
            placeholder="Search..."
            @keyup="search()"
            @keyup.enter="clearSearch()"
        />
        <div class="absolute lg:mt-8 ml-2 mt-5" style="left: 0; top: 0">
            <i class="fad fa-search fa-fw text-gray-500"></i>
        </div>
        <div
            class="absolute text-white bg-red-500 rounded-full py-2 px-3 cursor-pointer max-h-screen"
            style="bottom: -25px; right: -15px; z-index: 99999"
            v-if="hasResults()"
            @click="clearSearch()"
        >
            <i class="far fa-times fa-fw"></i>
        </div>
        <div
            class="absolute bg-white border border-grey-500 w-full text-left overflow-y-scroll overflow-x-hidden"
            style="left: 0; top: 100%; z-index: 9999; height: 400px;"
            v-if="hasResults()"
        >
            <div
                v-for="(result,key) in results"
                @click="open(result.link)"
                class="border-b p-3 cursor-pointer"
                :class="{
                    'bg-gray-100': isActive(key),
                    'bg-white': !isActive(key),
                }"
                @mouseover="change(key)"
                @mouseout="change(null)"
            >
                <span class="font-bold">{{ result.title }}</span><br/>
                <span class="text-gray-500 text-sm">{{ result.blurb }} &hellip;</span>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'Search',
        data() {
            return {
                string: '',
                results: [],
                active: null,
                typing: false,
            }
        },
        methods: {
            clearSearch() {
                this.string = '';
                this.results = [];
                this.active = null;
            },
            hasResults() {
                return this.results.length > 0;
            },
            search() {
                this.results = [
                    {
                        title: 'Google',
                        blurb: 'redirect to google to test',
                        link: 'http://google.com',
                    },
                    {
                        title: 'Google 2',
                        blurb: 'redirect to google to test',
                        link: 'http://google.com',
                    },
                    {
                        title: 'Google',
                        blurb: 'redirect to google to test',
                        link: 'http://google.com',
                    },
                    {
                        title: 'Google 2',
                        blurb: 'redirect to google to test',
                        link: 'http://google.com',
                    },
                    {
                        title: 'Google',
                        blurb: 'redirect to google to test',
                        link: 'http://google.com',
                    },
                    {
                        title: 'Google 2',
                        blurb: 'redirect to google to test',
                        link: 'http://google.com',
                    },
                    {
                        title: 'Google',
                        blurb: 'redirect to google to test',
                        link: 'http://google.com',
                    },
                    {
                        title: 'Google 2',
                        blurb: 'redirect to google to test',
                        link: 'http://google.com',
                    },
                    {
                        title: 'Google',
                        blurb: 'redirect to google to test',
                        link: 'http://google.com',
                    },
                    {
                        title: 'Google 2',
                        blurb: 'redirect to google to test',
                        link: 'http://google.com',
                    },
                    {
                        title: 'Google',
                        blurb: 'redirect to google to test',
                        link: 'http://google.com',
                    },
                    {
                        title: 'Google 2',
                        blurb: 'redirect to google to test',
                        link: 'http://google.com',
                    },
                    {
                        title: 'Google',
                        blurb: 'redirect to google to test',
                        link: 'http://google.com',
                    },
                    {
                        title: 'Google 2',
                        blurb: 'redirect to google to test',
                        link: 'http://google.com',
                    },
                    {
                        title: 'Google',
                        blurb: 'redirect to google to test',
                        link: 'http://google.com',
                    },
                    {
                        title: 'Google 2',
                        blurb: 'redirect to google to test',
                        link: 'http://google.com',
                    }
                ]
            },
            open(link) {
                this.results = [];
                window.location = link;
            },
            change(key) {
                this.active = key;
            },
            isActive(key) {
                return key === this.active;
            }
        },
        mounted() {

        }
    }
</script>