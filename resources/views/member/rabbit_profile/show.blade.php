@extends('layouts.member.layout')

@section('content')

<x-page-header header="View Rabbit" />

@if (session()->has('type'))
<x-popup type="{{ session('type') }}" message="{{ session('message') }}" />
@endif


    <div class="card ">
        <div class="card-header">
            <ul class="nav nav-pills" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Info</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Rabbit Image</a>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                </div>
                <div class="tab-pane fade p-4" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="d-flex justify-content-start">
                        <div class="d-flex justify-content-center align-items-center flex-column" style="gap: 1rem;">
                            <img class="rounded-pill" src="{{ $rabbit->image ? asset("storage/rabbit_image/$rabbit->image") : asset("img/rabbit_default.jpg") }}" alt="Rabbit Image" width=250 height=250 style="object-fit: cover" />
                            <x-update-image-modal>
                                <form method="POST" action="{{ route("rabbit-profile.updateImage", ["id" => $rabbit->id, "img" => $rabbit->image]) }}" enctype="multipart/form-data">
                                    @csrf
                                    @method('put')

                                    <div class="d-flex justify-content-center align-items-center flex-column" style="gap: 1rem">
                                        <div class="rp-img-container rounded-pill border">
                                            <img src="{{ $rabbit->image ? asset("storage/rabbit_image/$rabbit->image") : asset("img/rabbit_default.jpg") }}" alt="" id="img">
                                        </div>
                                        <div class="d-flex align-items-center" style="gap: .25rem">
                                            <input type="file" id="imgInput" onchange="previewFile()" class="form-control-file" name="photo">
                                            <button type="submit" class="btn btn-success">Apply</button>
                                        </div>
                                    </div>
                                </form>
                            </x-update-image-modal>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @php
        $data = asset("storage/rabbit_image/$rabbit->image");

    @endphp

    <script>
        // const img = document.querySelector('#img')
        const preview = document.querySelector("#img");
            preview.style.objectFit = 'cover';
            preview.style.height = '100%';
            preview.style.width = '100%';

        function previewFile() {
            const imgContainer = document.querySelector('.rp-img-container')
            const file = document.querySelector("input[type=file]").files[0];
            const reader = new FileReader();
            imgContainer.innerHTML = '';
            reader.addEventListener(
                "load",
                () => {
                    // convert image file to base64 string
                    const img = document.createElement('img')
                    img.src = reader.result;
                    img.style.objectFit =  'cover';
                    img.style.width = '100%';
                    img.style.height = '100%';
                    imgContainer.append(img)

                },
                false,
            );

            if (file) {
                reader.readAsDataURL(file);
                
            }
        }
    </script>

@endsection