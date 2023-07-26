<div class="content-fluid content-top-gap">
    <x-success-message></x-success-message>
    <x-validation-errors></x-validation-errors>
    <div class="card">
        <div class="card-body">
            <h5 class="text-dark font-weight-bold">Education History</h5>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="level">Level <span class="text-danger">*</span> :</label>
                        <select class="form-control select2" style="width: 100%;" value="{{ $level }}"
                            wire:model="level">
                            <option value=""></option>
                            <option value="JHS">JHS</option>
                            <option value="SHS">SHS</option>
                            <option value="Tertiary">Tertiary</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name_of_school">Name of school <span class="text-danger">*</span> :</label>
                        <input type="text" class="form-control" id="name_of_school" value="{{ $name_of_school }}"
                            wire:model="name_of_school">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="date_started">Date started <span class="text-danger">*</span> :</label>
                        <input type="date" class="form-control" id="date_started" value=" {{ $date_started }}"
                            wire:model="date_started">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="date_completed">Date completed <span class="text-danger">*</span> :</label>
                        <input type="date" class="form-control" id="date_completed" value="{{ $date_completed }}"
                            wire:model="date_completed">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="position_held">Position held <span class="text-danger">*</span> :</label>
                        <input type="text" class="form-control" id="position_held" value="{{ $position_held }}"
                            wire:model="position_held">
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
                    <div>Education History</div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Level</th>
                                <th scope="col">Name of school</th>
                                <th scope="col">Position held</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($education as $edu)
                                <tr>
                                    <td>{{ $edu->level }}</td>
                                    <td>{{ $edu->name_of_school }}</td>
                                    <td>{{ $edu->position_held }}</td>
                                    <td>
                                        <button class="btn btn-danger"
                                            onclick="return confirm('Are you sure you want to delete this education history?') || event.stopImmediatePropagation();"
                                            wire:click="destroy({{ $edu->id }})">
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
