@extends('layout')

@section('title', 'Login')

@section('content')
<div class="d-flex justify-content-center flex-column align-items-center vh-100">
          {{-- Alert messages --}}
        @if (session('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert"  style="max-width: 600px; width: 100%; color: #000000;">
                <i class="bi bi-check-circle-fill me-2"></i>{{ session('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    <div class="card p-5 shadow-lg" style="max-width: 400px; width: 100%;">
        <h1 class="mb-4 text-center text-dark">Login to Your Account</h1>
        
        <form action="{{ route('loginCheck') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="email" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ old('email') }}" placeholder="Enter your email">
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            
            <div class="mb-4">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Enter your password">
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-lg btn-primary" style="border-radius: 50px;">Login</button>
            </div>
        </form>
    </div>
</div>
@endsection
