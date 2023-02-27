@extends('layouts.main-layout')

@section('title')
    Admin | Owners
@endsection

@section('content')
    <div class="d-flex align-items-center justify-content-between mb-3">
        <h4>Owners</h4>
        <a href="#" class="btn btn-sm btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="fa-solid fa-plus"></i>
        </a>
    </div>
    <table id="table" class="table stripes primary-header">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Plan</th>
                <th>Users</th>
                <th>Plan Expire Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($owners as $owner)
                <tr>
                    <td>{{ $owner->id }}</td>
                    <td>{{ $owner->name }}</td>
                    <td>{{ $owner->email }}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <button class="btn btn-sm btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-action="edit">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </button>
                        <button class="btn btn-sm btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('admin.owner.store') }}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-3">
                                <label for="password_confirmation" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" id="password_confirmation"
                                    name="password_confirmation" required>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('inner-scripts')
    <script type="module">
        $('#table').DataTable({
            "language": {
                "paginate": {
                    "previous": "Prev"
                }
            }
        });
    </script>
@endsection
