<div>
    <div
        class="flex flex-col items-center justify-center w-auto h-auto mx-6 mt-10 bg-white rounded-lg shadow-lg mb-96 md:mx-24 md:mt-10 bg-opacity-80">
        <div class="w-full h-auto">
            <h1 class="p-2 text-4xl font-bold text-center text-gray-900 ">Needs Analysis
                Result</h1>

            <div class="block h-5/6 md:flex">
                {{-- QUESTIONS --}}
                <div class="w-full p-4 mb-6 overflow-y-auto h-1/2 md:w-1/4 lg:p-8">
                    <div class="grid grid-cols-1 gap-3">
                        @foreach ($needsAnalyses as $needsAnalysis)
                            <button wire:click.prevent="updateNeeds({{ $needsAnalysis->id }})"
                                class="w-full p-1 -mt-2 text-sm font-bold text-gray-900 bg-yellow-200 border border-black rounded-md focus:bg-yellow-400 hover:bg-yellow-100 hover:text-gray-900">
                                {{ $needsAnalysis->question }}
                            </button>
                        @endforeach
                    </div>
                </div>
                {{-- STUDENT LIST --}}
                <div class="w-full p-4 overflow-y-auto h-1/2 md:w-4/5 lg:p-8">
                    <div class="md:p-6">

                        <h1 class="block pb-1 text-xl font-semibold text-gray-900">List of Students</h1>

                        <div class="grid w-full grid-cols-2 md:text-lg sm:text-sm lg:p-8">
                            @foreach ($needs as $need)
                                <div class="flex justify-center w-full p-1 border border-black">
                                    {{ $users->where('id', $need->user_id)->first()->name }}
                                </div>
                                <div class="flex justify-center w-full p-1 border border-black">
                                    {{ $users->where('id', $need->user_id)->first()->idNum }}
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
