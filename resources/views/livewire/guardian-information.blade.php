<div class="content-fluid content-top-gap">
    <x-validation-errors></x-validation-errors>
    <x-success-message></x-success-message>
    <div class="card">
        <div class="card-body">
            <form class="forms">
                <h5 class="text-dark font-weight-bold">Guardian Information</h5>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="firstname">First Name<span class="text-danger">*</span> :</label>
                            <input type="text" class="form-control" id="firstname" name="firstname"
                                value="{{ $firstname }}" wire:model="firstname">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="lastname">Last Name <span class="text-danger">*</span> :</label>
                            <input type="text" class="form-control" id="lastname" name="lastname"
                                value="{{ $lastname }}" wire:model="lastname">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="phone_number">Phone Number <span class="text-danger">*</span> :</label>
                            <input type="text" class="form-control" id="phone_number" name="phone_number"
                                value="{{ $phone_number }}" wire:model="phone_number">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="text" class="form-control" id="email" name="email"
                                value="{{ $email }}" wire:model="email">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="address">Address <span class="text-danger">*</span> :</label>
                            <input type="text" class="form-control" id="address" name="address"
                                value="{{ $address }}" wire:model="address">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="region">Region <span class="text-danger">*</span> :</label>
                            <input type="text" class="form-control" id="region" name="region"
                                value="{{ $region }}" wire:model="region">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="occupation">City <span class="text-danger">*</span> :</label>
                            <input type="text" class="form-control" id="city" name="city"
                                value="{{ $city }}" wire:model="city">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="relationship">Relationship with guardian <span class="text-danger">*</span>
                                :</label>
                            <input type="text" class="form-control" id="relationship" name="relationship"
                                value="{{ $relationship }}" wire:model="relationship">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="occupation">Occupation <span class="text-danger">*</span> :</label>
                            <input type="text" class="form-control" id="occupation" name="occupation"
                                value="{{ $occupation }}" wire:model="occupation">
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <button class="btn btn-success" wire:click.prevent="save">Save</button>
                    <button class="btn btn-secondary" wire:click.prevent="next">Next</button>
                </div>
            </form>
        </div>
    </div>
</div>
