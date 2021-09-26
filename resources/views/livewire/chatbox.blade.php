<div>
    @foreach($chats as $chat)
    @if($chat->user_id == auth()->user()->id)
    <div class="col-start-1 col-end-8 p-3 rounded-lg">
        <div class="flex flex-row items-center">
        <img class="w-10 h-10 rounded-full" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
            <div class="w-full px-4 py-2 ml-3 mr-6 text-xs text-left bg-pink-100 shadow rounded-xl">
                <div>
                    <span class="text-xs font-bold">{{$chat->user->name}}: </span><br>
                    {{$chat->message}}
                </div>
                @php
                    date_default_timezone_set('Asia/Manila');
                    $timestamp = strtotime($chat->created_at . "+8hours");
                    $timestamp = date("Y/m/d H:i:s",$timestamp);
                @endphp
                <div class="bottom-0 left-0 text-xs text-gray-500">
                    <small>Sent {{$timestamp}}</small>
                </div>
            </div>
        </div>
    </div>
    @else
    <div class="col-start-6 col-end-13 p-3 rounded-lg">
        <div class="flex flex-row-reverse items-center justify-start">
            <img class="w-10 h-10 rounded-full" src="{{ $chat->user->profile_photo_url }}" alt="{{ $chat->user->name }}" />
            <div class="w-full px-4 py-2 ml-6 mr-3 text-xs text-right bg-indigo-100 shadow rounded-xl">
                <div>
                    <span class="font-bold">{{$chat->user->name}}: </span><br>
                    {{$chat->message}}
                </div>
                @php
                    date_default_timezone_set('Asia/Manila');
                    $timestamp = strtotime($chat->created_at . "+8hours");
                    $timestamp = date("Y/m/d H:i:s",$timestamp);
                @endphp
                <div class="bottom-0 right-0 text-xs text-gray-500">
                    <small>Sent {{$timestamp}}</small>
                </div>
            </div>
        </div>
    </div>
    @endif
@endforeach
<script>
    document.getElementById('chat-body').scrollIntoView(false);
    Livewire.emit('chat:update');
</script>
</div>
