<div class="grid grid-cols-1 gap-2 md:my-20 md:gap-6 md:grid-cols-4">
    <a href="{{ route('list') }}"
        class="flex flex-col items-center justify-center py-6 space-y-6 transition rounded-lg shadow-lg hover:animate-bounce duration-400 hover:bg-gray-200 bg-opacity-90">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-20 h-20 text-red-500 md:w-32 md:h-32" fill="none"
            viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
        </svg>
        <span class="text-xl font-bold tracking-widest text-gray-900">Take Assessments</span>
    </a>
    <a href="{{ route('message') }}"
        class="flex flex-col items-center justify-center py-6 space-y-6 transition rounded-lg shadow-lg hover:animate-bounce delay-400 hover:bg-gray-200 bg-opacity-90">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-20 h-20 text-red-500 md:w-32 md:h-32" fill="none"
            viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
        </svg>
        <span class="text-xl font-bold tracking-widest text-gray-900">Message Counselor</span>
    </a>
    <a href="{{ route('users.show', auth()->user()->id) }}"
        class="flex flex-col items-center justify-center py-6 space-y-6 transition rounded-lg shadow-lg hover:animate-bounce delay-400 hover:bg-gray-200 bg-opacity-90">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-20 h-20 text-red-500 md:w-32 md:h-32" fill="none"
            viewBox="0 0 24 24" stroke="currentColor">
            <path d="M12 14l9-5-9-5-9 5 9 5z" />
            <path
                d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
        </svg>
        <span class="text-xl font-bold tracking-widest text-gray-900">Student Profile</span>
    </a>
    <a href="{{ route('calendar') }}"
        class="flex flex-col items-center justify-center py-6 space-y-6 transition rounded-lg shadow-lg hover:animate-bounce delay-400 hover:bg-gray-200 bg-opacity-90">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-20 h-20 text-red-500 md:w-32 md:h-32" fill="none"
            viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
        </svg>
        <span class="text-xl font-bold tracking-widest text-gray-900">Request Counseling</span>
    </a>
</div>
