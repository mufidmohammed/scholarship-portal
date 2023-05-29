<x-slot name="header">
    <div class="flex justify-between">
        <div>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Guardian') }}
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
                                <x-input-label for="firstname" :value="__('First name')"></x-input-label>
                                <x-text-input name="firstname" wire:model="firstname"
                                    class="block mt-1 p-2 w-full border border-indigo-600">
                                </x-text-input>
                            </div>
                            <div class="w-full md:w-1/2 px-3">
                                <x-input-label for="lastname" :value="__('Last name')"></x-input-label>
                                <x-text-input name="lastname" wire:model="lastname"
                                    class="block mt-1 p-2 w-full border border-indigo-600">
                                </x-text-input>
                            </div>
                        </div>
                        <div class="flex flex-wrap mx-3 mb-6">
                            <div class="w-full md:w-1/2 px-3">
                                <x-input-label for="phone_number" :value="__('Phone number')"></x-input-label>
                                <x-text-input name="phone_number" wire:model="phone_number"
                                    class="block mt-1 p-2 w-full border border-indigo-600">
                                </x-text-input>
                            </div>
                            <div class="w-full md:w-1/2 px-3">
                                <x-input-label for="email" :value="__('Email')"></x-input-label>
                                <x-text-input name="email" wire:model="email" placeholder="Optional"
                                    class="block mt-1 p-2 w-full border border-indigo-600">
                                </x-text-input>
                            </div>
                        </div>
                        <div class="flex flex-wrap mx-3 mb-6">
                            <div class="w-full md:w-1/2 px-3">
                                <x-input-label for="address" :value="__('Address')"></x-input-label>
                                <x-text-input name="address" wire:model="address"
                                    class="block mt-1 p-2 w-full border border-indigo-600">
                                </x-text-input>
                            </div>
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <x-input-label for="city" :value="__('City')"></x-input-label>
                                <x-text-input name="city" wire:model="city"
                                    class="block mt-1 p-2 w-full border border-indigo-600">
                                </x-text-input>
                            </div>
                        </div>
                        <div class="flex flex-wrap mx-3 mb-6">
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <x-input-label for="relationship" :value="__('Relationship')"></x-input-label>
                                <x-text-select name="relationship" wire:model="relationship"
                                    class="block mt-1 p-2 w-full border border-indigo-600">
                                    <option value=""></option>
                                    <option value="Parent">Parent</option>
                                    <option value="Guardian">Guardian</option>
                                </x-text-select>
                            </div>
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <x-input-label for="occupation" :value="__('Occupation')"></x-input-label>
                                <x-text-input name="occupation" wire:model="occupation"
                                    class="block mt-1 p-2 w-full border border-indigo-600">
                                </x-text-input>
                            </div>
                        </div>
                        <div class="flex flex-wrap mx-3 mb-6">
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <x-input-label for="region" :value="__('Region')"></x-input-label>
                                <x-text-input name="region" wire:model="region"
                                    class="block mt-1 p-2 w-full border border-indigo-600">
                                </x-text-input>
                            </div>
                        </div>
                        <div class="flex justify-between mx-6">
                            <x-primary-button wire:click.prevent="save">Save</x-primary-button>
                            <x-primary-button wire:click.prevent="next">Next</x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
