<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>rms4narba</title>

    <!-- Custom fonts for this template-->
    @vite('resources/vendor/fontawesome-free/css/all.min.css')
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- Custom styles for this template-->
    @vite('resources/css/sb-admin-2.min.css')
    <!-- table css  -->
    @vite('resources/vendor/datatables/dataTables.bootstrap4.min.css')
    @vite('resources/css/app.css')
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        @include('partials.admin.sidebar')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                    <!-- top bar  -->
                    @include('partials.admin.topbar')

                    <!-- Begin Page Content -->
                    <div class="container-fluid">
                        @yield('content')
                    </div>
                    <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    @include('partials.shared.delete-script')
    <!-- Bootstrap core JavaScript -->
    @vite('resources/vendor/jquery/jquery.min.js')
    @vite('resources/vendor/bootstrap/js/bootstrap.bundle.min.js')
    <!-- Core plugin JavaScript-->
    @vite('resources/vendor/jquery-easing/jquery.easing.min.js')
    <!-- Custom scripts for all pages-->
    @vite('resources/js/sb-admin-2.min.js')
    <!-- Page level plugins -->
    @vite('resources/vendor/datatables/jquery.dataTables.min.js')
    @vite('resources/vendor/datatables/dataTables.bootstrap4.min.js')
    <!-- Page level custom scripts -->
    @vite('resources/js/demo/datatables-demo.js')
    <!-- chart resources  -->
    @vite('resources/vendor/chart.js/Chart.min.js')
    @vite('resources/js/demo/chart-area-demo.js')
    @vite('resources/js/demo/chart-pie-demo.js')
    @vite('resources/js/demo/chart-bar-demo.js')
    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>