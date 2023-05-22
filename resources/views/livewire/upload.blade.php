<x-slot name="header">
    <div class="flex justify-between">
        <div>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Uploads') }}
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
                <div class="flex-1 py-8 px-6">
                    <div class="py-4 px-2">
                        <p class="text-sm font-bold">Upload all relevant documents including:</p>
                        <ul>
                            <li class="text-sm px-2 text-slate-500">Signed copy of application letter</li>
                            <li class="text-sm px-2 text-slate-500"">SHS certificate</li>
                            <li class="text-sm px-2 text-slate-500">Testimonial</li>
                        </ul>
                    </div>

                    <form method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="grid md:grid-rows-2 gap-6">

                            <x-validation-errors></x-validation-errors>

                            <div class="grid md:grid-cols-2 gap-6">
                                <div>
                                    <x-input-label class="block" for="file">
                                        <span class="sr-only">Choose file to upload</span>
                                        <x-text-input wire:model="file" id="file"
                                            class="block w-full text-sm text-slate-500
                                        file:mr-4 file:py-2 file:px-4
                                        file:rounded-full file:border-0
                                        file:text-sm file:font-semibold
                                        file:bg-violet-50 file:text-violet-700
                                        hover:file:bg-violet-100"
                                            type="file" name="file" accept=".pdf,.docx"></x-text-input>

                                        <div wire:loading wire:target="file"
                                            class="inline-block h-8 w-8 mt-4 animate-spin rounded-full border-4 border-solid border-current border-r-transparent align-[-0.125em] text-primary motion-reduce:animate-[spin_1.5s_linear_infinite]"
                                            role="status">
                                            <span class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Loading...</span>
                                        </div>
                                        <x-validation-error field="file"></x-validation-error>
                                    </x-input-label>
                                </div>
                            </div>

                            <div class="flex justify-between">
                                <x-primary-button wire:click.prevent="add">Add</x-primary-button>
                                <x-primary-button wire:click.prevent="next">Next</x-primary-button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">

                <h1 class="text-center p-4 font-bold text-xl">Files uploaded</h1>

                @forelse ($uploads as $file)
                    <div class="flex items-center justify-between bg-gray-100 rounded-lg shadow-md px-4 py-2 my-2">
                        <div class="flex items-center">
                            <span class="text-gray-500 mr-2">
                                <i class="fas fa-file-alt text-3xl"></i>
                            </span>
                            <a class="px-4 text-blue-800 font-medium underline" href="{{ Storage::url($file->file) }}"
                                target="_blank">{{ $file->name }}</a>
                        </div>
                        <button wire:click.prevent="remove({{ $file->id }})"
                            class="px-4 py-2 border border-red-500 hover:bg-red-500 rounded-lg text-red-500 text-xl hover:text-white focus:outline-none">
                            <i class="fas fa-times"></i>
                            delete
                        </button>
                    </div>
                @empty
                    <div class="text-center text-gray-400">No file uploaded</div>
                @endforelse

            </div>
        </div>
    </div>
</div>

