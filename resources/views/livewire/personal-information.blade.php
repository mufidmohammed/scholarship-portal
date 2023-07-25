<div class="content-fluid content-top-gap">
    <x-validation-errors></x-validation-errors>
    <x-success-message></x-success-message>
    <div class="card">
        <div class="card-body">
            <h5 class="text-dark font-weight-bold">Personal Information</h5>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="firstname">First Name <span class="text-danger">*</span> :</label>
                        <input type="text" class="form-control" id="firstname" name="firstname"
                            wire:model="firstname">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="lastname">Last Name <span class="text-danger">*</span> :</label>
                        <input type="text" class="form-control" id="lastname" name="lastname" wire:model="lastname">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="middlename">Other Names :</label>
                        <input type="text" class="form-control" id="middlename" name="middlename"
                            wire:model="middlename">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="phone_number">Phone Number <span class="text-danger">*</span> :</label>
                        <input type="text" class="form-control" id="phone_number" name="phone_number"
                            wire:model="phone_number">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email">Email <span class="text-danger">*</span> :</label>
                        <input type="text" class="form-control" id="email" name="email" wire:model="email">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="address">Address <span class="text-danger">*</span> :</label>
                        <input type="text" class="form-control" id="address" name="address" wire:model="address">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="gender">Gender <span class="text-danger">*</span> :</label>
                        <select class="form-control select2" style="width: 100%;" wire:model="gender">
                            <option value=""></option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="date_of_birth">Date_of_birth <span class="text-danger">*</span> :</label>
                        <input type="date" class="form-control" id="date_of_birth" name="date_of_birth"
                            wire:model="date_of_birth">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="region">Region <span class="text-danger">*</span> :</label>
                        <input type="text" class="form-control" id="region" name="region" wire:model="region">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="city">City <span class="text-danger">*</span> :</label>
                        <input type="text" class="form-control" id="city" name="city" wire:model="city">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="financial_need">Financial Need <span class="text-danger">*</span> :</label>
                        <input type="text" class="form-control" id="financial_need" name="financial_need"
                            wire:model="financial_need">
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between">
                <button class="btn btn-success" wire:click.prevent="save">Save</button>
                <button class="btn btn-secondary" wire:click.prevent="next">Next</button>
            </div>
        </div>
    </div>
</div>
