@extends('default.app')
@push('styles-css')
    <link rel="stylesheet" href="{{ asset('assets/css/productcardview.css') }}">
@endpush


@section('content')
@include('components.filter')
@include('components.cardview')
@include('components.parametri')

@endsection
