@extends('layouts.app')

@section('content')
<div class="container mt-5">
    @guest
        <div class="alert alert-warning text-center">
            <h4>Anda belum login</h4>
            <p>Silakan <a href="{{ route('login') }}">login</a> atau <a href="{{ route('register') }}">register</a> untuk mengakses dashboard.</p>
        </div>
    @else
        <div class="alert alert-success text-center">
            <h4>Selamat datang, <strong>{{ Auth::user()->name }}</strong>!</h4>
            <p>Email: <strong>{{ Auth::user()->email }}</strong></p>
            <p>Ini adalah dashboard setelah login.</p>
        </div>
    @endguest
</div>
@endsection
