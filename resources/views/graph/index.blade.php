<div class="mx-auto rounded-lg bg-opacity-90 max-w-7xl">
    <div class="w-full p-10">
        <div class="flex flex-col justify-center">
            <div class="grid grid-cols-1 gap-2 md:my-20 md:gap-6 md:grid-cols-4">
                <a href="{{ route('needsanalysisresult') }}"
                    class="flex flex-col items-center justify-center py-6 space-y-6 transition rounded-lg shadow-lg hover:animate-bounce delay-400 hover:bg-gray-200 bg-opacity-90">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-20 h-20 text-red-500 md:w-32 md:h-32" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                            d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    <span class="text-xl font-bold tracking-widest text-center text-gray-900">Needs Analysis
                        Results</span>
                </a>

                <a href="{{ route('calendar') }}"
                    class="flex flex-col items-center justify-center py-6 space-y-6 transition rounded-lg shadow-lg hover:animate-bounce delay-400 hover:bg-gray-200 bg-opacity-90">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-20 h-20 text-red-500 md:w-32 md:h-32" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    <span class="text-xl font-bold tracking-widest text-gray-900">Calendar</span>
                </a>

                <a href="{{ route('notes.index') }}"
                    class="flex flex-col items-center justify-center py-6 space-y-6 transition rounded-lg shadow-lg hover:animate-bounce delay-400 hover:bg-gray-200 bg-opacity-90">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-20 h-20 text-red-500 md:w-32 md:h-32" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                    <span class="text-xl font-bold tracking-widest text-gray-900">Student List</span>
                </a>

                <a href="{{ route('message') }}"
                    class="flex flex-col items-center justify-center py-6 space-y-6 transition rounded-lg shadow-lg hover:animate-bounce delay-400 hover:bg-gray-200 bg-opacity-90">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-20 h-20 text-red-500 md:w-32 md:h-32" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                            d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                    </svg>
                    <span class="text-xl font-bold tracking-widest text-gray-900">Messaging</span>
                </a>
            </div>
        </div>
    </div>
</div>
