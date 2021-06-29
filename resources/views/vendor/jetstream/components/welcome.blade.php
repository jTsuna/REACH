<div class="p-6 bg-white border border-gray-200 sm:px-20">
    <div class="w-full">
        @if (auth()->user()->role_id == 1)
            @livewire('user-table')
        @elseif(auth()->user()->role_id == 2)
            @include('graph.index')
        @elseif(auth()->user()->role_id == 3)
            @include('graph.index')
        @elseif(auth()->user()->role_id == 4)
            @include('student.index')
        @endif
    </div>

</div>
