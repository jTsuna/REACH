<div class="flex flex-col items-center justify-center w-screen h-screen bg-white bg-no-repeat bg-cover sm:pt-0"
    style="background-image: url('bg.png');">
    <div class="flex items-center">
        {{ $logo }}
    </div>
    <div class="w-full px-6 pt-4 pb-4 mt-6 overflow-hidden bg-white shadow-md bg-opacity-90 sm:max-w-md sm:rounded-lg ">
        {{ $slot }}
    </div>
</div>
