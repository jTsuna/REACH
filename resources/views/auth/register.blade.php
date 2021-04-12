<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />
        <div class= "grid grid-cols-2 flex flex-row space-x-2 py-4 text-center">
            <a href="{{route('login') }}" class="bg-green-500 border border-white px-2 text-white">LOG-IN</a>
            <a href="{{route('register') }}" class="bg-white border border-green-500 px-2 text-gray-900">REGISTER</a>
        </div>

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="border border-green-600 px-6 pb-42 pt-6 rounded-lg">
            <div class="py-2 text-center">
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="py-2 ring ring-green-500 bg-green-100 w-full rounded" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class=" py-2 text-center">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="py-2 ring ring-green-500 bg-green-100 w-full rounded" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="py-2 text-center">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="py-2 ring ring-green-500 bg-green-100 w-full rounded" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="py-2 text-center">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="py-2 ring ring-green-500 bg-green-100 w-full rounded" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif


                <x-jet-button class="mt-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
         </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
