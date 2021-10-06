<x-app-layout>
    <div class="flex items-center justify-center md:px-32">
        <div class="container max-h-screen p-2 mx-auto mt-4 overflow-y-auto bg-white rounded-lg shadow-lg">
            <!-- headaer -->
            <div class="flex items-center justify-between px-5 py-5 bg-white border-b-2 ">
                <div class="text-2xl font-semibold">Live Chat</div>

                <img class="w-10 h-10 rounded-full" src="{{ Auth::user()->profile_photo_url }}"
                    alt="{{ Auth::user()->name }}" />

            </div>
            <!-- end header -->
            <!-- Chatting -->
            <div class="flex flex-row justify-between bg-white">
                <!-- message -->
                <div class="flex flex-col justify-between w-full px-5">
                    <div class="p-6 border-t border-gray-200 md:border-t-0 md:border-l">
                        <div
                            class="flex flex-col flex-auto w-full overflow-y-auto antialiased text-gray-800 bg-gray-300 rounded-t-lg h-96">
                            <div id="chat-body" class="flex flex-col flex-auto flex-shrink-0 p-2 my-4">

                                @livewire('chatbox')

                            </div>
                        </div>

                        @livewire('sendmessage')
                    </div>
                </div>
                <!-- end message -->
            </div>
        </div>
    </div>
</x-app-layout>
