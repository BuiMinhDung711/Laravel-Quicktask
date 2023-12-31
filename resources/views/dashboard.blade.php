<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __(Auth::user()->username) }} <br>
                    {{ __("You're logged in!") }}
                </div>
            </div>
            <div class="mt-4">
                <x-input-label for="project" :value="__('Project')" />

                <x-text-input id="project" class="block w-full mt-1"
                    type="text"
                    name="project"
                    required autocomplete="project" />

                <x-input-error :messages="$errors->get('project')" class="mt-2" />
            </div>
            <x-primary-button class="mt-4">
                {{ __('+') }}
            </x-primary-button>
        </div>
    </div>
</x-app-layout>
