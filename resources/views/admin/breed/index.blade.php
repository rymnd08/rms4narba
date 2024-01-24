@extends('layouts.admin.layout')

@section('content')
    <x-page-header header="Manage Breeds" />

    @if (session()->has('message'))
        <x-popup type="{{ session('type') }}" message="{{ session('message') }}" />
    @endif

    <x-table>

        <x-slot:card_header>
            <a href="{{ route('breed.create') }}" class="btn btn-primary btn-sm"><i class="bi bi-plus"></i> Add</a>
        </x-slot:card_header>

        <x-slot:table_header>
            <th>#</th>
            <th>Breed</th>
            <th>Description</th>
            <th>Action</th>
        </x-slot:table_header>
            @foreach ($breeds as $breed)
                <tr>
                    <td>{{$loop->index + 1}}</td>
                    <td>{{$breed->breed}}</td>
                    <td>{{ $breed->description }}</td>
                    <td>
                        <div class="d-flex flex-nowrap" style="gap: .25rem;">
                            <a href="{{ route('breed.edit', ['id' => $breed->id]) }}" class="btn btn-outline-success btn-sm"> <x-icon.edit /> </a>
                            <form action="{{ route('breed.destroy', ['id' => $breed->id]) }}" method="POST" class="delete-form">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-outline-danger btn-sm"><x-icon.delete /></button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
    </x-table>

@endsection