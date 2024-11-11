<x-guest-layout>
    <form method="POST" action="{{ route('register') }}"
        enctype="multipart/form-data">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>


        <div class="mt-4">
            <x-input-label for="phone" :value="__('Phone')" />
            <x-text-input id="email" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </div>

        <!-- nagtita details -->

        <div class="mt-4">
            <x-input-label for="nagrita_number" :value="__('Nagtira Number')" />
            <x-text-input id="nagrita_number" class="block mt-1 w-full" type="text" name="nagrita_number" :value="old('nagrita_number')" required  />
            <x-input-error :messages="$errors->get('nagrita_number')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="nagrita_front" :value="__('Nagita Front')" />
            <x-text-input id="nagrita_front" class="block mt-1 w-full" type="file" name="nagrita_front" :value="old('nagrita_front')" required  />
            <x-input-error :messages="$errors->get('nagrita_front')" class="mt-2" />
        </div>

        

        <div class="mt-4">
            <x-input-label for="nagrita_back" :value="__('Nagrita Back')" />
            <x-text-input id="nagrita_back" class="block mt-1 w-full" type="file" name="nagrita_back" :value="old('nagrita_back')" required  />
            <x-input-error :messages="$errors->get('nagrita_back')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
