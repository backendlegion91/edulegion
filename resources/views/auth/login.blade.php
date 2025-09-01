@extends('layouts.master')

@section('content')
<div class="bg-gray-100 px-4 py-10 flex flex-col items-center justify-center">

    <!-- Breadcrumb -->
    <nav class="w-full max-w-md mb-6" aria-label="Breadcrumb">
        <ol class="flex space-x-2 text-sm text-gray-500">
            <li><a href="/" class="hover:text-blue-600 font-medium">Home</a></li>
            <li><span class="mx-1 text-gray-400">/</span></li>
            <li class="text-blue-600 font-semibold">Login</li>
        </ol>
    </nav>

    <!-- Flash Success Message -->
    @if (session('success'))
        <div class="bg-green-100 text-green-800 px-4 py-2 rounded mb-4 text-sm w-full max-w-md text-center">
            {{ session('success') }}
        </div>
    @endif

    <!-- Error Display -->
    @if ($errors->any())
        <div class="bg-red-100 text-red-700 px-4 py-2 rounded mb-4 text-sm w-full max-w-md text-center">
            {{ $errors->first() }}
        </div>
    @endif

    <!-- Login Card -->
    <div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-md">
        <div class="mb-6 text-center">
            <h2 class="text-3xl font-bold text-blue-700">Login to Your Account</h2>
            <p class="text-gray-500 text-sm mt-2">Access your dashboard & more</p>
        </div>

        <form method="POST" action="{{ route('login') }}" class="space-y-5">
            @csrf
            <!-- Email -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                <input type="email" name="email" id="email" required autofocus
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none transition" />
            </div>

            <!-- Password -->
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" name="password" id="password" required
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none transition" />
            </div>

            <!-- Remember Me + Forgot -->
            <div class="flex items-center justify-between">
                <label class="inline-flex items-center">
                    <input type="checkbox" name="remember"
                        class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded" />
                    <span class="ml-2 text-sm text-gray-700">Remember me</span>
                </label>
                <a href="{{ route('password.request') }}" class="text-sm text-blue-600 hover:underline">Forgot Password?</a>
            </div>

            <!-- Submit -->
            <div>
                <button type="submit"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-md shadow transition duration-300">
                    Sign In
                </button>
            </div>
        </form>

        <div class="text-center mt-6 text-sm text-gray-600">
            Don’t have an account?
            <a href="{{ route('register') }}" class="text-blue-600 hover:underline font-medium">Sign Up</a>
        </div>
    </div>
</div>
@endsection
