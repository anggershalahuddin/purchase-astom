@extends('layouts.master')
@section('title', 'Dashboard')

@section('container')

    <section class="space-y-4">

        {{-- Hero Section --}}
        @include('dashboard.menu-dashboard.partials.hero')
        {{-- Table Section --}}
        @include('dashboard.menu-dashboard.partials.table')

    </section>





@endsection
