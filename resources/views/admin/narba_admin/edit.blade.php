@extends('layouts.admin.layout')

@section('content')
    <x-page-header header="Manage Admins" />

    {{ $admin->email }}
@endsection