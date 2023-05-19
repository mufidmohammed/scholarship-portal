<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Education') }}
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <x-success-message></x-success-message>
            <x-validation-errors></x-validation-errors>
            <div class="flex">
                <div class="flex-none w-64 bg-slate-400">
                    @include('partials.sidebar-menu')
                </div>
                <div class="flex-1 py-4">
                    <form class="w-full" method="post">
                        @csrf
                        <div class="flex flex-wrap mx-3 mb-6">
                            <div class="w-full md:w-1/2 px-3">
                                <x-input-label for="level" :value="__('Level')"></x-input-label>
                                <x-text-select name="level" wire:model="level"
                                    class="block mt-1 p-2 w-full border border-indigo-600">
                                    <option value=""></option>
                                    <option value="JHS">JHS</option>
                                    <option value="SHS">SHS</option>
                                    <option value="Tertiary">Tertiary</option>
                                </x-text-select>
                            </div>
                            <div class="w-full md:w-1/2 px-3">
                                <x-input-label for="name_of_school" :value="__('Name of school')"></x-input-label>
                                <x-text-input name="name_of_school" wire:model="name_of_school"
                                    class="block mt-1 p-2 w-full border border-indigo-600">
                                </x-text-input>
                            </div>
                        </div>
                        <div class="flex flex-wrap mx-3 mb-6">
                            <div class="w-full md:w-1/2 px-3">
                                <x-input-label for="date_started" :value="__('Date started')"></x-input-label>
                                <x-text-input name="date_started" type="date" wire:model="date_started"
                                    class="block mt-1 p-2 w-full border border-indigo-600">
                                </x-text-input>
                            </div>
                            <div class="w-full md:w-1/2 px-3">
                                <x-input-label for="date_completed" :value="__('Date completed')"></x-input-label>
                                <x-text-input name="date_completed" type="date" wire:model="date_completed"
                                    class="block mt-1 p-2 w-full border border-indigo-600">
                                </x-text-input>
                            </div>
                        </div>
                        <div class="flex flex-wrap mx-3 mb-6">
                            <div class="w-full md:w-1/2 px-3">
                                <x-input-label for="position_held" :value="__('Position held')"></x-input-label>
                                <x-text-input name="position_held" wire:model="position_held"
                                    class="block mt-1 p-2 w-full border border-indigo-600">
                                </x-text-input>
                            </div>
                        </div>
                        <div class="flex justify-between mx-6">
                            <x-primary-button wire:click.prevent="add">Add</x-primary-button>
                            <x-primary-button wire:click.prevent="next">Next</x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
