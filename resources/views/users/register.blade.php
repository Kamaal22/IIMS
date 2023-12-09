@extends('layout.index')

@section('content')
    <div class="row justify-content-center">

        @if (Session::has('success'))
            <div class="alert alert-success text-center">{{ Session::get('success') }}</div>
        @endif
        @if (Session::has('fail'))
            <div class="alert alert-danger">{{ Session::get('fail') }}</div>
        @endif
        <form class="mt-4" action="createuser" method="post">
            @csrf

            <div class="row">
                <div class="col-6">
                    <div class="form-group mb-3">
                        <label for="fullname">Full Name:</label>
                        <input type="text" class="form-control @error('fullname') is-invalid @enderror" name="fullname"
                            id="fullname" placeholder="Enter Your Full Name" value="{{ old('fullname') }}">

                        @error('fullname')
                            <span class="alert-danger m-0 p-0">
                                <ul>
                                    <li>{{ $message }}</li>
                                </ul>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="username">Username:</label>
                        <input type="text" class="form-control" name="username" id="username"
                            placeholder="Enter username" value="{{ old('username') }}">
                        @error('username')
                            <span class="alert-danger m-0 p-0">
                                <ul>
                                    <li>{{ $message }}</li>
                                </ul>
                            </span>
                        @enderror
                    </div>
                    <hr>
                    <div class="form-group mb-3">
                        <label for="phone">Phone Number:</label>
                        <input type="number" class="form-control" name="phone" id="phone"
                            placeholder="Enter Phone Number" value="{{ old('phone') }}">
                        @error('phone')
                            <span class="alert-danger m-0 p-0">
                                <ul>
                                    <li>{{ $message }}</li>
                                </ul>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="email">Email Address:</label>
                        <input type="text" class="form-control" name="email" id="email" placeholder="Enter Email"
                            value="{{ old('email') }}">
                        @error('email')
                            <span class="alert-danger m-0 p-0">
                                <ul>
                                    <li>{{ $message }}</li>
                                </ul>
                            </span>
                        @enderror
                    </div>

                </div>
                <div class="col-6">
                    <label for="password">Password:</label>
                    <div class="form-group mb-3">
                        <input type="password" class="form-control" name="password" id="password"
                            placeholder="Enter password" value="{{ old('password') }}">
                        @error('password')
                            <span class="alert-danger m-0 p-0">
                                <ul>
                                    <li>{{ $message }}</li>
                                </ul>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="confirmpassword">Confirm Password:</label>
                        <input type="password" class="form-control" name="confirmpassword" id="confirmpassword"
                            placeholder="Confirm password" value="{{ old('confirmpassword') }}">
                        @error('confirmpassword')
                            <span class="alert-danger m-0 p-0">
                                <ul>
                                    <li>{{ $message }}</li>
                                </ul>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="role">Role:</label>
                        <select name="role" class="form-select" id="role" value="{{ old('role') }}">
                            <option value="" selected disabled>Select Role</option>
                            <option value="admin">Admin</option>
                            <option value="manager">Manager</option>
                            <option value="employee">Employee</option>
                            <option value="customer">Customer</option>
                        </select>
                        @error('role')
                            <span class="alert-danger m-0 p-0">
                                <ul>
                                    <li>{{ $message }}</li>
                                </ul>
                            </span>
                        @enderror
                    </div>
                </div>

            </div>



            <div class="row justtify-content-center">

                <div class="col-12">
                    <button class="btn btn-success rounded-3" style="width: 100%;" type="submit">Create
                        user</button>
                </div>
            </div>



        </form>

    </div>
@endsection
