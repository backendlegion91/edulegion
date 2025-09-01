@extends('layouts.master')

@section('content')
<div class="bg-gray-100 px-4 py-10 flex flex-col items-center justify-center">

    <!-- ✅ Breadcrumb -->
    <nav class="w-full max-w-md mb-6" aria-label="Breadcrumb">
        <ol class="flex space-x-2 text-sm text-gray-500">
            <li><a href="/" class="hover:text-blue-600 font-medium">Home</a></li>
            <li><span class="mx-1 text-gray-400">/</span></li>
            <li class="text-blue-600 font-semibold">Verify OTP</li>
        </ol>
    </nav>

    <!-- ✅ OTP Box -->
    <div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-md">
        <div class="mb-6 text-center">
            <h2 class="text-2xl font-bold text-blue-700">Verify OTP</h2>
            <p class="text-gray-500 text-sm mt-2">Enter the 6-digit code sent to your email</p>
        </div>

        <!-- ✅ Toastr Flash Messages (optional) -->
        @if (session('error'))
            <div class="bg-red-100 text-red-700 px-4 py-2 rounded mb-4 text-sm">
                {{ session('error') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="bg-red-100 text-red-700 px-4 py-2 rounded mb-4 text-sm">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('otp.verify') }}" class="space-y-5">
            @csrf

            <div>
                <label for="otp" class="block text-sm font-medium text-gray-700">OTP Code</label>
                <input type="text" name="otp" id="otp" maxlength="6" required
                       class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none transition" />
            </div>

            <div>
                <button type="submit"
                        class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-md shadow transition duration-300">
                    Verify OTP
                </button>
            </div>
        </form>

    </div>
</div>
@endsection
