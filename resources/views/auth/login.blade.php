<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
        <div class= "grid grid-cols-2 flex flex-row space-x-2 py-4 text-center">
            <a href="{{route('login') }}" class="bg-white border border-green-500 px-2 text-gray-900">LOG-IN</a>
            <a href="{{route('register') }}" class="bg-green-500 border border-white px-2 text-white">REGISTER</a>
        </div>
        <form method="POST" action="{{ route('login') }}">
            @csrf

        <div class="border border-green-600 px-6 pb-44 pt-6 rounded-lg">
            <div class="py-2 text-center">
                <x-jet-label for="email" value="{{ __('USERNAME') }}" />
                <x-jet-input id="email" class="py-2 ring ring-green-500 bg-green-100 w-full rounded" type="email" name="email" :value="old('email')" required autofocus />
            </div>
            
            <div class="py-2 text-center">
                <x-jet-label for="password" value="{{ __('PASSWORD') }}" />
                <x-jet-input id="password" class="py-2 ring ring-green-500 bg-green-100 w-full rounded" type="password" name="password" required autocomplete="current-password" />
            </div>
            <div class="flex items-center justify-end mt-4">
                <x-jet-button class="py-2 ring ring-green-500 bg-green-100 w-full rounded text-gray-900">
                    {{ __('LOGIN') }}
                </x-jet-button>
            </div>

        </div>


        </form>
    </x-jet-authentication-card>
</x-guest-layout>
