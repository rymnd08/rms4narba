@include('partials.header')
@include('partials.wrapper')

<x-page-header>
    Add Rabbit
</x-page-header>

<form action="{{ route('rabbit-profile.store') }}" method="POST" enctype="multipart/form-data">

    @csrf
    @method('post')
    
    @if (session('status'))
        <div class="alert {{session('alert')}} alert-dismissible fade show" role="alert">
            {{session('status')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
        
    <div class="card">
        <div class="card-body">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 "  style="max-width: 992px">

                <!-- Code  -->
                <div class="col mb-3">
                    <div class="form-group">
                        <label for="rabbit_code" class="form-label">Rabbit Code <code>*</code></label>
                        <input type="text" class="form-control" id="rabbit_code" name="rabbit_code" placeholder=""  autofocus>
                        @error('rabbit_code')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                </div> 

                <!-- Name  -->
                <div class="col mb-3">
                    <div class="form-group">
                        <label for="rabbit_name" class="form-label">Rabbit Name</label>
                        <input type="text" class="form-control" id="rabbit_name" name="rabbit_name" placeholder="">
                        @error('rabbit_name')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                </div>

                <!-- Cage number  -->
                <div class="col mb-3">
                    <div class="form-group">
                        <label for="cage_number" class="form-label">Cage Number</label>
                        <input type="text" class="form-control" id="cage_number" name="cage_number" placeholder="">
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
                            <option value="" selected>Select rabbit sex</option>
                            <option value="Buck">Buck</option>
                            <option value="Doe">Doe</option>
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
                        <select class="form-control" id="rabbit_type" name="type">
                            <option value="" selected>Select rabbit type</option>
                            <option value="Meat">Meat</option>
                            <option value="Pet">Pet</option>
                        </select>
                        @error('type')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                </div>
                
                @php
                    $rabbitBreeds = [
                        "American",
                        "Angora",
                        "Belgian Hare",
                        "Beveren",
                        "Californian",
                        "Chinchilla",
                        "Dutch",
                        "English Angora",
                        "Flemish Giant",
                        "French Lop",
                        "Harlequin",
                        "Himalayan",
                        "Holland Lop",
                        "Jersey Wooly",
                        "Lionhead",
                        "Mini Lop",
                        "Mini Rex",
                        "Netherland Dwarf",
                        "New Zealand",
                        "Polish",
                        "Rex",
                        "Satin",
                        "Silver Fox",
                        "Tan",
                        "Thrianta"
                      ]
                @endphp

                <!-- Breed  -->
                <div class="col mb-3">
                    <div class="form-group">
                        <label for="rabbit_breed">Rabbit breed <code>*</code></label>
                        <select class="form-control" id="rabbit_breed" name="breed">
                            <option value="" selected>Select rabbit breed</option>
                            @foreach ($rabbitBreeds as $breed)
                                <option value="{{ $breed }}">{{ $breed }}</option>
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
                            <option value="" selected>Select rabbit color</option>
                            <option value="Pink">Pink</option>
                            <option value="Red">Red</option>
                        </select>
                        @error('color')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                </div>
                
                <div class="col mb-3" >
                    <div class="form-group">
                        <label for="rabbit_birthdate">Birthdate</label>
                        <input class="form-control" type="date" id="rabbit_birthdate" name="birthdate">
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
                        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                        @error('description')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                </div>
                <div class="col">
                    <button type="reset" class="btn btn-secondary"><i class="bi bi-arrow-clockwise"></i> Reset</button>
                    <button type="submit" class="btn btn-primary"><i class="bi bi-database-add"></i> Save</button>
                </div>
            </div>

        </div>
    </div>
</form>

@include('partials.endwrapper')
@include('partials.footer')