@extends('layouts.member.layout')

@section('content')

<x-page-header header="Create new user" />

<div class="card o-hidden border-0 shadow-lg" style="max-width: 500px;">
    <div class="card-body p-0 text-center">
        <!-- Nested Row within Card Body -->
        <div class="row">
            <div class="col">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Account info</h1>
                    </div>
                    <form class="user" method="post" action="{{ route('user.store') }}">
                        @csrf
                        @method('post')

                        <div class="form-group">
                            <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror " id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address..." name="email" value="{{ old('email') }}" />
                            @error('email')
                            <small class="text-danger float-left">{{$message}}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-control form-control-user @error('password') is-invalid @enderror" id="exampleInputPassword" placeholder="Password" name="password" />
                            @error('password')
                            <small class="text-danger float-left">{{$message}}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-control form-control-user" id="exampleInputPassword2" placeholder="Password" name="password_confirmation" />
                            @error('password_confirmation')
                            <small class="text-danger float-left">{{$message}}</small>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary btn-user btn-block">Create account</button>
                    </form>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection