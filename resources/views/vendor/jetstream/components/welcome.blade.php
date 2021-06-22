<div class="p-6 bg-white sm:px-20">
    <div class="w-full">
        @if (auth()->user()->role_id == 1)
            @livewire('user-table')
        @elseif(auth()->user()->role_id ==3)
            @livewire('assessment-table')
        @else
            test2
        @endif
    </div>

</div>
