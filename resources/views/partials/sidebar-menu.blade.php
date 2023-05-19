<div class="px-6 py-12 text-xl text-center font-bold text-slate-900">Scholarship Application</div>
<div class="py-6">
    <ul>
        <x-sidebar-list>
            <a href="{{ route('personal') }}">Personal Information</a>
        </x-sidebar-list>
        <li class="bg-slate-900 hover:bg-slate-700 text-white px-6 py-4 mb-1 rounded w-full">
            <a href="{{ route('guardian') }}">Guardian Information</a>
        </li>
        <li class="bg-slate-900 hover:bg-slate-700 text-white px-6 py-4 mb-1 rounded w-full">
            <a href="{{ route('education') }}" class="">Education</a>
        </li>
        <li class="bg-slate-900 hover:bg-slate-700 text-white px-6 py-4 mb-1 rounded w-full">
            <a href="{{ route('result') }}" class="">Results</a>
        </li>
        <li class="bg-slate-900 hover:bg-slate-700 text-white px-6 py-4 mb-1 rounded w-full">
            <a href="" class="">Uploads</a>
        </li>
    </ul>
</div>
