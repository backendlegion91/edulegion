@extends('layouts.master')

@section('content')
<div class=" flex items-center justify-center bg-gray-100">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <h2 class="text-2xl font-bold text-center text-blue-600 mb-6">Verify OTP</h2>

        @if(session('success'))
            <div class="mb-4 text-green-600 text-sm">{{ session('success') }}</div>
        @endif

        @if($errors->any())
            <div class="mb-4 text-red-600 text-sm">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('password.otp.verify') }}">
            @csrf

            <div class="mb-4">
                <label for="otp" class="block text-sm font-medium text-gray-700 mb-1">Enter the 6-digit OTP sent to your email</label>
                <input type="text" name="otp" id="otp" maxlength="6" class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-blue-300" required>
            </div>

            <button type="submit" class="w-full bg-blue-600 text-white font-semibold py-2 rounded hover:bg-blue-700 transition">
                Verify OTP
            </button>
        </form>

        <div class="mt-4 text-center text-sm text-gray-600">
            Didn't receive OTP?
            <a href="{{ route('password.email') }}" class="text-blue-600 hover:underline">Resend</a>
        </div>
    </div>
</div>
@endsection
