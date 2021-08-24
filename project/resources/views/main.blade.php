@extends('default.app')

@push('styles-css')
    <link rel="stylesheet" href="{{ asset('assets/css/testimonials.css') }}">
@endpush

@section('content')
@include('components.serviceproducts')
@include('components.testimonial')
@endsection