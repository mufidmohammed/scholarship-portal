<section>
    <div class="row">
        <div class="col-12">
            <div class="box">
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th scope="col">Name of Institution</th>
                                    <th scope="col">Region</th>
                                    <th scope="col">District</th>
                                    <th scope="col">From</th>
                                    <th scope="col">To</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- first school -->
                                <tr>
                                    <th>1</th>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control"
                                                name="postal_address">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control"
                                                name="postal_address">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control"
                                                name="postal_address">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control"
                                                name="postal_address">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control"
                                                name="postal_address">
                                        </div>
                                    </td>
                                </tr>

                                <!-- second school -->
                                <tr>
                                    <th>2</th>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control"
                                                name="postal_address">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control"
                                                name="postal_address">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control"
                                                name="postal_address">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control"
                                                name="postal_address">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control"
                                                name="postal_address">
                                        </div>
                                    </td>
                                </tr>

                                <!-- third school -->
                                <tr>
                                    <th>3</th>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control"
                                                name="postal_address">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control"
                                                name="postal_address">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control"
                                                name="postal_address">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control"
                                                name="postal_address">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control"
                                                name="postal_address">
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>


{{-- <x-slot name="header">
    <div class="flex justify-between">
        <div>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Education') }}
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
                                                Level
                                            </th>
                                            <th scope="col"
                                                class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                Name of school
                                            </th>
                                            <th scope="col"
                                                class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                Position held
                                            </th>
                                            <th scope="col"
                                                class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                Actions
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @forelse($education as $edu)
                                            <tr class="bg-gray-100 border-b">

                                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                    {{ $edu->level }}
                                                </td>
                                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                    {{ $edu->name_of_school }}
                                                </td>
                                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                    {{ $edu->position_held }}
                                                </td>

                                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">

                                                    <button
                                                        onclick="return confirm('Are you sure you want to delete this education history?') || event.stopImmediatePropagation();"
                                                        wire:click="destroy({{ $edu->id }})"
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
</div> --}}
