<x-slot name="header">
    <div class="flex justify-between">
        <div>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Result') }}
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
                                <x-input-label for="examType" :value="__('Type of Examination')"></x-input-label>
                                <x-text-select name="exam_type" wire:model="exam_type"
                                    class="block mt-1 p-2 w-full border border-indigo-600">
                                    <option value=""></option>
                                    <option value="WASSCE">WASSCE</option>
                                    <option value="NOVDEC">NOVDEC</option>
                                </x-text-input>
                            </div>
                            <div class="w-full md:w-1/2 px-3">
                                <x-input-label for="subject_type" :value="__('Subject Type')"></x-input-label>
                                <x-text-select name="subject_type" wire:model="subject_type"
                                    class="block mt-1 p-2 w-full border border-indigo-600">
                                    <option value=""></option>
                                    <option value="CORE">CORE</option>
                                    <option value="ELECTIVE">ELECTIVE</option>
                                </x-text-select>
                            </div>
                        </div>
                        <div class="flex flex-wrap mx-3 mb-6">
                            <div class="w-full md:w-1/2 px-3">
                                <x-input-label for="subjectId" :value="__('Subject')"></x-input-label>
                                <x-text-select name="subject_id" wire:model="subject_id"
                                    class="block mt-1 p-2 w-full border border-indigo-600">
                                    <option value=""></option>
                                    @foreach($subjects as $subject)
                                        <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                                    @endforeach
                                </x-text-select>
                            </div>
                            <div class="w-full md:w-1/2 px-3">
                                <x-input-label for="gradeId" :value="__('Grade')"></x-input-label>
                                <x-text-select name="grade_id" wire:model="grade_id"
                                    class="block mt-1 p-2 w-full border border-indigo-600">
                                    <option value=""></option>
                                    @foreach($grades as $grade)
                                        <option value="{{ $grade->id }}">{{ $grade->grade }}</option>
                                    @endforeach
                                </x-text-select>
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
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex flex-col">
                        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="overflow-hidden">
                                    <table class="w-full">
                                        <thead class="bg-white border-b">
                                        <tr>

                                            <th scope="col"
                                                class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                Subject Type
                                            </th>
                                            <th scope="col"
                                                class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                Subject
                                            </th>
                                            <th scope="col"
                                                class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                Grade
                                            </th>
                                            <th scope="col"
                                                class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                Actions
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @forelse($results as $result)
                                            <tr class="bg-gray-100 border-b">

                                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                    {{ $result->subject->type }}
                                                </td>
                                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                    {{ $result->subject->name }}
                                                </td>
                                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                    {{ $result->grade->grade }}
                                                </td>

                                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">

                                                    <button
                                                        onclick="return confirm('Are you sure you want to delete this result history?') || event.stopImmediatePropagation();"
                                                        wire:click="destroy({{ $result->id }})"
                                                        class="hover:bg-red-600 rounded-lg hover:text-white text-red-600 font-semibold border border-red-300 px-4 py-2">
                                                        Delete
                                                    </button>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr class="text-center">
                                                <td colspan="6">
                                                    <p>No records found</p>
                                                </td>
                                            </tr>
                                        @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

