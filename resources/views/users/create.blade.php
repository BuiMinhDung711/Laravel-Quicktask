<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('User Edit') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <form action="{{ route('users.store')}}" method = "POST">
                @csrf
                @method('POST')
                <div class="mt-4">
                    <x-input-label for="first_name" :value="__('First name')" />

                    <x-text-input id="first_name" class="block w-full mt-1" type="text" name="first_name" value="" required autocomplete="first_name" />

                    <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
                </div>
                <div class="mt-4">
                    <x-input-label for="last_name" :value="__('Last name')" />

                    <x-text-input id="last_name" class="block w-full mt-1" type="text" name="last_name" value="" required autocomplete="last_name" />

                    <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
                </div>
                <div class="mt-4">
                    <x-input-label for="username" :value="__('User name')" />

                    <x-text-input id="username" class="block w-full mt-1" type="text" name="username" value="" required autocomplete="username" />

                    <x-input-error :messages="$errors->get('username')" class="mt-2" />
                </div>
                <div class="mt-4">
                    <x-input-label for="email" :value="__('Email')" />

                    <x-text-input id="email" class="block w-full mt-1" type="email" name="email" value="" required autocomplete="email" />

                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <x-primary-button class="mt-4">
                    {{ __('Create') }}
                </x-primary-button>
            </form>
        </div>
    </div>
</x-app-layout>
