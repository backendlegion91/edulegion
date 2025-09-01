@extends('layouts.master')

@section('content')
<div class=" bg-gray-100 px-4 py-10 flex flex-col items-center justify-center">

    <!-- ✅ Breadcrumb (optional) -->
    <nav class="w-full max-w-md mb-6" aria-label="Breadcrumb">
        <ol class="flex space-x-2 text-sm text-gray-500">
            <li><a href="/" class="hover:text-blue-600 font-medium">Home</a></li>
            <li><span class="mx-1 text-gray-400">/</span></li>
            <li class="text-blue-600 font-semibold">Register</li>
        </ol>
    </nav>

    <!-- ✅ Register Box -->
    <div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-md">
        <div class="mb-6 text-center">
            <h2 class="text-3xl font-bold text-blue-700">Create an Account</h2>
            <p class="text-gray-500 text-sm mt-2">Join and get started</p>
        </div>

        @if ($errors->any())
            <div class="bg-red-100 text-red-700 px-4 py-2 rounded mb-4 text-sm">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('register') }}" class="space-y-5">
            @csrf

            <!-- Name -->
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                <input type="text" name="name" id="name" required value="{{ old('name') }}"
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none transition" />
            </div>

            <!-- Email -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                <input type="email" name="email" id="email" required value="{{ old('email') }}"
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none transition" />
            </div>
             <!-- Phone -->
             <div>
                <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number</label>
                <input type="phone" name="phone" id="phone" required value="{{ old('phone') }}"
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none transition" />
            </div>

            <!-- Password -->
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" name="password" id="password" required
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none transition" />
            </div>

            <!-- Confirm Password -->
            <div>
                <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" required
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none transition" />
            </div>

            <div>
                <button type="submit"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-md shadow transition duration-300">
                    Create Account
                </button>
            </div>
        </form>

        <div class="text-center mt-6 text-sm text-gray-600">
            Already have an account?
            <a href="{{ route('login') }}" class="text-blue-600 hover:underline font-medium">Login</a>
        </div>
    </div>
</div>
@endsection
