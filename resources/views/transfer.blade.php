@extends('layout.index')

@section('content')
    <h1 class="app-page-title">{{ $title }}</h1>


    <div class="row g-4">
        <div class="col-12 col-md-6">
            <div class="app-card app-card-basic d-flex flex-column align-items-start shadow-sm">
                <div class="app-card-header p-3 border-bottom-0">
                    <div class="row align-items-center gx-3">
                        <div class="col-auto">
                            <div class="app-icon-holder icon-holder-mono">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-arrow-left-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1 11.5a.5.5 0 0 0 .5.5h11.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 11H1.5a.5.5 0 0 0-.5.5m14-7a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H14.5a.5.5 0 0 1 .5.5" />
                                </svg>
                            </div><!--//icon-holder-->

                        </div><!--//col-->
                        <div class="col-auto">
                            <h4 class="app-card-title">Make a transfer</h4>
                        </div><!--//col-->
                    </div><!--//row-->
                </div><!--//app-card-header-->

                <div class="app-card-body px-4">

                    <form action="transfer.create" method="post">
                        <div class="form-group">
                            <label for="transfer_item">Transfer Item</label>
                            <select name="transfer_item" id="transfer_item" class="form-select">
                                <option value="" selected disabled>Select Item</option>
                                <option value=""></option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="transfer_quantity">Transfer Quantity</label>
                            <input type="number" name="transfer_quantity" id="transfer_quantity" class="form-control">
                        </div>

                    </form>
                </div><!--//app-card-body-->

                <div class="app-card-footer p-4 mt-auto">
                    <a class="btn app-btn-info" href="#">Start Live Chat</a>
                </div><!--//app-card-footer-->
            </div><!--//app-card-->
        </div><!--//col-->
    </div><!--//row-->
@endsection
