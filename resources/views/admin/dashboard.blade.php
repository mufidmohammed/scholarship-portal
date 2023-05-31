<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Total Users Card -->
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <h3 class="text-lg font-semibold mb-4">Total Users</h3>
                    <p class="text-gray-600">{{ $users }}</p>
                </div>
                <!-- Number of Reviewers -->
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <h3 class="text-lg font-semibold mb-4">Number of Reviewers</h3>
                    <p class="text-gray-600">{{ $reviewers }}</p>
                </div>
                <!-- Total Profit Card -->
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <h3 class="text-lg font-semibold mb-4">Number of Applicants</h3>
                    <p class="text-gray-600">{{ $applicants }}</p>
                </div>
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <h3 class="text-lg font-semibold mb-4">Number of pending applicants</h3>
                    <p class="text-gray-600">{{ $pending }}</p>
                </div>
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <h3 class="text-lg font-semibold mb-4">Granted</h3>
                    <p class="text-gray-600">{{ $granted }}</p>
                </div>
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <h3 class="text-lg font-semibold mb-4">Dismissed</h3>
                    <p class="text-gray-600">{{ $dismissed }}</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
