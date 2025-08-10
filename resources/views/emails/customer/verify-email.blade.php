<!DOCTYPE html>
<html>
<head>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #3490dc;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            margin: 20px 0;
        }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Verify Your Email Address</h1>

        <p>Hello {{ $user->first_name }},</p>

        <p>Please click the button below to verify your email address:</p>

        <a href="{{ $verificationUrl }}" class="button">Verify Email Address</a>

        <p>If you did not create an account, no further action is required.</p>

        <p>Thank you,<br>{{ config('app.name') }}</p>

        <p style="font-size: 12px; color: #666;">
            If you're having trouble clicking the "Verify Email Address" button,
            copy and paste the URL below into your web browser:
            <br>
            <a href="{{ $verificationUrl }}">{{ $verificationUrl }}</a>
        </p>
    </div>
</body>
</html>
