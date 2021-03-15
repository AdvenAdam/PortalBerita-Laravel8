<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>@yield('title')</title>
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('argonadmin') }}/assets/img/brand/favicon.png" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('argonadmin') }}/assets/vendor/nucleo/css/nucleo.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('argonadmin') }}/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css"
        type="text/css">
    <!-- Page plugins -->
    <link rel="stylesheet"
        href="{{ asset('argonadmin') }}/assets/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet"
        href="{{ asset('argonadmin') }}/assets/vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet"
        href="{{ asset('argonadmin') }}/assets/vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('argonadmin') }}/assets/vendor/select2/dist/css/select2.min.css">

    <!-- Argon CSS -->
    <link rel="stylesheet" href="{{ asset('argonadmin') }}/assets/css/argon.css?v=1.1.0" type="text/css">
</head>

<body>
    @include('Dashboard/navbar')
    @include('Dashboard/header')
    @yield('content')
    <!-- Footer -->
    <div class="container-fluid mt-6">
        <footer class="footer pt-0">
            <div class="row align-items-center justify-content-lg-between">
                <div class="col-lg-6">
                    <div class="copyright text-center text-lg-left text-muted">
                        &copy; 2019 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1"
                            target="_blank">Creative Tim</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About
                                Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com/license" class="nav-link" target="_blank">License</a>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>


    <!-- Argon Scripts -->
    <!-- Core -->
    <script src="{{ asset('argonadmin') }}/assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="{{ asset('argonadmin') }}/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('argonadmin') }}/assets/vendor/js-cookie/js.cookie.js"></script>
    <script src="{{ asset('argonadmin') }}/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
    <script src="{{ asset('argonadmin') }}/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
    <!-- Optional JS -->
    {{-- charts --}}
    <script src="{{ asset('argonadmin') }}/assets/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argonadmin') }}/assets/vendor/chart.js/dist/Chart.extension.js"></script>
    {{-- datatable --}}
    <script src="{{ asset('argonadmin') }}/assets/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('argonadmin') }}/assets/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    {{-- Dropzone --}}
    <script src="{{ asset('argonadmin') }}/assets/vendor/dropzone/dist/min/dropzone.min.js"></script>
    {{-- select --}}
    <script src="{{ asset('argonadmin') }}/assets/vendor/select2/dist/js/select2.min.js"></script>
    {{-- tinymce --}}
    <script src="{{ asset('argonadmin') }}/assets/vendor/tinymce/tinymce.min.js"></script>



    <!-- Argon JS -->
    <script src="{{ asset('argonadmin') }}/assets/js/argon.js?v=1.1.0"></script>
    <!-- Demo JS - remove this in your project -->
    <script src="{{ asset('argonadmin') }}/assets/js/demo.min.js"></script>
    {{-- alert  fade out --}}
    <script>
        window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function() {
            $(this).remove();
        })
    }, 3000);

    </script>
    <script>
        tinymce.init({
            selector: '#tiny1',

        });
    </script>
    <script>
        tinymce.init({
            selector: '#tiny2',

        });
    </script>
</body>

</html>