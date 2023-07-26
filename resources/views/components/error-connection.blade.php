@if (session('error_message'))
    <div class="alert flex flex-row items-center bg-red-200 p-5 rounded border-b-2 border-red-300 py-5 mb-4">
        <div class="alert-content ml-4">
            <div class="alert-title font-semibold text-lg text-red-800">
                {{ __('No internet access') }}
            </div>
        </div>
    </div>
@endif
