<?php

namespace App\Services;

use Razorpay\Api\Api;
use App\Models\Student;

class RazorpayService
{
    public function createOrder(Student $student, int $amount)
    {
        $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));

        return $api->order->create([
            'receipt' => 'ADM_' . $student->id,
            'amount' => $amount * 100,
            'currency' => 'INR',
            'payment_capture' => 1
        ]);
    }
}
