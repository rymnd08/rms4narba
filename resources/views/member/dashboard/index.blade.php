@extends('layouts.member.layout')

@section('content')
    <x-page-header header="Kape" />

    @include('partials.member.dashboard-card')

    <x-dashboard-content />
    
@endsection