<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Project list') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __('Project list') }}
                </div>
            </div>
            <x-primary-button class="mt-4">
                {{__('Create new project')}}
            </x-primary-button>
            <table class="table">
                <thead>
                    <tr>
                        <th class="text-gray-900 dark:text-gray-100" scope="col">#</th>
                        <th class="text-gray-900 dark:text-gray-100" scope="col">{{__('Name')}}</th>
                        <th class="text-gray-900 dark:text-gray-100" scope="col">{{__('Start day')}}</th>
                        <th class="text-gray-900 dark:text-gray-100" scope="col">{{__('End day')}}</th>
                        <th class="text-gray-900 dark:text-gray-100" scope="col">{{__('Note')}}</th>
                        <th class="text-gray-900 dark:text-gray-100" scope="col">{{__('Result')}}</th>
                        <th class="text-gray-900 dark:text-gray-100" scope="col">{{__('Action')}}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($projects as $index => $project)
                    <tr>
                        <th class="text-center text-gray-900 dark:text-gray-100" scope="row">{{ $index }}</th>
                        <th class="text-center text-gray-900 dark:text-gray-100">{{ $project->name }}</th>
                        <th class="text-center text-gray-900 dark:text-gray-100">{{ $project->start_day }}</th>
                        <th class="text-center text-gray-900 dark:text-gray-100">{{ $project->end_day }}</th>
                        <th class="text-center text-gray-900 dark:text-gray-100">{{ $project->note }}</th>
                        <th class="text-center text-gray-900 dark:text-gray-100">{{ $project->result }}</th>
                        <th class="text-center text-gray-900 dark:text-gray-100">
                            <x-primary-button class="mt-4">
                                {{__('Edit')}}
                            </x-primary-button>
                            <form action="{{ route('projects.destroy' ,['project' => $project->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <x-primary-button class="mt-4">
                                    {{__('Delete')}}
                                </x-primary-button>
                            </form>
                        </th>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
