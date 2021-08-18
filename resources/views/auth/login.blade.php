<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 text-sm font-medium text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email"
                    class="block w-full p-2 mt-1 border-2 border-yellow-400 appearance-none rounded-xl" type="email"
                    name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password"
                    class="block w-full p-2 mt-1 border-2 border-yellow-400 appearance-none rounded-xl" type="password"
                    name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="block mt-4">
                @if (Route::has('password.request'))
                    <div class="w-full text-left">
                        <a class="text-sm text-gray-600 underline hover:text-gray-900"
                            href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    </div>
                @endif
            </div>

            <div class="flex items-center justify-center mt-4">


                <x-jet-button>
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
