<div>
    <div
        class="flex flex-col items-center justify-center w-auto h-auto mx-6 mt-20 overflow-y-auto bg-white rounded-lg shadow-lg md:mx-24 md:mt-32 bg-opacity-80">
        <div class="flex items-center justify-end w-full p-4">
            <a href="{{ route('needs.index') }}"
                class="p-2 text-sm font-bold tracking-wider text-gray-900 bg-yellow-200 border border-black rounded-md focus:bg-yellow-400 hover:bg-yellow-100 hover:text-gray-900 focus:outline-none">View
                Critical Graph</a>
        </div>
        <div class="w-full ">
            <h1 class="p-2 text-4xl font-bold text-center text-gray-900 ">Needs Analysis
                Result</h1>

            <div class="block h-5/6 md:flex">
                <div class="w-full p-4 mb-6 overflow-y-auto h-1/2 md:w-1/4 lg:p-8 max-h-96">
                    <div class="grid grid-cols-1 gap-3">
                        @foreach ($needsAnalyses as $needsAnalysis)
                            {{-- red flags --}}
                            @if ($needsAnalysis->category_id == 1)
                                <button wire:click.prevent="updateNeeds({{ $needsAnalysis->id }})"
                                    class="w-full p-1 -mt-2 text-sm font-bold text-gray-900 bg-red-400 border border-black rounded-md focus:bg-red-300 hover:bg-red-200 hover:text-gray-900 focus:outline-none">
                                    {{ $needsAnalysis->question }}
                                </button>
                            @elseif ($needsAnalysis->category_id == 2)
                                <button wire:click.prevent="updateNeeds({{ $needsAnalysis->id }})"
                                    class="w-full p-1 -mt-2 text-sm font-bold text-gray-900 bg-blue-400 border border-black rounded-md focus:bg-blue-300 hover:bg-blue-200 hover:text-gray-900 focus:outline-none">
                                    {{ $needsAnalysis->question }}
                                </button>
                            @elseif ($needsAnalysis->category_id == 3)
                                <button wire:click.prevent="updateNeeds({{ $needsAnalysis->id }})"
                                    class="w-full p-1 -mt-2 text-sm font-bold text-gray-900 bg-green-400 border border-black rounded-md focus:bg-green-300 hover:bg-green-200 hover:text-gray-900 focus:outline-none">
                                    {{ $needsAnalysis->question }}
                                </button>
                            @else
                                <button wire:click.prevent="updateNeeds({{ $needsAnalysis->id }})"
                                    class="w-full p-1 -mt-2 text-sm font-bold text-gray-900 bg-yellow-200 border border-black rounded-md focus:bg-yellow-400 hover:bg-yellow-100 hover:text-gray-900 focus:outline-none">
                                    {{ $needsAnalysis->question }}
                                </button>
                            @endif
                        @endforeach
                    </div>
                </div>

                <div class="w-full p-4 overflow-y-auto h-1/2 md:w-4/5 lg:p-8 max-h-96">
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
