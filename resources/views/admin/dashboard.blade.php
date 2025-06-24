@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1 class="mb-4">Admin Dashboard</h1>
            
            <div class="alert alert-info">
                <h4>Selamat datang, <strong>{{ $user->name }}</strong>!</h4>
                <p>Role: <span class="badge bg-primary">{{ ucfirst($user->role) }}</span></p>
                <p>Email: <strong>{{ $user->email }}</strong></p>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="card text-white bg-primary mb-3">
                        <div class="card-header">Total Users</div>
                        <div class="card-body">
                            <h4 class="card-title">{{ $totalUsers }}</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-white bg-success mb-3">
                        <div class="card-header">Total Admins</div>
                        <div class="card-body">
                            <h4 class="card-title">{{ $totalAdmins }}</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-white bg-info mb-3">
                        <div class="card-header">Regular Users</div>
                        <div class="card-body">
                            <h4 class="card-title">{{ $totalRegularUsers }}</h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Quick Actions</h5>
                        </div>
                        <div class="card-body">
                            <a href="{{ route('admin.users') }}" class="btn btn-primary me-2">Manage Users</a>
                            <a href="{{ route('home') }}" class="btn btn-secondary">Back to User Dashboard</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection