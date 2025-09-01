<!-- @extends('layouts.master')

@section('content')
<div class="max-w-xl mx-auto mt-20 text-center"> -->

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>

<form id="razorpay-form" action="{{ route('razorpay.success') }}" method="POST">
    @csrf
    <input type="hidden" name="student_id" value="{{ $student->id }}">
    <input type="hidden" name="razorpay_payment_id" id="razorpay_payment_id">
    <input type="hidden" name="razorpay_order_id" id="razorpay_order_id">
    <input type="hidden" name="razorpay_signature" id="razorpay_signature">

</form>

<script>
var options = {
    "key": "{{ $razorpay_key }}",
    "amount": "{{ $amount * 100 }}",
    "currency": "INR",
    "name": "Admission Fee",
    "description": "Form Payment",
    "order_id": "{{ $order['id'] }}",
   "handler": function (response) {
    document.getElementById('razorpay_payment_id').value = response.razorpay_payment_id;
    document.getElementById('razorpay_order_id').value = response.razorpay_order_id;
    document.getElementById('razorpay_signature').value = response.razorpay_signature;
    document.getElementById('razorpay-form').submit();
},
    "modal": {
        "ondismiss": function () {
            fetch("{{ route('payment.failed') }}", {
                method: "POST",
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    student_id: "{{ $student->id }}"
                })
            }).then(() => {
                window.location.href = "{{ route('student.dashboard') }}";
            });
        }
    },
    "prefill": {
        "name": "{{ $student->name }}",
        "email": "{{ auth()->user()->email }}"
    },
    "theme": {
        "color": "#3399cc"
    }
};
var rzp = new Razorpay(options);
rzp.open();
</script>




<!-- </div>

@endsection -->