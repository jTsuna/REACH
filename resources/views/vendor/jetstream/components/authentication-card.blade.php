<div class="w-screen h-screen flex flex-col justify-center items-center sm:pt-0 bg-no-repeat bg-cover bg-white" style="background-image: url('bg.png');">
    <div class="flex items-center">
        {{ $logo }}
    </div>
    <div class="w-full sm:max-w-md mt-6 px-6 pt-4 pb-4 bg-white shadow-md overflow-hidden sm:rounded-lg ">
        {{ $slot }}
    </div>
</div>
