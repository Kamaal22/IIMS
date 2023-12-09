@extends('layout.index')

@section('content')
    <div class="container mt-4">
        <h1 class="app-page-title">{{ $title }}</h1>

        <div class="row mt-3">
            <div class="col-md-6">
                <h2>{{ $item->name }} Details</h2>

                <ul>
                    <li><strong>Name:</strong> {{ $item->name }}</li>
                    <li><strong>Model:</strong> {{ $item->model }}</li>
                    <li><strong>Brand:</strong> {{ $item->brand }}</li>
                </ul>

                <a href="{{ url('items.edit', $item->id) }}" class="btn app-btn-primary">Edit Item</a>

                <!-- Print Button -->
                <button class="btn btn-secondary" onclick="printItemDetails()">Print</button>
            </div>
        </div>
    </div>
@endsection
<script>
    function printItemDetails() {
        var printWindow = window.open('', 'PRINT', 'height=400,width=600');
        printWindow.document.write('<html><head><title>{{ $title }}</title>');
        printWindow.document.write('<style>');
        // Include the provided CSS styles here
        printWindow.document.write(`
            /* reset */
            ...

            @media print {
                ...
            }

            @page {
                ...
            }
        `);
        printWindow.document.write('</style></head><body>');
        printWindow.document.write('<header>');
        printWindow.document.write('<h1>Invoice</h1>');
        printWindow.document.write('<address contenteditable>');
        printWindow.document.write('<p>Jonathan Neal</p>');
        printWindow.document.write('<p>101 E. Chapman Ave<br>Orange, CA 92866</p>');
        printWindow.document.write('<p>(800) 555-1234</p>');
        printWindow.document.write('</address>');
        printWindow.document.write(
            '<span><img alt="" src="http://www.jonathantneal.com/examples/invoice/logo.png"><input type="file" accept="image/*"></span>'
            );
        printWindow.document.write('</header>');
        // Add your item details here
        printWindow.document.write('<article>');
        printWindow.document.write('<h1>Recipient</h1>');
        // Add more contenteditable sections as needed
        printWindow.document.write('<address contenteditable>');
        printWindow.document.write('<p>Some Company<br>c/o Some Guy</p>');
        printWindow.document.write('</address>');
        // Add your tables and additional content here
        printWindow.document.write('</article>');
        // Add other sections (e.g., aside) as needed
        printWindow.document.write('<aside>');
        printWindow.document.write('<h1><span contenteditable>Additional Notes</span></h1>');
        printWindow.document.write('<div contenteditable>');
        printWindow.document.write('<p>A finance charge of 1.5% will be made on unpaid balances after 30 days.</p>');
        printWindow.document.write('</div>');
        printWindow.document.write('</aside>');
        printWindow.document.write('</body></html>');
        printWindow.document.close();
        printWindow.print();
    }
</script>
