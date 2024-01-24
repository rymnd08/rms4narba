@extends('layouts.member.layout')

@section('content')

<x-page-header header="Rabbit Profiles" />

@if (session()->has('message'))
<x-popup :type="session('type')" :message="session('message')" />
@endif

<x-table>
    <x-slot:card_header>
        <a href="{{ route('rabbit-profile.create') }}" class="btn btn-primary btn-sm add-btn"><i class="bi bi-plus-lg"></i> Add </a>
    </x-slot:card_header>
    <x-slot:table_header>
        <th>#</th>
        <th>Rabbit Code</th>
        <th>Rabbit Name</th>
        <th>Cage #</th>
        <th>Sex</th>
        <th>Image</th>
        <th>Actions</th>
    </x-slot:table_header>
        @foreach ($rabbitProfiles as $rp)
        <tr>
            <td>{{$loop->index+1}}</td>
            <td>{{ $rp->rabbit_code }}</td>
            <td>{{ $rp->rabbit_name }}</td>
            <td>{{ $rp->cage_number }}</td>
            <td>{{ $rp->sex }}</td>
            <td>
                <img class="rounded-circle border" style="object-fit: cover;" src="{{$rp->image ? asset("storage/rabbit_image/$rp->image") : asset('img/rabbit_default.jpg') }}" alt="Rabbit Profile Image" height="50" width="50">
            </td>
            <td>
                <div class="d-flex flex-nowrap" style="gap: .25rem">
                    <a href="{{ route('rabbit-profile.show', ['id' => $rp->id]) }}" class="btn btn-outline-info btn-sm"><i class="bi bi-eye"></i></a>
                    <a href="{{ route('rabbit-profile.edit', ['id' => $rp->id])}}" class="btn btn-outline-success btn-sm"><i class="bi bi-pencil"></i></a>

                    <form action="{{ route('rabbit-profile.destroy', ['id' => $rp->id, 'img' => $rp->image ]) }}" method="post" class="delete-form" >
                        @csrf
                        @method('delete')

                        <button type="submit" class="btn btn-sm btn-outline-danger"><x-icon.delete /></button>
                    </form>

                </div>
            </td>
        </tr>
        @endforeach
</x-table>
@endsection