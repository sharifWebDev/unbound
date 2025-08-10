<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your OTP Code</title>
    <style>
        /* Base styles */
        body {
            font-family: 'Helvetica Neue', Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
        }

        /* Email container */
        .email-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
        }

        /* Header */
        .header {
            text-align: center;
            padding: 20px 0;
            border-bottom: 1px solid #eeeeee;
        }

        .logo {
            max-width: 150px;
            height: auto;
        }

        /* Content */
        .content {
            padding: 30px 20px;
        }

        h1 {
            color: #2c3e50;
            font-size: 24px;
            margin-top: 0;
            text-align: center;
        }

        p {
            margin-bottom: 20px;
            font-size: 16px;
        }

        /* OTP Box */
        .otp-box {
            background-color: #f8f9fa;
            border: 1px dashed #dee2e6;
            border-radius: 8px;
            padding: 15px;
            text-align: center;
            margin: 30px 0;
        }

        .otp-code {
            font-size: 32px;
            font-weight: bold;
            letter-spacing: 5px;
            color: #2c3e50;
            padding: 10px 0;
        }

        /* Footer */
        .footer {
            text-align: center;
            padding: 20px;
            font-size: 14px;
            color: #7f8c8d;
            border-top: 1px solid #eeeeee;
        }

        .expiry-note {
            color: #e74c3c;
            font-weight: bold;
        }

        .button {
            display: inline-block;
            padding: 12px 24px;
            background-color: #3498db;
            color: #ffffff;
            text-decoration: none;
            border-radius: 4px;
            font-weight: bold;
            margin: 20px 0;
        }

        .button:hover {
            background-color: #2980b9;
        }

        /* Responsive */
        @media only screen and (max-width: 600px) {
            .email-container {
                width: 100%;
                padding: 10px;
            }

            h1 {
                font-size: 20px;
            }

            .otp-code {
                font-size: 24px;
            }
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="header">
            <!-- Replace with your logo -->
            {{-- <img src="{{ asset('images/logo.png') }}" alt="Company Logo" class="logo"> --}}
        </div>

        <div class="content">
            <h1>Your One-Time Password (OTP)</h1>

            <p>Hello {{ $user->name }},</p>

            <p>We received a request to access your account. Please use the following OTP code to verify your identity:</p>

            <div class="otp-box">
                <div class="otp-code">{{ $otp }}</div>
            </div>

            <p class="expiry-note">This code will expire in {{ $expiryMinutes }} minutes.</p>

            <p>If you didn't request this code, please ignore this email or contact our support team immediately.</p>

            <p>Thank you,<br>The {{ config('app.name') }} Team</p>
        </div>

        <div class="footer">
            <p>&copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.</p>
            <p>If you have any questions, please contact us at <a href="mailto:support@example.com">support@example.com</a></p>
        </div>
    </div>
</body>
</html>
