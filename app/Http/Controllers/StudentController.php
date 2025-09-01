<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Services\RazorpayService;
use Illuminate\Support\Facades\Auth;


class StudentController extends Controller
{
    //

    public function dashboard()
    {
        $user = auth()->user();
    
        $student = Student::where('user_id', $user->id)->first();
    
        if (!$student) {
            return redirect()->route('student.application.form')->with('info', 'Please complete the admission form.');
        }
    
        return view('dash.student', compact('student'));
    }
    

public function showForm()
{
    return view('dash.admission_form');
}



public function submitForm(Request $request, RazorpayService $razorpayService)
{
  
    $validated = $request->validate([
        // Student Info
        'name' => 'required|string|max:255',
        'dob' => 'required|date',
        'age' => 'required|integer',
        'joining_class' => 'required|string|max:255',
        'nationality' => 'required|string|max:255',
        'caste' => 'required|string|max:255',
        'language' => 'required|string|max:255',
        'gender' => 'required|string|in:male,female,other',
        'address' => 'required|string|max:1000',
        'blood_group' => 'nullable|string|max:10',
        'category' => 'required|string|max:50',
        'nri_status' => 'required|string|in:NRI,Non-NRI',

        // Parent Info
        'father_name' => 'required|string|max:255',
        'mother_name' => 'required|string|max:255',
        'father_education' => 'required|string|max:255',
        'mother_education' => 'required|string|max:255',
        'father_income' => 'required|numeric',
        'mother_income' => 'required|numeric',
        'father_address' => 'required|string|max:1000',
        'mother_address' => 'required|string|max:1000',

        // Sibling (optional)
        'sibling_name' => 'nullable|string|max:255',
        'sibling_class' => 'nullable|string|max:255',
        'sibling_roll' => 'nullable|string|max:255',

        // Documents
        'digital_sign' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048',
        'cast_certificate' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048',
        'income_certificate' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048',
        'addhar_certificate' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048',
        'birth_certificate' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048',
        'previous_marksheet' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048',
        'photo' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        'nri_certificate' => 'required_if:nri_status,NRI|file|mimes:pdf,jpg,jpeg,png|max:2048',


        // Confirmation
        'confirm' => 'accepted',
    ]);
   

    // // Check for existing application
    // $existing = Student::where('user_id', Auth::id())->first();
    // if ($existing) {
    //     return redirect()->back()->with('error', 'You have already submitted the application form.');
    // }
  
    // Upload files
    $files = [];

foreach ([
    'digital_sign', 'cast_certificate', 'income_certificate',
    'addhar_certificate', 'birth_certificate', 'previous_marksheet',
    'nri_certificate', 'photo'
] as $doc) {
    if ($request->hasFile($doc)) {
        $files[$doc] = $request->file($doc)->store('uploads/documents', 'public');
    } else {
        $files[$doc] = null; // optional: or skip assigning
    }
}

    // Save to DB
    $application = new Student();
    $application->fill($validated);
    $application->user_id = Auth::id();
    $application->status = $request->input('action') === 'submit' ? 'submitted' : 'draft';

    // Add uploaded file paths
    foreach ($files as $field => $path) {
        $application->$field = $path;
    }

    $application->save();

    if ($request->input('action') === 'submit') {
        // $amount = 500; // or fetch from config or DB
        // $order = $razorpayService->createOrder($application, $amount);

        $amount = 1;
        // $order = $razorpayService->createOrder(student: $application, $amount);
        $order = $razorpayService->createOrder($application, $amount);

          // Save initial payment record
          $application->payment()->create([
            'amount' => $amount,
            'status' => 'pending',
            'firstname' => explode(' ', trim($application->name))[0],
            'email' => Auth::user()->email,
        ]);

        return view('dash.payment_form', [
            'order' => $order,
            'student' => $application,
            'amount' => $amount,
            'razorpay_key' => env('RAZORPAY_KEY')
        ]);
    }

    return redirect()
        ->route('student.dashboard')
        ->with('success', 'Application saved as draft.');
}



public function admindashboard()
{
   
    return view('admin.dash.admin');
}


}
