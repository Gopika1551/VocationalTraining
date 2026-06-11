@extends('layouts.app')

@section('title', 'Student Login')

@section('content')
<div class="min-h-screen flex flex-col items-center justify-center px-4 py-12">
    <div class="text-center mb-8">
        <h1 class="text-3xl font-bold text-gray-900">Vocational Training</h1>
        <p class="mt-2 text-gray-600">Employment Management Platform</p>
    </div>

    <div class="w-full max-w-md rounded-xl border border-gray-200 bg-white p-8 shadow-sm">
        <h2 class="text-2xl font-semibold text-gray-900">Sign In</h2>
        <p class="mt-1 text-sm text-gray-500">Sign in to your account</p>

        @if (session('error'))
            <div class="mt-4 rounded-lg border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-700">
                {{ session('error') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="mt-4 rounded-lg border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-700">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{ route('login.submit') }}" class="mt-6 space-y-4">
            @csrf

            <div>
                <label for="national_id" class="block text-sm font-medium text-gray-700">National ID</label>
                <input id="national_id"
                       type="text"
                       name="national_id"
                       value="{{ old('national_id') }}"
                       placeholder="Enter National ID"
                       required
                       autofocus
                       class="mt-1 block w-full rounded-lg border border-gray-300 px-3 py-2 shadow-sm focus:border-gray-900 focus:outline-none focus:ring-1 focus:ring-gray-900">
            </div>

            <div>
                <label for="otp" class="block text-sm font-medium text-gray-700">OTP</label>
                <input id="otp"
                       type="password"
                       name="otp"
                       placeholder="Enter OTP"
                       required
                       class="mt-1 block w-full rounded-lg border border-gray-300 px-3 py-2 shadow-sm focus:border-gray-900 focus:outline-none focus:ring-1 focus:ring-gray-900">
            </div>

            <button type="submit"
                    class="w-full rounded-lg bg-gray-900 px-4 py-2.5 text-sm font-medium text-white hover:bg-black transition-colors">
                Sign In
            </button>
        </form>

        <div class="mt-6 space-y-2 text-sm text-gray-600">
            <p>
                Don't have an account?
                <a href="#" class="font-medium text-gray-900 hover:underline">Create Account</a>
            </p>
            <p>
                <a href="#" class="font-medium text-gray-900 hover:underline">Forgot your password?</a>
            </p>
        </div>
    </div>

    <footer class="mt-8 text-sm text-gray-500">
        &copy; 2026 Vocational Training
    </footer>
</div>
@endsection

