@include('partials.header')
@include('partials.member.wrapper')

<x-page-header header="Update Rabbit" />



<div class="card">
    <div class="card-body">
        <form action="{{route('rabbit-profile.update', ['id' => $rabbit->id])}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')

            @if (session()->has('message'))
            <x-popup :type="session('type')" message="{{ session('message') }}" />
            @endif
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 " style="max-width: 992px">

                <!-- Code  -->
                <div class="col mb-3">
                    <div class="form-group">
                        <label for="rabbit_code" class="form-label">Rabbit Code <code>*</code></label>
                        <input type="text" class="form-control" id="rabbit_code" name="rabbit_code" placeholder="" value="{{$rabbit->rabbit_code}}">
                        @error('rabbit_code')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                </div>

                <!-- Name  -->
                <div class="col mb-3">
                    <div class="form-group">
                        <label for="rabbit_name" class="form-label">Rabbit Name</label>
                        <input type="text" class="form-control" id="rabbit_name" name="rabbit_name" placeholder="" value="{{$rabbit->rabbit_name}}">
                        @error('rabbit_name')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                </div>

                <!-- Cage number  -->
                <div class="col mb-3">
                    <div class="form-group">
                        <label for="cage_number" class="form-label">Cage Number</label>
                        <input type="text" class="form-control" id="cage_number" name="cage_number" placeholder="" value="{{$rabbit->cage_number}}">
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
                            <option value="Buck" {{$rabbit->sex === 'Buck' ?  'selected' : ''}}>Buck</option>
                            <option value="Doe" {{$rabbit->sex === 'Doe' ?  'selected' : ''}}>Doe</option>
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
                            <option value="{{$rabbit->type_id}}" {{$rabbit->type_id == 1 ? 'selected' : ''}}>Meat</option>
                            <option value="{{$rabbit->type_id}}" {{$rabbit->type_id == 2 ? 'selected' : ''}}>Pet</option>
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
                            <option value="{{$breed->type_id}}" {{$rabbit->breed_id === $breed->id ? 'selected' : ''}}>{{ $breed->breed }}</option>
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
                            <option value="Pink" {{$rabbit->color === 'Pink' ? 'selected' : ''}}>Pink</option>
                            <option value="Red" {{$rabbit->color === 'Red' ? 'selected' : ''}}>Red</option>
                        </select>
                        @error('color')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                </div>

                <div class="col mb-3">
                    <div class="form-group">
                        <label for="rabbit_birthdate">Birthdate</label>
                        <input class="form-control" type="date" id="rabbit_birthdate" name="birthdate" value="{{$rabbit->birthdate}}">
                        @error('birthdate')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                </div>

            </div>
            <!-- End first row-->

            <!-- Description  -->
            <div class="row " style="max-width: 992px">
                <div class="col-12 mb-3">
                    <div class="form-group">
                        <label for="description" class="form-label">Description (optional)</label>
                        <textarea class="form-control" id="description" name="description" rows="3">{{$rabbit->description}}</textarea>
                        @error('description')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-primary"><i class="bi bi-database-add"></i>Update</button>
                </div>
            </div>
        </form>

    </div>
    <!-- End card-body  -->
</div>
<!-- End card  -->

@include('partials.endwrapper')
@include('partials.footer')