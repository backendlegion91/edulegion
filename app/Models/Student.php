<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //

    protected $fillable = [
        // User Link
        'user_id',

        // Student Details
        'name',
        'dob',
        'age',
        'gender',
        'joining_class',
        'address',
        'nationality',
        'blood_group',
        
        'caste',
        'language',
        'category',
        'is_nri',
        'siblings_name',
        'siblings_class',
        'siblings_rollno',

        // Parent Details
        'father_name',
        'mother_name',
        'father_education',
        'mother_education',
        'father_income',
        'mother_income',
        'father_address',
        'mother_address',

        // Uploaded Files (stored as paths)
        'digital_sign',
        'cast_certificate',
        'income_certificate',
        'addhar_certificate',
        'birth_certificate',
        'previous_marksheet',

        // Admission Application Status
        'application_status', // approved, pending, rejected
    ];


    public function user()
{
    return $this->belongsTo(User::class);
}

public function payment()
{
    return $this->hasOne(Payment::class);
}
}
