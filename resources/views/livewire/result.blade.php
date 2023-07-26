<div class="content-fluid content-top-gap">
    <x-success-message></x-success-message>
    <x-validation-errors></x-validation-errors>
    <div class="card">
        <div class="card-body">
            <h5 class="text-dark font-weight-bold">Results</h5>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="exam_type">exam_type <span class="text-danger">*</span> :</label>
                        <select class="form-control select2" style="width: 100%;" wire:model="exam_type">
                            <option value=""></option>
                            <option value="WASSCE">WASSCE</option>
                            <option value="NOVDEC">NOVDEC</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="subject_type">subject_type <span class="text-danger">*</span> :</label>
                        <select class="form-control select2" style="width: 100%;" wire:model="subject_type">
                            <option value=""></option>
                            <option value="CORE">CORE</option>
                            <option value="ELECTIVE">ELECTIVE</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="subject_id">subject <span class="text-danger">*</span> :</label>
                        <select class="form-control select2" style="width: 100%;" wire:model="subject_id">
                            <option value=""></option>
                            @foreach ($subjects as $subject)
                                <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="grade_id">Grade <span class="text-danger">*</span> :</label>
                        <select class="form-control select2" style="width: 100%;" wire:model="grade_id">
                            <option value=""></option>
                            @foreach ($grades as $grade)
                                <option value="{{ $grade->id }}">{{ $grade->grade }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between mb-4">
                <button class="btn btn-success" wire:click.prevent="add">Add</button>
                <button class="btn btn-secondary" wire:click.prevent="next">Next</button>
            </div>

        </div>
    </div>

    <div class="row mt-5">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div>Results</div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Subject Type</th>
                                <th scope="col">Subject</th>
                                <th scope="col">Grade</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($results as $result)
                                <tr>
                                    <td>{{ $result->subject->type }}</td>
                                    <td>{{ $result->subject->name }}</td>
                                    <td>{{ $result->grade->grade }}</td>
                                    <td>
                                        <button class="btn btn-danger"
                                            onclick="return confirm('Are you sure you want to delete this education history?') || event.stopImmediatePropagation();"
                                            wire:click="destroy({{ $result->id }})">
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
