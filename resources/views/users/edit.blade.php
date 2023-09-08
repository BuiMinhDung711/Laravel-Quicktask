<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('User Edit') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <form action="{{ route('users.update' ,['user' => $user->id]) }}" method = "POST">
                @csrf
                @method('PUT')
                <div class="mt-4">
                    <x-input-label for="username" :value="__('User name')" />

                    <x-text-input id="username" class="block w-full mt-1" type="text" name="username" value="{{ $user->username }}" required autocomplete="username" />

                    <x-input-error :messages="$errors->get('username')" class="mt-2" />
                </div>
                <x-primary-button class="mt-4">
                    {{ __('Edit') }}
                </x-primary-button>
            </form>
        </div>
    </div>
</x-app-layout>
