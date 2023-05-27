<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Applicants') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-success-message></x-success-message>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Email
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Phone Number
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Status
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($applicants as $applicant)
                            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                <td class="px-6 py-4">
                                    {{ $applicant->personalInformation->lastname . ' ' . $applicant->personalInformation->middlename . ' ' . $applicant->personalInformation->firstname }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $applicant->personalInformation->email }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $applicant->personalInformation->phone_number }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $applicant->status }}
                                </td>
                                <td class="px-6 py-4">
                                    <a href="{{ route('review.detail', $applicant->id) }}"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">view</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5">
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
