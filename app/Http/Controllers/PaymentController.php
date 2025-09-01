<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Services\RazorpayService;
use App\Models\Payment;
use Barryvdh\DomPDF\Facade\Pdf;
use Razorpay\Api\Api;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Mail\ApplicationSubmittedMail;

class PaymentController extends Controller
{
    //
    public function razorpaySuccess(Request $request)
    {
        $student = Student::findOrFail($request->student_id);
        $user = auth()->user();
    
        // Verify Razorpay Signature
        $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));
    
        $generated_signature = hash_hmac(
            'sha256',
            $request->razorpay_order_id . '|' . $request->razorpay_payment_id,
            env('RAZORPAY_SECRET')
        );
    
        if ($generated_signature !== $request->razorpay_signature) {
            Log::error('Razorpay signature verification failed', $request->all());
    
            return redirect()->route('student.dashboard')
                ->with('error', 'Payment verification failed. Please try again or contact support.');
        }
    
        $responseData = [
            'razorpay_payment_id' => $request->razorpay_payment_id,
            'order_id' => $request->razorpay_order_id,
            'signature' => $request->razorpay_signature,
        ];
    
        // Save Payment Info
        Payment::updateOrCreate(
            ['student_id' => $student->id],
            [
                'txnid' => $request->razorpay_payment_id,
                'amount' => 1,
                'status' => 'success',
                'email' => $user->email,
                'firstname' => $user->name,
                'response' => json_encode($responseData),
            ]
        );
    
        // Optional: Update student status if needed
        $student->status = 'paid';
        $student->save();

        Mail::to(users: auth()->user()->email)->send(new ApplicationSubmittedMail($student));

    
        return redirect()->route('student.dashboard')
            ->with('success', 'Payment successful! Your admission application is complete.');
    }
    
    
    public function retryPayment(Student $student, RazorpayService $razorpayService)
    {
        if ($student->payment && $student->payment->status === 'success') {
            return redirect()->route('student.dashboard')->with('success', 'Payment already completed.');
        }
    
        $amount = 1;
        $order = $razorpayService->createOrder($student, $amount);
    
        // OPTIONAL: update or insert a pending retry
        $student->payment()->updateOrCreate(
            ['student_id' => $student->id],
            [
                'txnid' =>null,
                'amount' => $amount,
                'status' => 'pending',
                'email' => auth()->user()->email,
                'firstname' => explode(' ', $student->name)[0],
                'response' => null
            ]
        );
    
        return view('dash.payment_form', [
            'order' => $order,
            'student' => $student,
            'amount' => $amount,
            'razorpay_key' => env('RAZORPAY_KEY')
        ]);
    }
    
    public function paymentFailed(Request $request)
    {
        $student = Student::findOrFail($request->student_id);
        $user = auth()->user();
    
        Payment::updateOrCreate(
            ['student_id' => $student->id],
            [
                'txnid' => null,
                'amount' => 500,
                'status' => 'failed',
                'email' => $user->email,
                'firstname' => explode(' ', $student->name)[0],
                'response' => json_encode(['message' => 'Payment popup closed'])
            ]
        );
    
        return response()->json(['message' => 'Marked as failed']);
    }

    public function downloadReceipt(Payment $payment)
{
    // Optional: You can add authorization logic here
    // abort_unless($payment->student->user_id === auth()->id(), 403);

    $pdf = PDF::loadView('receipt.pdf', compact('payment'));

    return $pdf->download('receipt_' . $payment->id . '.pdf');
}
}
