@extends('layouts.admin.layout')

@section('content')

<x-page-header header="New breed" />

    @if (session()->has('message'))
        <x-popup type="{{ session('type') }}"   message="{{ session('message') }}" />
    @endif

<div class="card shadow mb-4">
    <div class="card-body">

        <form action="{{ route('breed.store') }}" method="POST">
            @csrf

            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3" style="max-width: 992px;">

                <div class="col mb-3">
                    <div class="form-group">
                        <label for="rabbit_code" class="form-label">Breed<code>*</code></label>
                        <input type="text" class="form-control" id="breed" name="breed" placeholder="Name of breed.." value="{{old('breed')}}" autofocus>
                        @error('breed')
                            <small class="text-danger">{{ $message }}</small>                            
                        @enderror
                    </div>
                </div>

                <div class="col mb-3">
                    <div class="form-group">
                        <label for="rabbit_type">Rabbit Type <code>*</code></label>
                        <select class="form-control" id="rabbit_type" name="rabbit_type">
                            <option value="">Select rabbit type</option>
                            @foreach ($rabbit_types as $rabbit_type )
                                <option value="{{$rabbit_type->id}}" {{ old('rabbit_type') == $rabbit_type->id ? "selected" : null }}>{{$rabbit_type->rabbit_type}}</option>
                            @endforeach
                        </select>
                        @error('rabbit_type')
                            <small class="text-danger">  {{ $message }} </small>
                        @enderror
                    </div>
                </div>
            </div>
            <!-- End first row  -->

            <div class="row" style="max-width: 992px;">
                <div class="col-12 col-md-8 mb-3">
                    <div class="form-group">
                        <label for="description" class="form-label">Description (optional)</label>
                        <textarea class="form-control" id="description" name="description" rows="3">{{old('description')}}</textarea>
                        @error('description')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                </div>
            </div>
            <!-- End 2nd row  -->

            <button type="submit" class="btn btn-primary"><i class="bi bi-database-add"></i> Add</button>
        </form>

    </div>
</div>

@endsection