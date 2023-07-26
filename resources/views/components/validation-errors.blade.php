@if ($errors->any())
    <div class="alert alert-danger">
        <h3>Validation Error</h3>
        <ul class="list-unstyled">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
@endif
