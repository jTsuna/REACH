<div>
    <form wire:submit.prevent="submit" method="POST">
        <div class="flex flex-row items-center w-full h-16 px-4 bg-gray-300 border-t border-white rounded-b-lg">

            <div class="flex-grow ml-4 ">
                <div class="w-full">
                    <input type="text" wire:model="message" id="message" name="message"
                        class="w-full h-10 pl-4 text-xs border rounded-xl focus:outline-none focus:border-indigo-300"
                        placeholder="Write Something..." />
                </div>
            </div>
            <div class="ml-4">
                <button type="submit"
                    class="flex items-center justify-center flex-shrink-0 px-4 py-1 text-white bg-indigo-500 hover:bg-indigo-600 rounded-xl"
                    onclick="GoScrolldown()">
                    <span>Send</span>
                    <span class="ml-2">
                        <svg class="w-4 h-4 -mt-px transform rotate-45" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                        </svg>
                    </span>
                </button>
            </div>

        </div>
    </form>
    <script>
        function GoScrolldown() {
            document.getElementById('chat-body').scrollIntoView({
                behavior: "smooth",
                block: "end",
                inline: "end"
            });

            Livewire.emit('chat:update');

            document.getElementById('chat-body').scrollIntoView(false);
        };
    </script>
</div>
