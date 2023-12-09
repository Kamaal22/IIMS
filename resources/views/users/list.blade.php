@extends('layout.index')

@section('content')
    {{-- <div class="container">
        <div>
            <h3 class="text-center">User List</h3>

            <div class="row justify-content-center">
                <table class="table-bordered">
                    <thead>
                        <tr>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div> --}}

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <div class="row justify-content-center">
                        <h4 class="card-title font-size-24 ">Users List</h4>
                        <button class="btn btn-primary float-right"> + Create User</button>
                    </div>

                    <hr>
                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>Full Name</th>
                                <th>Username</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Actions</th>
                            </tr>
                        </thead>


                        <tbody>
                            @foreach ($users as $user)
                                <tr>

                                    <td>{{ $user->fullname }}</td>
                                    <td>{{ $user->username }}</td>
                                    <td>{{ $user->phone }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->role }}</td>
                                    <td>
                                        <a href="users.edit/{{ $user->id }}" class="btn btn-info">Edit</a>
                                        <a href="users.delete/{{ $user->id }}" class="btn btn-danger">Delete</a>
                                    </td>

                                </tr>
                            @endforeach

                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
