@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
    <div class="card shadow p-4" style="max-width: 400px; width: 100%;">
        <div class="text-center mb-4">
            <img src="https://cdn-icons-png.flaticon.com/512/561/561127.png" alt="Verify Email" width="80" class="mb-3">
            <h4 class="mb-2">Verifikasi Email Anda</h4>
            <p class="text-muted">Kami telah mengirimkan link verifikasi ke email Anda.<br>Silakan cek inbox atau folder spam.</p>
        </div>
        @if (session('resent'))
            <div class="alert alert-success" role="alert">
                Link verifikasi baru telah dikirim ke email Anda.
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>
        @endif
        <form method="POST" action="{{ route('verification.resend') }}">
            @csrf
            <button type="submit" class="btn btn-primary w-100 mb-2">Kirim Ulang Link Verifikasi</button>
        </form>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn btn-link w-100">Logout</button>
        </form>
    </div>
</div>
@endsection
