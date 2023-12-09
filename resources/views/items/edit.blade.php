@extends('layout.index')

@section('content')
    <h4 class="app-page-title">{{ $title }}</h4>



    {{-- DataTable --}}
    <div class="container mt-4">

        <div class="row justify-content-center mt-5">
            <div class="col-md-8 col-lg-6 col-xl-4">

                @if (Session::has('success'))
                    <div class="alert alert-success text-center rounded-0">{{ Session::get('success') }}</div>
                @endif
                @if (Session::has('fail'))
                    <div class="alert alert-danger text-center rounded-0">{{ Session::get('fail') }}</div>
                @endif
            </div>
        </div>



        <div class="row">
            <div class="app-card shadow-md mb-5">

                <div class="app-card-header p-3">

                    <h4 class="app-card-title">Edit Item</h4>
                </div>
                <div class="app-card-body p-3">
                    <form action="new.item" method="post">
                        @csrf
                        <div class="row mb-2">
                            <div class="form-group col-6">
                                <label for="name">Item Name:</label>
                                <input type="text" class="form-control" name="name" id="name"
                                    value="{{ $item->name }}">
                            </div>
                            <div class="form-group col-6">
                                <label for="category">Model:</label>
                                <input type="text" class="form-control" name="model" id="model"
                                    value="{{ $item->model }}">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="form-group col-6">
                                <label for="name">Item Brand:</label>
                                <input type="text" class="form-control" name="brand" id="brand"
                                    value="{{ $item->brand }}">
                            </div>
                            <div class="form-group col-6">
                                <label for="category">Category:</label>
                                <select name="category" id="category" required class="form-select">
                                    <option value="" selected disabled>Select Category</option>

                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ $category->id == $item->category_id ? 'selected' : '' }}>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>

                            </div>
                        </div>

                        {{-- @if (old('quantity') == 1) --}}
                        <div class="row mb-2">
                            <div class="form-group col-6">
                                <label for="serial_number">Serial Number:</label>
                                <input type="text" class="form-control" name="serial_number" id="serial_number"
                                    value="{{ $item->serial_number }}">
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
                                    id="quantity" value="{{ $item->quantity }}">
                            </div>
                            <div class="form-group col-6">
                                <label for="price">Price:</label>
                                <input type="number" min="0.00" max="10000.00" step="0.01" class="form-control"
                                    name="price" id="price" value="{{ $item->price }}">
                            </div>
                        </div>

                        <div class="row mb-2">

                            <div class="form-group col-6">
                                <label for="status">Status:</label>
                                <select name="status" id="status" required class="form-select">
                                    <option value="" selected disabled>Select Status</option>
                                    <option value="0" {{ $item->status == 0 ? 'selected' : '' }}>New</option>
                                    <option value="1" {{ $item->status == 1 ? 'selected' : '' }}>Old</option>
                                    <option value="2" {{ $item->status == 2 ? 'selected' : '' }}>Used</option>
                                    <option value="3" {{ $item->status == 3 ? 'selected' : '' }}>In-use</option>
                                </select>

                            </div>
                            <div class="form-group col-6">
                                <label for="description">Description:</label>
                                <textarea class="form-control" name="description" id="description" style="height: 150px;" value="{{ $item->name }}"></textarea>
                            </div>
                        </div>


                </div>
                <div class="card-footer p-3 app-bg-secondary">

                    <button type="submit" class="btn app-btn-primary w-100">&plus; Add</button>
                </div>

                </form>
            </div>

        </div>


    </div>
@endsection
