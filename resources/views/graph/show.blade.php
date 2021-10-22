<x-app-layout>
    <!-- component -->
    <div class="min-h-screen antialiased sans-serif w-lg ">
        <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@400;500;600;700&display=swap"
            rel="stylesheet">
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
        <style>
            body {
                font-family: 'IBM Plex Mono', sans-serif;
            }

            [x-cloak] {
                display: none;
            }

            .line {
                background: repeating-linear-gradient(to bottom,
                        #eee,
                        #eee 1px,
                        #fff 1px,
                        #fff 8%);
            }

            .tick {
                background: repeating-linear-gradient(to right,
                        #eee,
                        #eee 1px,
                        #fff 1px,
                        #fff 5%);
            }

        </style>



        <div x-data="app()" x-cloak class="px-4 mt-32">
            <div class="max-w-5xl py-10 mx-auto">
                <div class="p-6 bg-white rounded-lg shadow">
                    <div class="md:flex md:justify-between md:items-center">
                        <div>
                            <h2 class="text-xl font-bold leading-tight text-gray-800">Critical Needs</h2>
                        </div>

                        <!-- Legends -->
                        <div class="mb-4">
                            <div class="flex items-center">
                                <div class="w-2 h-2 mr-2 bg-red-600 rounded-full"></div>
                                <div class="text-sm text-gray-700">Number of Students</div>
                            </div>
                        </div>
                    </div>


                    <div class="relative my-8 line">
                        <!-- Tooltip -->
                        <template x-if="tooltipOpen == true">
                            <div x-ref="tooltipContainer"
                                class="absolute z-10 block w-auto h-auto p-0 m-0 rounded-lg shadow-lg"
                                :style="`bottom: ${tooltipY}px; left: ${tooltipX}px`">
                                <div class="p-2 bg-white rounded-lg shadow-xs">
                                    <div class="flex items-center justify-between text-sm">
                                        <div>No. of Students:</div>
                                        <div class="ml-2 font-bold">
                                            <span x-html="tooltipContent"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </template>

                        <!-- Bar Chart -->
                        <div class="flex items-end mb-2 -mx-2">
                            <template x-for="data in chartData">

                                <div class="w-1/6 px-2">
                                    <div :style="`height: ${data}px`"
                                        class="relative transition duration-200 ease-in bg-red-600 hover:bg-red-400"
                                        @mouseenter="showTooltip($event); tooltipOpen = true"
                                        @mouseleave="hideTooltip($event)">
                                        <div x-text="data"
                                            class="absolute top-0 left-0 right-0 -mt-6 text-sm text-center text-gray-800">
                                        </div>
                                    </div>
                                </div>

                            </template>
                        </div>

                        <!-- Labels -->
                        <div class="mx-auto border-t border-gray-400"
                            :style="`height: 1px; width: ${ 100 - 1/chartData.length*100 + 3}%`"></div>
                        <div class="flex items-end -mx-2">
                            <template x-for="data in labels">
                                <div class="w-1/6 px-2">
                                    <div class="relative bg-red-600">
                                        <div class="absolute top-0 left-0 right-0 h-2 mx-auto -mt-px text-center bg-gray-400"
                                            style="width: 1px"></div>
                                        <div x-text="data"
                                            class="absolute top-0 left-0 right-0 mt-3 text-sm text-center text-gray-700">
                                        </div>
                                    </div>
                                </div>
                            </template>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <script>
            function app() {
                return {
                    chartData: [30, 10, 3, 7, 8, 5],
                    labels: ['Indulging in Vices', 'Misunderstanding with Parents', 'Parents are Separated',
                        'Misunderstanding with Father', 'Misunderstanding with Mother', 'Thoughts of Suicide'
                    ],

                    tooltipContent: '',
                    tooltipOpen: false,
                    tooltipX: 0,
                    tooltipY: 0,
                    showTooltip(e) {
                        console.log(e);
                        this.tooltipContent = e.target.textContent
                        this.tooltipX = e.target.offsetLeft - e.target.clientWidth;
                        this.tooltipY = e.target.clientHeight + e.target.clientWidth;
                    },
                    hideTooltip(e) {
                        this.tooltipContent = '';
                        this.tooltipOpen = false;
                        this.tooltipX = 0;
                        this.tooltipY = 0;
                    }
                }
            }
        </script>
    </div>
</x-app-layout>
