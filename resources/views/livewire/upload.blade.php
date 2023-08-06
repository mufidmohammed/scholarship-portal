<div class="content-fluid content-top-gap">
    <x-success-message></x-success-message>
    <x-validation-errors></x-validation-errors>
    <div class="card">
        <div class="card-body">
            <h5 class="text-dark font-weight-bold">Uploads</h5>
            <div class="row">
                <div class="col-md-12">
                    <span class="text-danger text-sm">
                        *Accepted format: pdf,docx files only <br />
                        NB: Choose the appropriate document type for the file
                    </span><br>
                    <div class="py-4 px-2">
                        <p class="text-sm font-bold">Upload all relevant documents including:</p>
                        <ul>
                            <li class="text-sm px-2 text-slate-500">Signed copy of application letter</li>
                            <li class="text-sm px-2 text-slate-500">SHS certificate</li>
                            <li class="text-sm px-2 text-slate-500">Testimonial</li>
                        </ul>
                    </div>
                    <div class="row p-4">
                        <div class="input-group mb-3">
                            <input type="file" class="form-control" wire:model="file">
                        </div>
                        <div wire:loading wire:target="file">uploading...</div>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-between mb-4">
                <button class="btn btn-success" wire:click.prevent="add">Add</button>
                <button class="btn btn-secondary" wire:click.prevent="next">Next</button>
            </div>

        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div>Uploads</div>
                </div>
                <div class="card-body">
                    @forelse ($uploads as $file)
                        <div class="d-flex justify-content-between mb-2">
                            <span class="px-4 text-secondary font-medium underline">{{ $file->name }}</span>
                            <div class="d-flex px-2 py-2">
                                <a href="{{ Storage::url($file->file) }}" class="btn btn-success mr-2">view</a>
                                <button wire:click.prevent="remove({{ $file->id }})" class="mr-2 btn btn-danger">
                                    delete
                                </button>
                            </div>
                        </div>
                    @empty
                        <div class="text-center">No file uploaded</div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
