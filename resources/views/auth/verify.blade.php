<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify Your Account – Upward Saver Bank Corporation</title>
    <link rel="shortcut icon" href="{{ asset('storage/app/public/photos/SogsHXqU6Y0ICRb6DyZgVRWFyDOm44mgql9lWKwW.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Manrope:wght@700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        body {
            font-family: 'Inter', sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #f4f5f7;
            overflow: hidden;
        }
        /* animated background */
        .auth-bg {
            position: fixed; inset: 0; z-index: 0;
            background: linear-gradient(135deg, #1a1426 0%, #3b0a10 40%, #1a1426 100%);
        }
        .auth-bg::before {
            content: ''; position: absolute; inset: 0;
            background: radial-gradient(ellipse at 20% 50%, rgba(229,28,36,.22) 0%, transparent 60%),
                        radial-gradient(ellipse at 80% 20%, rgba(172,57,212,.18) 0%, transparent 55%);
        }
        .auth-bg-particle {
            position: absolute; border-radius: 50%; opacity: .35;
            animation: vf-float 7s ease-in-out infinite;
        }
        @keyframes vf-float {
            0%,100%{transform:translateY(0) scale(1);}
            50%{transform:translateY(-18px) scale(1.2);}
        }

        /* card */
        .auth-card {
            position: relative; z-index: 10;
            background: #fff;
            border-radius: 24px;
            box-shadow: 0 24px 80px rgba(0,0,0,.22);
            width: 100%; max-width: 460px;
            margin: 20px;
            overflow: hidden;
        }
        .auth-card-top {
            background: linear-gradient(135deg, #1a1426 0%, #e51c24 55%, #AC39D4 100%);
            padding: 36px 40px 28px;
            text-align: center;
            position: relative;
        }
        .auth-card-top::before {
            content: ''; position: absolute; inset: 0;
            background-image: radial-gradient(rgba(255,255,255,.08) 1px, transparent 1px);
            background-size: 18px 18px;
        }
        .auth-logo {
            display: block; position: relative; z-index: 1;
        }
        .auth-logo img {
            height: 44px; width: auto;
            filter: brightness(0) invert(1);
        }
        .auth-icon-wrap {
            position: relative; z-index: 1;
            display: inline-flex; align-items: center; justify-content: center;
            width: 72px; height: 72px; border-radius: 50%;
            background: rgba(255,255,255,.15);
            border: 2px solid rgba(255,255,255,.3);
            margin: 20px auto 0;
            animation: auth-pulse 2.4s ease-in-out infinite;
        }
        @keyframes auth-pulse {
            0%,100%{box-shadow:0 0 0 0 rgba(255,255,255,.25);}
            50%{box-shadow:0 0 0 12px rgba(255,255,255,.0);}
        }
        .auth-icon-wrap i { font-size: 32px; color: #fff; }

        /* body */
        .auth-card-body { padding: 36px 40px 40px; }
        .auth-title {
            font-family: 'Manrope', sans-serif;
            font-size: 22px; font-weight: 800;
            color: #111827; text-align: center; margin-bottom: 8px;
        }
        .auth-sub {
            font-size: 13.5px; color: #6b7280; text-align: center; margin-bottom: 28px; line-height: 1.6;
        }
        .auth-sub span { font-weight: 600; color: #111827; }

        /* alerts */
        .alert { border-radius: 10px; padding: 12px 16px; font-size: 13px; margin-bottom: 18px; }
        .alert-danger  { background: #fff0f0; border: 1px solid #fca5a5; color: #b91c1c; }
        .alert-success { background: #f0fdf4; border: 1px solid #86efac; color: #166534; }

        /* OTP input */
        .otp-label { font-size: 13px; font-weight: 600; color: #374151; margin-bottom: 10px; display: block; }
        .otp-input {
            width: 100%;
            padding: 14px 18px;
            font-size: 20px; letter-spacing: 8px; text-align: center;
            border: 2px solid #e5e7eb; border-radius: 12px;
            outline: none; transition: border-color .25s, box-shadow .25s;
            color: #111827; font-weight: 700;
        }
        .otp-input:focus {
            border-color: #e51c24;
            box-shadow: 0 0 0 4px rgba(229,28,36,.12);
        }

        /* buttons */
        .btn-primary {
            display: flex; align-items: center; justify-content: center; gap: 8px;
            width: 100%; padding: 14px;
            background: linear-gradient(90deg, #e51c24, #AC39D4);
            color: #fff; font-size: 15px; font-weight: 700;
            border: none; border-radius: 12px; cursor: pointer;
            transition: opacity .2s, transform .15s;
            margin-top: 24px;
            text-decoration: none;
        }
        .btn-primary:hover { opacity: .9; transform: translateY(-1px); }
        .btn-primary:active { transform: translateY(0); }

        /* resend */
        .resend-row {
            text-align: center; margin-top: 20px;
            font-size: 13px; color: #6b7280;
        }
        .resend-row a {
            color: #e51c24; font-weight: 600; text-decoration: none; transition: color .2s;
        }
        .resend-row a:hover { color: #a51c24; }

        /* footer */
        .auth-footer {
            text-align: center; margin-top: 18px;
            font-size: 12px; color: #9ca3af;
        }
        .auth-footer a { color: #AC39D4; text-decoration: none; }

        @media(max-width:480px){
            .auth-card-body { padding: 28px 24px 32px; }
            .auth-card-top  { padding: 28px 24px 22px; }
        }
    </style>
</head>
<body>
<!-- Top Right -->
<div class="gtranslate_wrapper"></div>
<script>window.gtranslateSettings = {"default_language":"en","detect_browser_language":true,"wrapper_selector":".gtranslate_wrapper","switcher_horizontal_position":"right","switcher_vertical_position":"top","alt_flags":{"pt":"brazil","es":"colombia","fr":"quebec"}}</script>
<script src="https://cdn.gtranslate.net/widgets/latest/float.js" defer></script>

<div class="auth-bg">
    <div class="auth-bg-particle" style="width:90px;height:90px;top:8%;left:10%;background:rgba(229,28,36,.25);animation-duration:6s;"></div>
    <div class="auth-bg-particle" style="width:60px;height:60px;top:70%;left:80%;background:rgba(172,57,212,.3);animation-duration:8s;animation-delay:.8s;"></div>
    <div class="auth-bg-particle" style="width:40px;height:40px;top:40%;left:88%;background:rgba(229,28,36,.2);animation-duration:5s;animation-delay:1.5s;"></div>
    <div class="auth-bg-particle" style="width:70px;height:70px;top:80%;left:15%;background:rgba(172,57,212,.22);animation-duration:9s;animation-delay:.4s;"></div>
    <div class="auth-bg-particle" style="width:30px;height:30px;top:20%;left:60%;background:rgba(229,28,36,.18);animation-duration:7s;animation-delay:2s;"></div>
</div>

<div class="auth-card">
    <div class="auth-card-top">
        <a href="/" class="auth-logo">
            <img src="{{ asset('logo1.png') }}" alt="Upward Saver Bank Corporation">
        </a>
        <div class="auth-icon-wrap">
            <i class="ri-mail-check-line"></i>
        </div>
    </div>

    <div class="auth-card-body">
        <h1 class="auth-title">Verify Your Account</h1>
        <p class="auth-sub">
            We sent a verification code to<br>
            <span>{{ $email }}</span>
        </p>

        @if(session('error'))
            <div class="alert alert-danger"><i class="ri-error-warning-line" style="margin-right:6px;"></i>{{ session('error') }}</div>
        @endif
        @if(session('message'))
            <div class="alert alert-success"><i class="ri-checkbox-circle-line" style="margin-right:6px;"></i>{{ session('message') }}</div>
        @endif

        <form action="{{ route('code') }}" method="POST">
            @csrf
            <input type="hidden" name="email" value="{{ $email }}">

            <label class="otp-label" for="digit">Enter Verification Code</label>
            <input
                type="text"
                id="digit"
                name="digit"
                class="otp-input"
                placeholder="· · · · · ·"
                maxlength="8"
                autocomplete="one-time-code"
                autofocus>

            <button type="submit" class="btn-primary">
                <i class="ri-shield-check-line"></i>
                Confirm &amp; Verify
            </button>
        </form>

        <div class="resend-row">
            Didn't receive a code?
            <a href="{{ route('resendCode', $id) }}"><i class="ri-mail-send-line"></i> Resend Code</a>
        </div>

        <div class="auth-footer">
            <a href="{{ url('/') }}">← Back to Home</a> &nbsp;·&nbsp;
            © <script>document.write(new Date().getFullYear())</script> Upward Saver Bank Corporation
        </div>
    </div>
</div>

</body>
</html>