@extends('layouts.admin.layout')

@section('content')

    @include('partials.admin.dashboard-card')

    <x-dashboard-content />
    
@endsection