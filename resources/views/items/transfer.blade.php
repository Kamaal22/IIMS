{{-- @extends('layout.index') --}}

{{-- @section('content') --}}

<link id="theme-style" rel="stylesheet" href="/assets/css/portal.css">

<style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    body {
        font-size: 12px;
        font-family: 'Arial', sans-serif;
        margin: auto;
        padding: 10mm 10mm;
        size: A4;
        color: #000;
    }

    h1 {
        text-align: center;
        margin-bottom: 20px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }

    table,
    th,
    td {
        border: 1px solid #000;
    }

    th,
    td {
        /* padding: 10px; */
        /* text-align: left;
        word-break: break-all; */
        width: auto;
        height: auto;
    }

    .signatures {
        display: flex;
        justify-content: space-between;
        margin-top: 30px;
    }

    .signature-line {
        width: 80%;
        border-top: 1px solid #000;
        margin-top: 10px;
    }

    .col {
        padding: 10px;
    }

    .row {
        margin: 0;
        padding: 0;
    }

    .print-btn {
        display: block;
        margin: 20px auto;
        padding: 10px;
        background-color: #4CAF50;
        color: #fff;
        text-align: center;
        text-decoration: none;
        cursor: pointer;
    }

    @media print {
        body {
            visibility: visible;
            size: A4;
        }

        .print {
            visibility: visible;
            position: absolute;
            left: 0;
            top: 0;
        }

        .no-print {
            display: none;
        }
    }
</style>

<div class="col w-100 h-100 m-0 p-0">
    <div class="row">
        <h1>Transfer Invoice</h1>
        <table>
            <thead>
                <tr style="text-align: center;">
                    <th>#</th>
                    <th>Item Name</th>
                    <th>Brand</th>
                    <th>Model</th>
                    <th>S/N</th>
                    <th>Quantity</th>
                    <th>From Location</th>
                    <th>To Location</th>
                </tr>
            </thead>
            <tbody>
                <!-- Sample data, replace with actual data from your application -->
                <tr style="padding-inline: 10px;">
                    <td>1</td>
                    <td>Item 1</td>
                    <td>Brand A</td>
                    <td>Model X</td>
                    <td>S12345</td>
                    <td>5</td>
                    <td>Warehouse A</td>
                    <td>Store B</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Item 2</td>
                    <td>Brand B</td>
                    <td>Model Y</td>
                    <td>S67890</td>
                    <td>3</td>
                    <td>Store B</td>
                    <td>Employee C</td>
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>

        <div class="row
        m-0">
            <div class="col">
                <table style=" width: auto;">
                    <thead>
                        <tr>
                            <th>
                                <h6>Transferer's Signature</h6>
                            </th>
                        </tr>
                        <tr>
                            <th style="border: 0px;">
                                <small>Name: Maxamed Axmed Faarax</small>
                            </th>
                        </tr>
                        <tr>
                            <th style="border: 0px;">
                                <small>Title: Madax-Laamed | SHIBIS</small>
                            </th>
                        </tr>
                        <tr>
                            <th style="border: 0px;">
                                <small>Signature: _________________</small>
                            </th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="col">
                <table>
                    <thead>
                        <tr>
                            <th>
                                <h6>Transferer's Signature</h6>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <small>Name: Kamaal</small>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <small>Title: *** | HEAD OFFICE</small>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <small>Signature: _________________</small>
                            </th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
        <div class="row">
            {{-- Purpose of tranfer should be here --}}
            <strong for="purpose">Purpose:</strong>
            <p>The Reason Why these items were transferred is....</p>
        </div>
    </div>
</div>

<button class="print-btn no-print btn app-btn-primary" onclick="window.print()">Print</button>
{{-- @endsection --}}
