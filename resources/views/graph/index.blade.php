    <div class="mx-auto rounded-lg bg-opacity-90 max-w-7xl">
        <div class="w-full p-10">
            <div class="flex flex-col justify-center">
                <div class="grid grid-cols-1 gap-6 md:grid-cols-3">
                    @foreach (App\Models\Department::all() as $department)
                        @if ($department->user_id == auth()->user()->id)
                            <div
                                class="flex flex-col items-center justify-between h-full p-2 bg-white border border-gray-300 rounded-lg shadow-md">
                                <span class="text-lg font-bold tracking-wide text-gray-900 uppercase">
                                    {{ $department->name }}
                                </span>
                                <span class="text-3xl font-extrabold text-gray-700">
                                    {{ App\Models\User::where('role_id', 4)->where('department_id', $department->id)->count() }}
                                </span>
                            </div>
                        @endif
                    @endforeach
                </div>

                <div class="flex flex-col justify-between md:space-x-2 md:flex-row">
                    <div x-data="app()" x-cloak class="w-full">
                        <div class="max-w-lg py-10 mx-auto">
                            <div class="p-6 bg-white rounded-lg shadow ">
                                <div class="md:flex md:justify-between md:items-center">
                                    <div>
                                        <h2 class="text-xl font-bold leading-tight text-gray-800">Personality Assessment
                                            Results
                                        </h2>
                                        <p class="mb-2 text-sm text-gray-600">Monthly Average</p>
                                    </div>

                                    <!-- Legends -->
                                    <!-- <div class="mb-4">
                                        <div class="flex items-center">
                                            <div class="w-2 h-2 mr-2 bg-blue-600 rounded-full"></div>
                                            <div class="text-sm text-gray-700">Sales</div>
                                        </div>
                                    </div> -->
                                </div>


                                <div class="relative my-8 line">
                                    <!-- Tooltip -->
                                    <template x-if="tooltipOpen == true">
                                        <div x-ref="tooltipContainer"
                                            class="absolute z-10 block h-auto p-0 m-0 rounded-lg shadow-lg"
                                            :style="`bottom: ${tooltipY}px; left: ${tooltipX}px`">
                                            <div class="p-2 bg-white rounded-lg shadow-xs">
                                                <div class="flex items-center justify-between text-sm">
                                                    <div>Sales:</div>
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
                                                    class="relative transition duration-200 ease-in bg-blue-600 hover:bg-blue-400"
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
                    <div class="flex items-center justify-center w-full h-auto">
                        <a href="{{ route('needsanalysisresult') }}"
                            class="flex items-center justify-center px-1 py-2 text-gray-900 bg-yellow-400 border border-yellow-300 rounded w-96 hover:bg-yellow-200">
                            Needs Analysis Results </a>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <script>
        function app() {
            return {
                chartData: [112, 10, 225, 134, 101, 80, 50, 100, 200],
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],

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
