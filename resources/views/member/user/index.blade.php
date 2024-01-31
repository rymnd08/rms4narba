@extends('layouts.member.layout')

@section('content')

    <x-page-header header="Manage Users" />

    @if (session()->has('message'))
        <x-popup  type="{{ session('type') }}" message="{{ session('message') }}" />
    @endif

    <x-table>
        <x-slot:card_header>
            <a href="{{ route('user.create') }}" class="btn btn-sm btn-primary"><x-icon.plus/>Add</a>
        </x-slot:card_header>

        <x-slot:table_header>
            <th>#</th>
            <th>Email</th>
            <th>Created at</th>
            <th>Updated at</th>
            <th>Action</th>
        </x-slot:table_header>

        @foreach ($users as $user)
            <tr>
                <td>{{ $loop->index + 1 }}</td>
                <td> {{ $user->email }}</td>
                <td>{{ $user->created_at }}</td>
                <td>{{ $user->updated_at }}</td>
                <td>
                    <div class="d-flex flex-nowrap" style="gap: .25rem">
                        <a href="{{ route('user.edit', ['id' => $user->id]) }}" class="btn btn-sm btn-outline-success"><x-icon.edit /></a>
                        <form action="{{ route('user.destroy', ['id' => $user->id]) }}" class="delete-form" method="POST">
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
