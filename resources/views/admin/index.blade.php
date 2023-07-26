<x-main-layout>

    <div class="content-fluid content-top-gap">

        <section class="forms">
            <!-- forms 1 -->
            <div class="card card_border py-2 mb-4">
                <div class="cards__heading">
                    <h3>Manage Reviewers</h3>
                </div>
                <div class="ml-3">
                    <a href="{{ route('admin.create') }}" class="btn btn-primary">Add Reviewer</a>
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="myTable">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Username</th>
                                <th scope="col">Email</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($reviewers as $reviewer)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $reviewer->username }}</td>
                                    <td>{{ $reviewer->email }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <div>
                                                <a href="{{ route('admin.edit', $reviewer->id) }}">
                                                    <button class="btn btn-success">edit</button>
                                                </a>
                                            </div>
                                            <div class="px-2">
                                                <form method="post" action="{{ route('admin.destroy', $reviewer->id) }}"
                                                    onsubmit="return confirm('Are you sure you want to delete reviewer?') && event.stopImmediatePropagation()">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-danger">delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
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
