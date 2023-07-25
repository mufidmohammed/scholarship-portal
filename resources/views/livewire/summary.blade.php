<div class="container-fluid content-top-gap">
    <div class="card">
        <div class="card-body">
            <section>
                <h4 class="text-dark font-weight-bold">Summary</h4>
                <span class="text-danger">Summary(Review the information you provided and click on
                    the Submit Application button below to submit)</span>
                <hr>
                <h5 class="text-dark font-weight-bold">Personal Information</h5>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="firstname">First name :</label>
                            <input type="text" class="form-control"
                                value="{{ $applicant->personalInformation?->firstname }}" disabled="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="lastname">Last name :</label>
                            <input type="text" class="form-control"
                                value="{{ $applicant->personalInformation?->lastname }}" disabled="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="middlename">Other names <span class="danger">*</span> :</label>
                            <input type="text" class="form-control"
                                value="{{ $applicant->personalInformation?->middlename ?? '' }}" disabled="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label>Gender</label>
                        <input class="form-control" type="text"
                            value="{{ $applicant->personalInformation?->gender ?? '' }}" disabled="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="firstName1">Date of birth <span class="danger">*</span> :</label>
                            <input type="text" class="form-control"
                                value="{{ $applicant->personalInformation?->date_of_birth ?? '' }}" disabled="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="city">City :</label>
                            <input type="text" class="form-control"
                                value="{{ $applicant->personalInformation?->city ?? '' }}" disabled="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="phone_number">Phone number :</label>
                            <input type="text" class="form-control"
                                value="{{ $applicant->personalInformation?->phone_number ?? '' }}" disabled="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="region">Region :</label>
                            <input type="text" class="form-control"
                                value="{{ $applicant->personalInformation?->region ?? '' }}" disabled="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="financial_need">Financial need :</label>
                            <input type="text" class="form-control"
                                value="{{ $applicant->personalInformation?->financial_need ?? '' }}" disabled="">
                        </div>
                    </div>
                </div>
                <br><br><br>
                <h4 class="text-dark font-weight-bold">Guardian Details</h4>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Last name :</label>
                            <input type="text" class="form-control"
                                value="{{ $applicant->guardian?->lastname ?? '' }}" disabled="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>First name :</label>
                            <input type="text" class="form-control"
                                value="{{ $applicant->guardian?->firstname ?? '' }}" disabled="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Relationship :</label>
                            <input type="text" class="form-control"
                                value="{{ $applicant->guardian?->relationship ?? '' }}" disabled="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Occupation :</label>
                            <input type="text" class="form-control"
                                value="{{ $applicant->guardian?->occupation ?? '' }}" disabled="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Phone number :</label>
                            <input type="text" class="form-control"
                                value="{{ $applicant->guardian?->phone_number ?? '' }}" disabled="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Address :</label>
                            <input type="text" class="form-control"
                                value="{{ $applicant->guardian?->address ?? '' }}" disabled="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Email :</label>
                            <input type="text" class="form-control"
                                value="{{ $applicant->guardian?->email ?? '' }}" disabled="">
                        </div>
                    </div>
                </div>
                <!-- Education History -->
                <br><br><br>
                <h4 class="text-dark font-weight-bold">Education History</h4>
                <hr>
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead>
                            <tr>
                                <th></th>
                                <th scope="col">Level</th>
                                <th scope="col">Name of Institution</th>
                                <th scope="col">Position held</th>
                                <th scope="col">Date started</th>
                                <th scope="col">Date completed</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($applicant->education()->get() as $education)
                                <tr>
                                    <td></td>
                                    <td>{{ $education->level }}</td>
                                    <td>{{ $education->name_of_school }}</td>
                                    <td>{{ $education->position_held }}</td>
                                    <td>{{ $education->date_started }}</td>
                                    <td>{{ $education->date_completed }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Exam History -->
                <br><br><br>
                <h4 class="text-dark font-weight-bold">Exams History</h4>
                <hr>
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead>
                            <tr>
                                <th></th>
                                <th scope="col">Subject</th>
                                <th scope="col">Grade</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($applicant->results()->get() as $result)
                                <tr>
                                    <td></td>
                                    <td>{{ $result->subject->name }}</td>
                                    <td>{{ $result->grade->grade }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Uploads -->
                <br><br><br>
                <h4 class="text-dark font-weight-bold">Uploads</h4>
                <hr>
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead>
                            <tr>
                                <th></th>
                                <th scope="col">File Name</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($applicant->uploads()->get() as $file)
                                <tr>
                                    <td></td>
                                    <td>{{ $file->name }}</td>
                                    <td>
                                        <a class="btn btn-primary" href="{{ Storage::url($file->file) }}"
                                            target="_blank">view</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <button class="btn btn-primary" wire:click="submit">Submit Application</button>
            </section>
        </div>
        <x-success-message></x-success-message>
    </div>
</div>
