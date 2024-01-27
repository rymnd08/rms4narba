@extends('layouts.member.layout')

@section('content')

<x-page-header header="Add rabbit" />

@if (session()->has('message'))
<x-popup :type="session('type')" message="{{ session('message') }}" />
@endif

<div class="card">
    <div class="card-body">
        <form action="{{ route('rabbit-profile.store') }}" method="POST" enctype="multipart/form-data">

            @csrf
            @method('post')

            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 " style="max-width: 992px">

                <!-- Code  -->
                <div class="col mb-3">
                    <div class="form-group">
                        <label for="rabbit_code" class="form-label">Rabbit Code <code>*</code></label>
                        <input type="text" class="form-control" id="rabbit_code" name="rabbit_code" placeholder="" value="{{old('rabbit_code')}}" autofocus>
                        @error('rabbit_code')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                </div>

                <!-- Name  -->
                <div class="col mb-3">
                    <div class="form-group">
                        <label for="rabbit_name" class="form-label">Rabbit Name</label>
                        <input type="text" class="form-control" id="rabbit_name" name="rabbit_name" placeholder="" value="{{old('rabbit_name')}}">
                        @error('rabbit_name')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                </div>

                <!-- Cage number  -->
                <div class="col mb-3">
                    <div class="form-group">
                        <label for="cage_number" class="form-label">Cage Number</label>
                        <input type="text" class="form-control" id="cage_number" name="cage_number" placeholder="" value="{{old('cage_number')}}">
                        @error('cage_number')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                </div>

                <!-- Sex  -->
                <div class="col mb-3">
                    <div class="form-group">
                        <label for="rabbit_sex">Rabbit sex <code>*</code></label>
                        <select class="form-control" id="rabbit_sex" name="sex">
                            <option value="">Select rabbit sex</option>
                            <option value="Buck" {{old('sex') === 'Buck' ?  'selected' : ''}}>Buck</option>
                            <option value="Doe" {{old('sex') === 'Doe' ?  'selected' : ''}}>Doe</option>
                        </select>
                        @error('sex')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                </div>

                <!-- Type  -->
                <div class="col mb-3">
                    <div class="form-group">
                        <label for="rabbit_type">Rabbit type <code>*</code></label>
                        <select class="form-control" id="rabbit_type" name="type_id">
                            <option value="" selected>Select rabbit type</option>
                            <option value="1" {{old('type_id') == '1' ? 'selected' : ''}}>Meat</option>
                            <option value="2" {{old('type_id') == '2' ? 'selected' : ''}}>Pet</option>
                        </select>
                        @error('type')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                </div>
                <!-- Breed  -->
                <div class="col mb-3">
                    <div class="form-group">
                        <label for="rabbit_breed">Rabbit breed <code>*</code></label>
                        <select class="form-control" id="rabbit_breed" name="breed_id">
                            <option value="">Select rabbit breed</option>
                            @foreach ($breeds as $breed)
                            <option value="{{$breed->id}}" {{old('breed_id') == $breed->id ? 'selected' : ''}}>{{ $breed->breed }}</option>
                            @endforeach
                        </select>
                        @error('breed')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                </div>

                <!-- Color  -->
                <div class="col mb-3">
                    <div class="form-group">
                        <label for="rabbit_color">Rabbit color</label>
                        <select class="form-control" id="rabbit_color" name="color">
                            <option value="">Select rabbit color</option>
                            <option value="Pink" {{old('color') === 'Pink' ? 'selected' : ''}}>Pink</option>
                            <option value="Red" {{old('color') === 'Red' ? 'selected' : ''}}>Red</option>
                        </select>
                        @error('color')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                </div>

                <div class="col mb-3">
                    <div class="form-group">
                        <label for="rabbit_birthdate">Birthdate</label>
                        <input class="form-control" type="date" id="rabbit_birthdate" name="birthdate" value="{{old('birthdate')}}">
                        @error('birthdate')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                </div>

                <!-- File input  -->
                <div class="col mb-3">
                    <div class="form-group">
                        <label for="rabbit_image">Rabbit Image</label>
                        <input type="file" class="form-control-file" id="rabbit_image" name="rabbit_image">
                        @error('rabbit_image')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                </div>

            </div>
            <!-- End first row-->

            <!-- Description  -->
            <div class="row" style="max-width: 992px">
                <div class="col-12 mb-3">
                    <div class="form-group">
                        <label for="description" class="form-label">Description (optional)</label>
                        <textarea class="form-control" id="description" name="description" rows="3">{{old('description')}}</textarea>
                        @error('description')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <button type="reset" class="btn btn-secondary"><i class="bi bi-arrow-clockwise"></i> Reset</button>
                    <button type="submit" class="btn btn-primary"><i class="bi bi-database-add"></i> Save</button>
                    <button type="button" id="add-data">Add data</button>
                </div>
            </div>

        </form>
    </div>
</div>
<!-- End card  -->

<script>
    const rabbit_code = document.querySelector('#rabbit_code')
    const rabbit_name = document.querySelector('#rabbit_name')
    const cage_number = document.querySelector('#cage_number')
    const rabbit_sex = document.querySelector('#rabbit_sex')
    const rabbit_type = document.querySelector('#rabbit_type')
    const rabbit_breed = document.querySelector('#rabbit_breed')
    const rabbit_birthdate = document.querySelector('#rabbit_birthdate')
    const description = document.querySelector('#description')
    const rabbit_color = document.querySelector('#rabbit_color')

    document.querySelector('#add-data')
        .addEventListener('click', () => {
            rabbit_code.value = 'a-123'
            rabbit_name.value = 'luna'
            rabbit_sex.value = 'Buck'
            rabbit_color.value = 'Pink'
            rabbit_type.value = 1;
            rabbit_breed.value = 1;
            rabbit_birthdate.value = '2022-01-01'
            cage_number.value = '1'
            description.innerHTML = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, doloremque optio facilis nam sint autem blanditiis a maiores debitis mollitia quam error vel impedit repudiandae iusto? Deleniti quis incidunt dolorem.';
        })
</script>

@endsection