<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Narba Login</title>
    <!-- Custom fonts for this template-->
    @vite('resources/vendor/fontawesome-free/css/all.min.css')
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    @vite('resources/css/sb-admin-2.min.css')
</head>
<body class="bg-gradient-dark">
    <div class="container relative">
        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg" style="margin-top: 100px;">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block" style="background: url('{{ asset("img/narba_login_rabbit.jpg") }}'); background-position: center; background-size: 110%;"></div>
                            <div class="col-lg-6">
                                <div class="p-5">

                                    <!-- User successfully created an account  -->
                                    @if (session()->has('message'))
                                        <x-popup type="{{ session('type') }}" message="{{session('message')}}" />
                                    @endif

                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">NARBA Login</h1>
                                    </div>

                                    <form class="user" action="{{ route('narba-auth') }}" method="post" >
                                        @csrf
                                        @method('post')
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address..." value="{{ old('email') }}" name="email" autofocus />
                                            @error('email')
                                                <small class="text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="password">
                                            @error('password')
                                                <small class="text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                        <button type="submit" class="btn btn-dark btn-user btn-block">
                                            Login
                                        </button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small d-block font-weight-bold" href="{{ route('login-page') }}" >Login as Member</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    @vite('resources/vendor/jquery/jquery.min.js')
    @vite('resources/vendor/bootstrap/js/bootstrap.bundle.min.js')
    <!-- Core plugin JavaScript-->
    @vite('resources/vendor/jquery-easing/jquery.easing.min.js')
    <!-- Custom scripts for all pages-->
    @vite('resources/js/sb-admin-2.min.js')

</body>

</html>