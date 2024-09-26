@extends('layout')

@section('title', 'Register')

@section('content')
<div class="d-flex justify-content-center flex-column align-items-center vh-100">
          {{-- Alert messages --}}
        @if (session('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert"  style="max-width: 600px; width: 100%; color: #000000;">
                <i class="bi bi-check-circle-fill me-2"></i>{{ session('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    <div class="card p-5 shadow-lg" style="max-width: 500px; width: 100%;">
        <h1 class="mb-4 text-center text-dark">Register a New Account</h1>

        <form action="{{ route('registeration') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ old('name') }}" placeholder="Enter your name">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

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
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Create a password">
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password_confirmation" class="form-label">Confirm Password</label>
                <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Confirm your password">
            </div>

            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-lg btn-primary" style="border-radius: 50px;">Register</button>
            </div>
        </form>
    </div>
</div>
@endsection
