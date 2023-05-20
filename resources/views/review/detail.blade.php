<x-app-layout>
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Applicant Detail') }}
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <x-success-message></x-success-message>
                <div class="text-xl   font-bold mb-4">Summary</div>
                {{--   Personal Information   --}}
                <div class="mt-6">
                    <div class="text-lg font-bold my-3">Personal Information</div>
                    <div class="grid grid-cols-3 grid-flow-row gap-3">
                        <div><span class="text-md font-semibold font-mono">Surname: </span>
                            {{ $applicant->personalInformation->lastname ?? '' }}
                        </div>
                        <div><span class="text-md font-semibold font-mono">First Name: </span>
                            {{ $applicant->personalInformation->firstname ?? '' }}
                        </div>
                        <div><span class="text-md font-semibold font-mono">Middle Name: </span>
                            {{ $applicant->personalInformation->lastname ?? '' }}
                        </div>
                        <div><span class="text-md font-semibold font-mono">Gender: </span>
                            {{ $applicant->personalInformation->gender }}
                        </div>
                        <div><span class="text-md font-semibold font-mono">Date of birth: </span>
                            {{ $applicant->personalInformation->date_of_birth ?? '' }}
                        </div>
                        <div><span class="text-md font-semibold font-mono">City </span>
                            {{ $applicant->personalInformation->city ?? '' }}
                        </div>
                        <div><span class="text-md font-semibold font-mono">Phone number </span>
                            {{ $applicant->personalInformation->phone_number ?? '' }}
                        </div>
                        <div><span class="text-md font-semibold font-mono">Home Region: </span>
                            {{ $applicant->personalInformation->region ?? '' }}
                        </div>
                        <div><span class="text-md font-semibold font-mono">Financial Need: </span>
                            {{ $applicant->personalInformation->financial_need ?? '' }}
                        </div>
                    </div>
                </div>

                {{--   Guardian Information   --}}
                <div class="mt-6">
                    <div class="text-lg font-bold">Guardian Information</div>
                    <div class="grid grid-cols-3 grid-flow-row gap-3">
                        <div><span class="text-md font-semibold font-mono">Last Name: </span>
                            {{ $applicant->guardian->lastname ?? '' }}
                        </div>
                        <div><span class="text-md font-semibold font-mono">First Name: </span>
                            {{ $applicant->guardian->firstname ?? '' }}
                        </div>
                        <div><span class="text-md font-semibold font-mono">Ralationship: </span>
                            {{ $applicant->guardian->relationship ?? '' }}
                        </div>
                        <div><span class="text-md font-semibold font-mono">Occupation: </span>
                            {{ $applicant->guardian->occupation ?? '' }}
                        </div>
                        <div><span class="text-md font-semibold font-mono">Contact: </span>
                            {{ $applicant->guardian->phone_number ?? '' }}
                        </div>
                        <div><span class="text-md font-semibold font-mono">Address: </span>
                            {{ $applicant->guardian->address ?? '' }}
                        </div>
                        <div><span class="text-md font-semibold font-mono">Email: </span>
                            {{ $applicant->guardian->email ?? '' }}
                        </div>
                    </div>
                </div>

                {{--   Educational Background   --}}
                <div class="mt-6">
                    <div class="text-lg font-bold">Educational Background</div>
                    @foreach ($applicant->education()->get() as $education)
                        <div class="mb-2">
                            <div class="grid grid-cols-3 grid-flow-row gap-1">
                                <div><span class="text-md font-semibold font-mono">School Level: </span>
                                    {{ $education->level }}
                                </div>
                                <div><span class="text-md font-semibold font-mono">School Name: </span>
                                    {{ $education->name_of_school }}
                                </div>
                                <div><span class="text-md font-semibold font-mono">Position held: </span>
                                    {{ $education->position_held }}
                                </div>
                                <div><span class="text-md font-semibold font-mono">Period From: </span>
                                    {{ $education->date_started }}
                                </div>
                                <div><span class="text-md font-semibold font-mono">Period To: </span>
                                    {{ $education->date_completed }}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                {{--   Exams History   --}}
                <div class="mt-6">
                    <div class="text-lg font-bold">Exams History</div>
                    <div class="flex flex-row">
                        <div class="basis-1/3 text-md font-semibold font-mono">Subject</div>
                        <div class="basis-1/3 text-md font-semibold font-mono">Grade</div>
                    </div>
                    @foreach ($applicant->results()->get() as $result)
                        <div class="mb-2">
                            <div class="flex flex-row">
                                <div class="basis-1/3">{{ $result->subject->name }}</div>
                                <div class="basis-1/3">{{ $result->grade->grade }}</div>
                            </div>
                        </div>
                    @endforeach
                </div>

                {{--   Uploads   --}}
                <div class="mt-6">
                    <div class="text-lg font-bold">Uploads</div>
                    <div class="flex flex-row">
                        <div class="basis-1/3 text-md font-semibold font-mono">File Name</div>
                        <div class="basis-1/3 text-md font-semibold font-mono">Action</div>
                    </div>
                    @foreach ($applicant->uploads()->get() as $file)
                        <div class="mb-2">
                            <div class="flex flex-row">
                                <div class="basis-1/3">{{ $file->name }}</div>
                                <div class="basis-1/3">
                                    <x-primary-button><a href="{{ Storage::url($file->file) }}" target="_blank">view</a></x-primary-button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>
