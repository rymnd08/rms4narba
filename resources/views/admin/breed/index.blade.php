@extends('layouts.admin.layout')

@section('content')
    <x-page-header header="Manage Breeds" />

    @if (session()->has('message'))
        <x-popup type="{{ session('type') }}" message="{{ session('message') }}" />
    @endif

    <x-table cardHeader="Breeds">

        <x-slot:cardHeader>
            <a href="{{ route('breed.create') }}" class="btn btn-primary btn-sm"><i class="bi bi-plus"></i> Add</a>
        </x-slot:cardHeader>

        <x-slot:tableHeaders>
            <th>#</th>
            <th>Breed</th>
            <th>Description</th>
            <th>Action</th>
        </x-slot:tableHeaders>

        <x-slot:tableData>
            @foreach ($breeds as $breed)
            <tr>
                <td>{{$loop->index + 1}}</td>
                <td>{{$breed->breed}}</td>
                <td>{{ $breed->description }}</td>
                <td>
                    <button type="button" class="btn btn-sm btn-info">View</button>
                    <a href="{{ route('breed.edit', ['id' => $breed->id]) }}" class="btn btn-outline-success btn-sm">Edit</a>
                    <x-delete-modal>
                        <form action="{{ route('breed.destroy', ['id' => $breed->id]) }}" method="POST" >
                            @csrf
                            @method('delete')

                            <button type="submit" class="btn btn-danger">Yes</button>
                        </form>
                    </x-delete-modal>
                </td>
            </tr>
            @endforeach
        </x-slot:tableData>

    </x-table>
@endsection