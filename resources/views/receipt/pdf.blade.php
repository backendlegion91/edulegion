<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fee Payment Receipt - Edisite School of Management</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fc;
            padding: 40px 20px;
            color: #333;
            line-height: 1.5;
        }

        .receipt-container {
            max-width: 750px;
            margin: auto;
            background: #fff;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
            padding: 30px 40px;
            overflow-wrap: break-word;
        }

        .logo {
            text-align: center;
            margin-bottom: 20px;
        }

        .logo img {
            max-height: 80px;
        }

        .header {
            text-align: center;
            border-bottom: 2px solid #3b82f6;
            padding-bottom: 10px;
            margin-bottom: 30px;
        }

        .header h2 {
            margin: 0;
            color: #1e3a8a;
        }

        .header h4 {
            margin: 5px 0 0;
            color: #475569;
            font-weight: normal;
        }

        .section-title {
            font-size: 16px;
            font-weight: bold;
            margin-top: 30px;
            margin-bottom: 10px;
            color: #1e40af;
        }

        .info-section {
            background-color: #f1f5f9;
            padding: 15px 20px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .info-section p {
            margin: 6px 0;
            font-size: 14px;
        }

        .footer {
            margin-top: 30px;
            text-align: center;
            font-size: 13px;
            color: #64748b;
            border-top: 1px dashed #cbd5e1;
            padding-top: 15px;
        }

        @media print {
            body {
                background: #fff;
                padding: 0;
            }
            .receipt-container {
                box-shadow: none;
                border: none;
                padding: 0;
            }
        }
    </style>
</head>
<body>
    <div class="receipt-container">

        <div class="logo">
            <img src="{{ asset('images/edisite-logo.png') }}" alt="Edisite Logo">
        </div>

        <div class="header">
            <h2>EduLegion School of Management</h2>
            <h4>Official Fee Payment Receipt</h4>
        </div>

        <div class="section-title">Payment Details</div>
        <div class="info-section">
            <p><strong>Transaction ID:</strong> {{ $payment->txnid }}</p>
            <p><strong>Amount Paid:</strong> ₹{{ number_format($payment->amount, 2) }}</p>
            <p><strong>Status:</strong> {{ ucfirst($payment->status) }}</p>
            <p><strong>Payment Date:</strong> {{ $payment->created_at->format('d M Y, h:i A') }}</p>
        </div>

        <div class="section-title">Student Details</div>
        <div class="info-section">
            <p><strong>Name:</strong> {{ $payment->student->name }}</p>
            <p><strong>Admission No:</strong> {{ $payment->student->admission_no ?? 'N/A' }}</p>
            <p><strong>Email:</strong> {{ $payment->email }}</p>
            <p><strong>Program:</strong> {{ $payment->student->class_name ?? 'N/A' }}</p>
        </div>

        <div class="footer">
            This is a system-generated receipt. No signature is required.<br>
            Thank you for your payment to <strong>Edulegion School of Management</strong>.
        </div>
    </div>
</body>
</html>
