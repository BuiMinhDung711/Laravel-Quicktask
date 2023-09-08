<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('User list') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __('User list') }}
                </div>
            </div>
            <x-primary-button class="mt-4">
                {{__('Create new user')}}
            </x-primary-button>
            <table class="table">
                <thead>
                    <tr>
                        <th class="text-gray-900 dark:text-gray-100" scope="col">#</th>
                        <th class="text-gray-900 dark:text-gray-100" scope="col">{{__('Name')}}</th>
                        <th class="text-gray-900 dark:text-gray-100" scope="col">{{__('User name')}}</th>
                        <th class="text-gray-900 dark:text-gray-100" scope="col">{{__('Action')}}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $index => $user)
                    <tr>
                        <th class="text-center text-gray-900 dark:text-gray-100" scope="row">{{ $index }}</th>
                        <th class="text-center text-gray-900 dark:text-gray-100">{{ $user->fullname }}</th>
                        <th class="text-center text-gray-900 dark:text-gray-100">{{ $user->username }}</th>
                        <th class="text-center text-gray-900 dark:text-gray-100">
                            <a href="{{route('users.edit', ['user' =>  $user->id])}}">
                                <x-primary-button class="mt-4">
                                    {{__('Edit')}}
                                </x-primary-button>
                            </a>
                            <x-primary-button class="mt-4">
                                {{__('Delete')}}
                            </x-primary-button>
                            <a href="{{route('users.show', ['user' =>  $user])}}">
                            <x-primary-button class="mt-4">
                                {{__('View projects')}}
                            </x-primary-button>
                            </a>
                        </th>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
