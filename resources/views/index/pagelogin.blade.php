<x-guest-layout>
<div class="relative bg-green-500 h-screen w-screen flex flex-col bg-cover bg-no-repeat" style="background-image: url({{asset ('bg.png')}});">
        <div class="flex flex-col bg-white h-24 w-screen">
            <div class="flex flex-row items-center justify-start mx-32">
                <img src= "{{asset('logo.png')}}" class="h-20 w-auto">
            </div>

            <div class="border-b-4 border-white mt-12"></div>

            <div class="flex flex-col justify-center items-center">
                <div class="bg-white h-96 w-80 my-20 rounded-xl">
                    <div class="flex flex-col justify-center items-center mx-4">
                        <div class="flex flex-row space-x-2 py-4">
                            <div>
                                <button class="bg-white border border-green-500 px-2 text-gray-900">LOG-IN</button>
                            </div>
                            <div>
                                <button class="bg-green-500 border border-white px-2 text-white">REGISTER</button>
                            </div>
                        </div>
                        <div class="border-2 border-green-500 w-full h-full flex justify-center items-center rounded">
                            <div class="flex flex-col justify-center items-center pb-32">
                                <div class="py-2 text-center">
                                    <label for="email" class="text-gray-900">USERNAME</label>
                                    <input id="email" name="email" type="email" class="py-2 ring ring-green-500 bg-green-100 w-full rounded">
                                </div>
                                <div class="py-2 text-center">
                                    <label for="password" class="text-gray-900">PASSWORD</label>
                                    <input id="password" name="password" type="password" class="py-2 ring ring-green-500 bg-green-100 w-full rounded">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>