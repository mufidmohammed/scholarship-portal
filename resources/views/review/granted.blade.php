<x-main-layout>

    <div class="content-fluid content-top-gap">

        <section class="forms">
            <!-- forms 1 -->
            <div class="card card_border py-2 mb-4">
                <div class="cards__heading">
                    <h3>Granted Applicants</h3>
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="myTable">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone Number</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($applicants as $applicant)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $applicant->personalInformation?->firstname . ' ' . $applicant->personalInformation?->middlename . ' ' . $applicant->personalInformation?->lastname }}</td>
                                    <td>{{ $applicant->personalInformation?->email }}</td>
                                    <td>{{ $applicant->personalInformation?->phone_number }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
    <script>
        let table = new DataTable('#myTable');
    </script>
</x-main-layout>
