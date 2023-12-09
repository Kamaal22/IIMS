@extends('layout.index')

@section('content')
    <h1 class="app-page-title row justify-content-between">
        <div class="col">{{ $title }}</div>
        <div class="col">
            <button type="button" class="btn app-btn-primary float-right" id="showCardBtn">Add New Item</button>
        </div>
    </h1>

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

        <div class="row mt-5" id="itemCard" style="display: none;">
            <div class="app-card shadow-md">

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
                                    <option value="equipment">Equipment</option>
                                    <option value="stationary">Stationary</option>
                                </select>
                            </div>
                        </div>

                        @if (old('quantity') == 1)
                            <div class="row mb-2">
                                <div class="form-group col-6">
                                    <label for="serial_number">Serial Number:</label>
                                    <input type="text" class="form-control" name="serial_number" id="serial_number">
                                </div>
                            </div>
                        @endif

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
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </div>
                            <div class="form-group col-6">
                                <label for="description">Description:</label>
                                <textarea class="form-control" name="description" id="description" style="height: 150px;"></textarea>
                            </div>
                        </div>

                        <button type="submit" class="btn app-btn-primary">&plus; Add</button>

                    </form>
                </div>
            </div>

        </div>

        <div class="row mt-5">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Model</th>
                        <th>Brand</th>
                        <th>Category</th>
                        <th>Type</th>
                        <th>Serial No.</th>
                        <th>SKU</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Quantity</th>

                        <!-- Add other table headers for your item properties -->
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($items as $item)
                        <tr>
                            <td class="text-truncate" style="max-width: 150px;">{{ $item->id }}</td>
                            <td class="text-truncate" style="max-width: 150px;">{{ $item->name }}</td>
                            <td class="text-truncate" style="max-width: 150px;">{{ $item->model }}</td>
                            <td class="text-truncate" style="max-width: 150px;">{{ $item->brand }}</td>
                            <td class="text-truncate" style="max-width: 150px;">{{ $item->category }}</td>
                            <td class="text-truncate" style="max-width: 150px;">{{ $item->type }}</td>
                            <td class="text-truncate" style="max-width: 150px;">{{ $item->serial_number }}</td>
                            <td class="text-truncate" style="max-width: 150px;">{{ $item->sku }}</td>
                            <td class="text-truncate" style="max-width: 150px;">{{ $item->description }}</td>
                            <td class="text-truncate" style="max-width: 150px;">{{ $item->price }}</td>
                            <td class="text-truncate" style="max-width: 150px;">{{ $item->quantity }}</td>
                            <!-- Add other table cells for your item properties -->
                            <td>
                                <div class="btn-group" role="group" aria-label="Item Actions">
                                    <button type="button" class="btn app-btn-info" title="Edit Item">
                                        <i class="bi bi-pencil-square" style="font-size: 1rem; height: 10px; "></i>
                                    </button>
                                    <button type="button" class="btn btn-sm app-btn-danger " style="font-size: 1rem;"
                                        title="Delete Item">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Include DataTables script if needed -->
    {{-- <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script> --}}
    {{-- <script>
        
    </script> --}}

    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-JmvZk2kU7P8hzlWgWd56DQrQBtRV2pAfbTRSYUpVdr8=" crossorigin="anonymous" defer></script> --}}
@endsection
