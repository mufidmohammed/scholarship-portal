<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <div>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Dashboard') }}
                </h2>
            </div>
            <div>
                @include('layouts.dropdown')
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <p class="px-6 py-2 font-bold">All Reviewers</p>
                <div class="px-4 py-2">
                    <a href="{{ route('admin.create') }}">
                        <x-primary-button class="bg-blue-500">Add</x-primary-button>
                    </a>
                </div>
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                #
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Username
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Email
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($reviewers as $reviewer)
                        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                            <td class="px-6 py-4">
                                {{ $loop->iteration }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $reviewer->username }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $reviewer->email }}
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex">
                                    <div>
                                        <a href="{{ route('admin.edit', $reviewer->id)}}">
                                            <x-primary-button class="bg-green-500">edit</x-primary-button>
                                        </a>
                                    </div>
                                    <div class="px-2">
                                        <form method="post" action="{{ route('admin.destroy', $reviewer->id) }}"
                                            onsubmit="return confirm('Are you sure you want to delete reviewer?') && event.stopImmediatePropagation()">
                                            @csrf
                                            @method('delete')
                                            <x-primary-button class="bg-red-500">delete</x-primary-button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4">
                                <p class="text-center text-sm text-slate-500">No record found</p>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
