@extends('layouts.admin.layout')

@section('content')
    <x-page-header header="Manage Admins"  />
    <x-table>
        <x-slot:table_header>
            <th>#</th>
            <th>Email</th>
            <th>Access</th>
            <th>a</th>
            <th>Created at</th>
            <th>Updated at</th>
            <th>Actions</th>
        </x-slot:table_header>
        @foreach ($admins as $admin)
            <tr>
                <td>{{ $loop->index + 1 }}</td>
                <td>{{ $admin->email }}</td>
                <td>{{ optional($admin->userType)->user_type ?? 'Not specified' }}</td>
                <td>{{ $admin->userType->user_type ?? kape }}</td>
                <td>{{ $admin->created_at->format('F j, Y g:ia') }}</td>
                <td>{{ $admin->updated_at->format('F j, Y g:ia') }}</td>
                <td>
                    <div class="d-flex flex-nowrap" style="gap: .25rem">
                        <a href="{{ route('narba-admin.edit', ['admin' => $admin->id]) }}" class="btn btn-sm btn-outline-success"><x-icon.edit /></a>
                        <form action="{{ route('narba-admin.destroy', ['admin' => $admin->id ]) }}" class="delete-form">
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