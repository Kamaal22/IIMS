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


        <div class="row mt-5">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
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
                    @php
                        $n = 1;
                    @endphp
                    @foreach ($items as $item)
                        <tr>
                            <td class="text-truncate" style="max-width: 150px;">{{ $n }}</td>
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
                            <td style="width: 10px; height: 10px;">
                                <div class="btn-group" role="group" aria-label="Item Actions">
                                    <a href="items.edit/{{ $item->id }}"
                                        class="btn p-2 justify-content-center app-edit-primary" title="Edit Item"><i
                                            class="bi bi-pencil-square  p-0 m-0"></i></a>
                                    <a href="items.show/{{ $item->id }}"
                                        class="btn p-1 justify-content-center app-view-primary"
                                        title="View Item in Detail"><i class="bi bi-eye p-0 m-0"></i></a>
                                    <a class="btn p-1 app-delete-danger" title="Delete Item" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal"><i class="bi bi-trash p-0 m-0"></i></a>
                                </div>
                            </td>
                        </tr>
                        @php
                            $n = $n + 1;
                        @endphp
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
