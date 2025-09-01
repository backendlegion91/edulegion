@extends('layouts.master')

@section('content')
<div class="bg-gray-100 min-h-screen p-6">
    <div class="max-w-5xl mx-auto">
        <h1 class="text-3xl font-bold text-blue-700 mb-6">
            Welcome, {{ Auth::user()->name }}
        </h1>

        {{-- Application Details --}}
        <div class="bg-white p-6 rounded-lg shadow mb-8">
            <h2 class="text-xl font-semibold text-gray-700 mb-4">🎓 Application Details</h2>
            <ul class="text-gray-800 space-y-2">
                <li><strong>Full Name:</strong> {{ $student->name }}</li>
                <li><strong>Date of Birth:</strong> {{ $student->dob }}</li>
                <li><strong>Age:</strong> {{ $student->age }}</li>
                <li><strong>Gender:</strong> {{ ucfirst($student->gender) }}</li>
                <li><strong>Joining Class:</strong> {{ $student->joining_class }}</li>
                <li><strong>Nationality:</strong> {{ $student->nationality }}</li>
                <li><strong>Application Status:</strong>
                    @if($student->application_status === 'approved')
                        <span class="text-green-600 font-semibold">Approved</span>
                    @elseif($student->application_status === 'rejected')
                        <span class="text-red-600 font-semibold">Rejected</span>
                    @else
                        <span class="text-yellow-600 font-semibold">Pending</span>
                    @endif
                </li>
            </ul>
        </div>

        {{-- Payment Section --}}
        @if($student->status !== 'paid')
            <div class="bg-white p-6 rounded-lg shadow text-center mb-8">
                <h2 class="text-xl font-semibold text-red-700 mb-4">⚠️ Payment Pending or Failed</h2>
                <p class="text-gray-600 mb-4">
                    Your application has been saved, but payment is required to complete the process.
                </p>
                <a href="{{ route('retry.payment', $student->id) }}"
                   class="inline-block bg-blue-600 text-white px-5 py-2 rounded hover:bg-blue-700 transition">
                    💳 Complete Payment
                </a>
                <p class="text-sm text-gray-500 mt-4">
                    If you're facing issues, <a href="#" class="text-blue-600 underline">contact support</a>.
                </p>
            </div>
        @else
            <div class="bg-white p-6 rounded-lg shadow mb-8">
                <h2 class="text-xl font-semibold text-gray-700 mb-4">💳 Payment Information</h2>
                <ul class="text-gray-800 space-y-2">
                    <li><strong>Amount:</strong> ₹{{ number_format(optional($student->payment)->amount ?? 0, 2) }}</li>
                    <li><strong>Status:</strong> <span class="text-green-600 font-semibold">{{ ucfirst($student->status) }}</span></li>
                </ul>
                <a href="{{ route('receipt.download', optional($student->payment)->id) }}"
                   class="mt-4 inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                    📄 Download Receipt
                </a>
            </div>
        @endif

        {{-- Entrance Exam Scheduling & Result --}}
        @if($student->status === 'paid' && $student->application_status === 'approved')
            <div class="bg-white p-6 rounded-lg shadow mb-8">
                <h2 class="text-xl font-semibold text-gray-700 mb-4">📘 Entrance Exam Schedule & Result</h2>

                @if($student->exam_date)
                    <ul class="text-gray-800 space-y-2">
                        <li><strong>Exam Date:</strong> {{ \Carbon\Carbon::parse($student->exam_date)->format('d M Y, h:i A') }}</li>
                        <li><strong>Venue:</strong> {{ $student->exam_venue ?? 'Online / To be announced soon' }}</li>

                        @if($student->exam_result)
                            <li><strong>Result:</strong>
                                @if($student->exam_result === 'pass')
                                    <span class="text-green-600 font-semibold">Passed</span>
                                @elseif($student->exam_result === 'fail')
                                    <span class="text-red-600 font-semibold">Failed</span>
                                @else
                                    <span class="text-yellow-600 font-semibold">Pending</span>
                                @endif
                            </li>
                        @else
                            <li class="text-yellow-600 italic">Result pending</li>
                        @endif
                    </ul>
                @else
                    <p class="text-gray-600">You will be notified once your entrance exam is scheduled.</p>
                @endif
            </div>
        @endif

        {{-- Final Note --}}
        <p class="mt-6 text-sm text-gray-600 italic">
            <b>📧 Note: After successful payment, your application details will be sent to your registered email address.</b>
        </p>
    </div>
</div>
@endsection
