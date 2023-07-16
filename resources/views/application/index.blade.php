<x-application-layout>

<form action="#" class="validation-wizard vertical wizard-circle">
    <!-- Step 1 -->
    <h6>Apply</h6>
    <livewire:personal-information />
    <!-- Step 2 -->
    <h6>Parent/Guardian details</h6>
    <livewire:guardian-information />
    <!-- Step 3 -->
    <h6>Education History</h6>
    <livewire:education />

    <!-- step 6 -->
    <h6>Employment Histroy</h6>
    <livewire:employment />

    <!-- step 7 -->
    <h6>Examination Histroy</h6>
    <livewire:result />

    <!-- step 8 -->
    <h6>Upload Documents</h6>
    <livewire:upload />

    <!-- step 9 -->
    <h6>Summary</h6>
    <livewire:summary />
</form>

</x-application-layout>
