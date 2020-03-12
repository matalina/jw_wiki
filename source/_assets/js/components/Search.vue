<template>
    <div>
        <input
            v-model="string"
            type="search"
            class="border rounded-full py-2 pl-8 pr-5 lg:mt-6 mt-3 w-full"
            placeholder="Search..."
            @keyup="search()"
            @keyup.enter="clearSearch()"
        />
        <div class="absolute lg:mt-8 ml-2 mt-5" style="left: 0; top: 0">
            <i class="fad fa-search fa-fw text-gray-500"></i>
        </div>
        <ul
            class="absolute bg-white border border-grey-500 w-full text-left"
            style="left: 0; top: 100%; z-index: 9999;"
            v-if="hasResults()"
        >
            <li
                v-for="result in results"
                @click="open(result.link)"
                class="border-b p-3"
            >
                <span class="font-bold">{{ result.title }}</span><br/>
                <span class="text-gray-500 text-sm">{{ result.blurb }} &hellip;</span>
            </li>
        </ul>
    </div>
</template>

<script>
    export default {
        name: 'Search',
        data() {
            return {
                string: '',
                results: [],
            }
        },
        methods: {
            clearSearch() {
                this.string = '';
                this.results = [];
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
                    }
                ]
            },
            open(link) {
                this.results = [];
                window.location = link;
            }
        }
    }
</script>