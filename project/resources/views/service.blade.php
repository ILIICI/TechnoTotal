@extends('default.app')
@push('styles-css')
    <link rel="stylesheet" href="{{ asset('assets/css/sidebar.css') }}">
@endpush
@section('content')
@include('components.service')
@endsection