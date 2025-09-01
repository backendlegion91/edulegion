<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    //
    protected $fillable = ['student_id', 'txnid', 'amount', 'status', 'email', 'firstname', 'response'];

    // protected $fillable = ['student_id', 'payment_id', 'amount', 'gateway', 'status'];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

}
