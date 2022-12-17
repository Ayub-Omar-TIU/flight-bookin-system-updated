@extends('layouts.app')
@if (!is_null(Auth::user()->userType) && Auth::user()->userType == 'admin')
    @include('listofOrdersForAdmin')
@else
    @include('listofOrdersForCustomer')
@endif

@vite(['resources/sass/app.scss', 'resources/js/app.js'])

@section('content')
    @if (!is_null(Auth::user()->userType) && Auth::user()->userType == 'admin')
        @yield('admin')
    @else
        @yield('customer')
    @endif
@endsection
