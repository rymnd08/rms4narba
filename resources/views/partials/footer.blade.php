    <!-- vite build -->
    <!-- <script src="{{ asset('build/assets/app-c4c5988a.js') }}"></script> -->
    
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

</body>
</html>