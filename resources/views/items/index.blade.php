@extends('layout.index')

@section('content')
    <h4 class="app-page-title">{{ $title }}</h4>

    {{-- DataTable --}}
    <div class="container mt-4">

        {{-- <div class="row justify-content-center mt-5 w-100"> --}}
        @if (Session::has('success'))
            <div aria-live="polite" aria-atomic="true" style="position: relative; min-height: 200px;">
                <div class="toast" style="position: absolute; top: 0; right: 0;">
                    <div class="toast-header">
                        {{-- <img src="..." class="rounded mr-2" alt="..."> --}}
                        <strong class="mr-auto">Item Creation</strong>
                        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="toast-body">
                        <div class="alert alert-success text-center rounded-0 w-100">{{ Session::get('success') }}</div>
                    </div>
                </div>
            </div>
        @endif
        @if (Session::has('fail'))
            <div class="alert alert-danger text-center rounded-0 w-100">{{ Session::get('fail') }}</div>
        @endif
        {{-- </div> --}}

        <div class="row">
            <div class="app-card shadow-md mb-5">

                <div class="app-card-header p-3">

                    <h4 class="app-card-title">Create New Item</h4>
                </div>
                <div class="app-card-body p-3">
                    <form action="new.item" method="post">
                        @csrf
                        <div class="row mb-2">
                            <div class="form-group col-6">
                                <label for="name">Item Name:</label>
                                <input type="text" class="form-control" name="name" id="name">
                            </div>
                            <div class="form-group col-6">
                                <label for="category">Model:</label>
                                <input type="text" class="form-control" name="model" id="model">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="form-group col-6">
                                <label for="name">Item Brand:</label>
                                <input type="text" class="form-control" name="brand" id="brand">
                            </div>
                            <div class="form-group col-6">
                                <label for="category">Category:</label>
                                <select name="category" id="category" required class="form-select">
                                    <option value="" selected disabled>Select Category</option>

                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        {{-- @if (old('quantity') == 1) --}}
                        <div class="row mb-2">
                            <div class="form-group col-6">
                                <label for="serial_number">Serial Number:</label>
                                <input type="text" class="form-control" name="serial_number" id="serial_number">
                            </div>
                            <div class="form-group col-6">
                                <label for="location">Location:</label>
                                <input type="text" class="form-control" name="location" id="location">
                            </div>
                        </div>
                        {{-- @endif --}}

                        <div class="row mb-2">
                            <div class="form-group col-6">
                                <label for="quantity">Quantity:</label>
                                <input type="number" min="0" max="10000" class="form-control" name="quantity"
                                    id="quantity">
                            </div>
                            <div class="form-group col-6">
                                <label for="price">Price:</label>
                                <input type="number" min="0.00" max="10000.00" step="0.01" class="form-control"
                                    name="price" id="price">
                            </div>
                        </div>

                        <div class="row mb-2">

                            <div class="form-group col-6">
                                <label for="status">Status:</label>
                                <select name="status" id="status" required class="form-select">
                                    <option value="" selected disabled>Select Status</option>
                                    <option value="0">New</option>
                                    <option value="1">Old</option>
                                    <option value="2">Used</option>
                                    <option value="3">In-use</option>
                                </select>
                            </div>
                            <div class="form-group col-6">
                                <label for="description">Description:</label>
                                <textarea class="form-control" name="description" id="description" style="height: 150px;"></textarea>
                            </div>
                        </div>


                </div>
                <div class="card-footer p-3 app-bg-secondary">

                    <button type="submit" class="btn app-btn-primary w-100">&plus; Add</button>
                </div>

                </form>
            </div>

        </div>
    @endsection
