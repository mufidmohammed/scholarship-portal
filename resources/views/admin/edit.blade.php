<x-main-layout>

    <div class="content-fluid content-top-gap">
        
        <section class="forms">
            <!-- forms 1 -->
            <div class="card card_border py-2 mb-4">
                <div class="cards__heading">
                    <h3>Update Reviewer</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.update', $reviewer) }}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="username" class="input__label">Username</label>
                            <input type="text" name="username" class="@error('username') is-invalid @enderror form-control input-style" id="username"
                                placeholder="Enter username" value="{{ $reviewer->username }}">
                            @error('username')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email" class="input__label">Email</label>
                            <input type="email" name="email" class="@error('email') is-invalid @enderror form-control input-style"
                                 id="email" placeholder="Enter email" value="{{ $reviewer->email }}">
                            @error('email')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password" class="input__label">Password</label>
                            <input type="text" class="@error('password') is-invalid @enderror form-control input-style" 
                                id="password" placeholder="Password">
                            @error('password')
                                <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary btn-style mt-4">Update</button>
                    </form>
                </div>
            </div>
        </section>

    </div>

</x-main-layout>
