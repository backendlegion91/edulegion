@extends('admin.layouts.admin_master')
@section('title', 'Dashboard')
@section('content')
    <h1 class="text-2xl font-bold text-blue-700 mb-4">Welcome to the Admin Dashboard</h1>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <div class="bg-white p-4 rounded shadow border-l-4 border-blue-500">
            <h2 class="text-lg font-semibold text-blue-700">Total Students</h2>
            <p class="mt-1 text-gray-600">500</p>
        </div>
        <div class="bg-white p-4 rounded shadow border-l-4 border-blue-500">
            <h2 class="text-lg font-semibold text-blue-700">Pending Admissions</h2>
            <p class="mt-1 text-gray-600">42</p>
        </div>
        <div class="bg-white p-4 rounded shadow border-l-4 border-blue-500">
            <h2 class="text-lg font-semibold text-blue-700">Courses Offered</h2>
            <p class="mt-1 text-gray-600">28</p>
        </div>
    </div>
@endsection