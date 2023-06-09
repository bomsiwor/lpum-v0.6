<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, material admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, material design, FlexileDash bootstrap 5 dashboard template" />
    <meta name="description"
        content="Flexy is powerful and clean admin dashboard template, inpired from Bootstrap Design" />
    <meta name="robots" content="noindex,nofollow" />
    <title>LPUMsite - {{ $title }} </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon.ico') }}" />

    <!-- Custom CSS -->
    <link href="{{ asset('dist/css/style.min.css') }}" rel="stylesheet" />

    {{-- MDI --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@7.1.96/css/materialdesignicons.min.css">
    {{-- FontAwesom --}}
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" /> --}}
    {{-- <script src="https://kit.fontawesome.com/21c1c2d6a2.js" crossorigin="anonymous"></script> --}}

    @stack('vendorStyle')
</head>

<body>
    @include('Template.Dashboard.preloader')
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        @include('Template.Dashboard.topbar')

        @include('Template.Dashboard.sidebar')

        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                {{-- @include('Template.Dashboard.page-title') --}}
                @yield('main')
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer">2023© Design by Wrappixel. <a href="#"> Created by Developers</a></footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->

    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{ asset('dist/js/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('dist/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script>
        // $(".preloader").fadeOut();
    </script>

    <!-- apps -->
    <script src="{{ asset('dist/js/app.min.js') }}"></script>
    <script src="{{ asset('dist/js/app.init.stylish.js') }}"></script>
    <script src="{{ asset('dist/js/app-style-switcher.js') }}"></script>

    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ asset('dist/js/perfect-scrollbar.jquery.js') }}"></script>

    <!--Wave Effects -->
    <script src="{{ asset('dist/js/waves.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('dist/js/sidebarmenu.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('dist/js/feather.min.js') }}"></script>
    <script src="{{ asset('dist/js/custom.min.js') }}"></script>



    @stack('vendorScript')
</body>

@yield('scripts')

<script>
    console.log('Hello!');
    console.log("I am sorry, some error still remains here. But it won't affect the app performance!");
    console.log("If you want to speak up about this website, just contact me on :");
    console.log("Instagram : @bomsiwor");
    $(document).keydown(function(e) {
        // Disable Ctrl+U
        if (e.ctrlKey && (e.keyCode == 85 || e.keyCode == 117)) {
            alert("Ctrl+U is disabled!");
            return false;
        }

        // Disable Ctrl+S
        if (e.ctrlKey && (e.keyCode == 83 || e.keyCode == 115)) {
            alert("Ctrl+S is disabled!");
            return false;
        }
    });
</script>

</html>
