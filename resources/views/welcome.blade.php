@extends('layout')

@section('title', 'Welcome')

@section('content')
<div class="d-flex justify-content-center flex-column align-items-center vh-100">
          {{-- Alert messages --}}
        @if (session('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert"  style="max-width: 600px; width: 100%; color: #000000;">
                <i class="bi bi-check-circle-fill me-2"></i>{{ session('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    <div class="text-center bg-white p-5 rounded shadow-lg" style="max-width: 400px;">
        <h1 class="mb-4 text-dark">Auth Laravel Project</h1>

        <p class="mb-5 text-muted">Manage your account efficiently and securely.</p>

        <div class="d-grid gap-3">
            <a class="btn btn-lg btn-outline-primary" href="{{ route('login') }}" style="border-radius: 50px;">
                <i class="bi bi-box-arrow-in-right"></i> Login
            </a>
            <a class="btn btn-lg btn-outline-secondary" href="{{ route('register') }}" style="border-radius: 50px;">
                <i class="bi bi-person-plus-fill"></i> Register
            </a>
        </div>
    </div>
</div>
@endsection
