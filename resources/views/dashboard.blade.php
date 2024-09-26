@extends('layout')

@section('title', 'Dashboard')

@section('content')
<div class="d-flex justify-content-center flex-column align-items-center vh-100">
          {{-- Alert messages --}}
        @if (session('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert"  style="max-width: 600px; width: 100%; color: #000000;">
                <i class="bi bi-check-circle-fill me-2"></i>{{ session('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    <div class="card p-5 shadow-lg text-center" style="max-width: 600px; width: 100%; color: #000000;">
        <h1 class="mb-4">Welcome, {{ Auth::user()->name }}!</h1>
        <p class="mb-5">You have successfully logged in to your dashboard.</p>

        <div class="d-flex justify-content-center">
            <a class="btn btn-danger btn-lg px-5 py-2" href="{{ route('logout') }}" style="border-radius: 50px;">Logout</a>
        </div>
    </div>
</div>
@endsection
