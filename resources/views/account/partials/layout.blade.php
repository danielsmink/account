@extends('rapidez::layouts.app')

@section('title', 'Account')

@section('content')
    <div class="container mx-auto">
        @include('rapidez::account.partials.menu')
        <h1 class="font-bold text-4xl my-3">@yield('title')</h1>
        @yield('account-content')
    </div>
@endsection
