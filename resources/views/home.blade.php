@extends('layouts.master')

@section('content')
@php
    use Carbon\Carbon;
    $regStart = Carbon::parse(config('app.registration_start'));
    $regEnd = Carbon::parse(config('app.registration_end'));
    $now = Carbon::now();
@endphp




<!-- Hero -->
@include('pages.Hero')
<!-- Stats -->
@include('pages.Stats')

<!-- Programs -->
@include('pages.Programs')

<!-- Admission Timeline -->
@include('pages.Timeline')

<!-- Testimonials -->
@include('pages.Testimonials')

<!-- Campusview -->

@include('pages.Campusview')

<!-- Latest Notices -->
@include('pages.Notices')


@endsection
