<div>
    <div class="h-full p-20 mx-32 mt-20 bg-white border border-gray-200 rounded-lg bg-opacity-90">
        <h1 class="p-2 text-4xl font-bold text-center text-gray-900">Needs Analysis Result</h1>
        <div class="block border-b-2 md:flex">
            <div class="w-full p-4 bg-white rounded-md shadow-md md:w-full sm:p-6 lg:p-8">
                <div class="grid grid-cols-1 gap-5 md:grid-cols-3">
                    @foreach ($needsAnalyses as $needsAnalysis)
                        <button
                            class="px-5 py-2 -mt-2 text-sm font-bold text-white bg-yellow-600 rounded-full w-44 hover:bg-white hover:text-gray-900">
                            {{ $needsAnalysis->question }}
                        </button>
                    @endforeach
                </div>

            </div>
            <div class="w-full p-8 bg-white rounded-md shadow-md md:w-4/5 lg:ml-4">
                <div class="p-6 rounded shadow">
                    <div class="pb-6">
                        <h1 class="block pb-1 font-semibold text-gray-700">List of Students</h1>
                        <div class="flex overflow-y-auto">
                            <input disabled id="username" class="w-full px-4 py-2 rounded-r border-1" type="text"
                                value="Jane Name" />
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>
