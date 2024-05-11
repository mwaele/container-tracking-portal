<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Containers') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="block mb-8">
            <x-nav-link href="{{ route('containers.create') }}" :active="request()->routeIs('containers.create')">
                <x-button>
                    {{ __('Add container') }}
                </x-button>
            </x-nav-link>
        </div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            No.
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Vessel Type
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Vessel Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Schedule
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Call Sign
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($containers as $container)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $loop->iteration }}
                            </th>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $container->vessel_type }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $container->vessel_name }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $container->schedule }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $container->call_sign }}
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                <a>
                                <form class="font-medium text-blue-600 dark:text-blue-500 hover:underline" action="{{ route('containers.destroy', ['id' => $container->id]) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-white-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white-600">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</x-app-layout>
