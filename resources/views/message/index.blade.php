<x-app-layout>
    <div class="flex items-center justify-center md:px-32">
        <div class="container max-h-screen p-2 mx-auto mt-4 overflow-y-auto bg-white rounded-lg shadow-lg">
            <!-- headaer -->
            <div class="flex items-center justify-between px-5 py-5 bg-white border-b-2 ">
                <div class="text-2xl font-semibold">Messages</div>
                <div
                    class="flex items-center justify-center w-12 h-12 p-2 font-semibold text-white bg-yellow-500 rounded-full">
                    RA
                </div>
            </div>
            <!-- end header -->
            <!-- Chatting -->
            <div class="flex flex-row justify-between bg-white">
                <!-- chat list -->
                <div class="flex flex-col w-2/5 overflow-y-auto border-r-2">
                    <!-- search compt -->
                    <div class="px-2 py-4 border-b-2">
                        <input type="text" placeholder="Search Student Number"
                            class="w-full px-2 py-2 border-2 border-gray-200 rounded-2xl focus:outline-none" />
                    </div>
                    <!-- end search compt -->
                    <!-- user list -->
                    <button class="flex flex-row items-center justify-center px-2 py-4 border-b-2 ">
                        <div class="hidden w-1/4 md:block">
                            <img src="https://source.unsplash.com/_7LbC5J-jw4/600x600"
                                class="object-cover w-12 h-12 rounded-full" alt="" />
                        </div>
                        <div class="w-full text-left">
                            <div class="text-lg font-semibold">2018122718</div>
                            <span class="text-gray-500">Lorem ipsum dolor sit amet co...</span>
                        </div>
                    </button>
                    <!-- end user list -->
                </div>
                <!-- end chat list -->
                <!-- message -->
                <div class="flex flex-col justify-between w-full px-5">
                    <div class="flex flex-col p-2 mt-5 border-2 border-gray-200 rounded-lg">
                        <div class="flex justify-end mb-4">
                            <div
                                class="px-4 py-3 mr-2 text-white bg-blue-400 rounded-bl-3xl rounded-tl-3xl rounded-tr-xl">
                                This is a message
                            </div>
                            <img src="https://source.unsplash.com/vpOeXr5wmR4/600x600"
                                class="object-cover w-8 h-8 rounded-full" alt="" />
                        </div>
                        <div class="flex justify-start mb-4">
                            <img src="https://source.unsplash.com/vpOeXr5wmR4/600x600"
                                class="object-cover w-8 h-8 rounded-full" alt="" />
                            <div
                                class="max-w-xl px-4 py-3 ml-2 text-gray-800 bg-gray-200 rounded-br-3xl rounded-tr-3xl rounded-tl-xl">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat
                                at praesentium, aut ullam delectus odio error sit rem. Architecto
                                nulla doloribus laborum illo rem enim dolor odio saepe,
                                consequatur quas?
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center py-5 ">
                        <input class="w-full p-3 bg-gray-200 rounded-full focus:outline-none" type="text"
                            placeholder="type your message here..." />
                        <button class="px-4 py-2 text-blue-500">
                            Send
                        </button>
                    </div>
                </div>
                <!-- end message -->
            </div>
        </div>
    </div>
</x-app-layout>
