<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add A Reviewer') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="py-4">
                    <x-validation-errors></x-validation-errors>
                    <form class="w-full" method="post" action="{{ route('admin.store') }}">
                        @csrf
                        <div class="flex flex-wrap mx-3 mb-6">
                            <div class="w-full md:w-1/2 px-3">
                                <x-input-label for="username" :value="__('Username')"></x-input-label>
                                <x-text-input name="username"
                                    class="block mt-1 p-2 w-full border border-indigo-600">
                                </x-text-input>
                            </div>
                        </div>
                        <div class="flex flex-wrap mx-3 mb-6">
                            <div class="w-full md:w-1/2 px-3">
                                <x-input-label for="email" :value="__('Email')"></x-input-label>
                                <x-text-input name="email"
                                    class="block mt-1 p-2 w-full border border-indigo-600">
                                </x-text-input>
                            </div>
                        </div>
                        <div class="flex flex-wrap mx-3 mb-6">
                            <div class="w-full md:w-1/2 px-3">
                                <x-input-label for="password" :value="__('Password')"></x-input-label>
                                <x-text-input name="password" placeholder="Default: 123456"
                                    class="block mt-1 p-2 w-full border border-indigo-600">
                                </x-text-input>
                            </div>
                        </div>
                        <div class="flex flex-wrap mx-3 mb-6 px-2 pt-2">
                            <x-primary-button>Add Reviewer</x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
