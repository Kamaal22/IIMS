@include('layout.navbar')

<!-- ========== Left Sidebar Start ========== -->

<!-- Left Sidebar End -->



<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->

<div class="app-wrapper">

    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">



            @yield('content')


        </div><!--//container-fluid-->
    </div><!--//app-content-->


    @include('layout.footer')
