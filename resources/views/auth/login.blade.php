@extends('layouts.guest')

@section('title', 'Log In')

@section('content')
    <div class="text-center mt-4">

        <h1 class="text-light">Admin Login</h1>
        <hr class="text-light">
        <p class="lead text-light">Log In to your account.</p>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="m-sm-3">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input class="form-control form-control-lg" type="email" name="email"
                            placeholder="Enter your email" value="{{ old('email') }}" required autofocus />
                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input class="form-control form-control-lg" type="password" name="password"
                            placeholder="Enter your password" required />
                        @error('password')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="d-flex justify-content-between mb-3">
                        <div class="form-check align-items-center">
                            <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                            <label class="form-check-label text-small" for="remember_me">Remember me</label>
                        </div>
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}"
                                class="text-sm text-gray-600 hover:text-gray-900">Forgot your password?</a>
                        @endif
                    </div>
                    <div class="d-grid gap-2 mt-3">
                        <button type="submit" class="btn btn-lg btn-primary">Sign in</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
