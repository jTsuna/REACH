<div class="w-screen h-screen flex flex-col justify-center items-center sm:pt-0 bg-no-repeat bg-cover" style="background-image: url({{asset('bg.png')}})">
    <div class="sticky -mt-56 bg-white w-screen pl-20 flex-shrink-0 pt-4">
        {{ $logo }}
    </div>
    <div class="bg-white h-2 w-screen mt-10 mb-6">
    </div>
    <div class="w-full sm:max-w-md mt-6 px-6 pt-4 pb-4 bg-white shadow-md overflow-hidden sm:rounded-lg ">
        {{ $slot }}
    </div>
</div>
