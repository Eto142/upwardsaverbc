<!DOCTYPE html>
<html lang="en">
<head>
    <title>Account Under Review - Upward Saver Bank Corporation</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('our-logo.png') }}" type="image/png">
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body {
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
            min-height: 100vh; display: flex; align-items: center; justify-content: center;
            font-family: 'Segoe UI', sans-serif; padding: 24px;
        }
        .card {
            background: #fff; border-radius: 20px; max-width: 520px; width: 100%;
            box-shadow: 0 20px 60px rgba(0,0,0,.35); overflow: hidden;
        }
        .card-header {
            background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%);
            padding: 36px 40px 30px; text-align: center;
        }
        .card-header img { height: 50px; margin-bottom: 16px; display: block; margin-left: auto; margin-right: auto; }
        .card-header h1 { color: #fff; font-size: 1.3rem; font-weight: 700; }
        .card-header p  { color: #94a3b8; font-size: .88rem; margin-top: 6px; }
        .card-body { padding: 40px; }

        .status-icon {
            width: 90px; height: 90px; border-radius: 50%;
            background: linear-gradient(135deg, #fef3c7, #fde68a);
            display: flex; align-items: center; justify-content: center;
            margin: 0 auto 28px; font-size: 2.8rem;
            box-shadow: 0 8px 24px rgba(251,191,36,.3);
        }
        h2 { font-size: 1.35rem; font-weight: 700; color: #111827; text-align: center; margin-bottom: 10px; }
        .subtitle { color: #6b7280; text-align: center; font-size: .93rem; line-height: 1.6; margin-bottom: 28px; }

        .steps { list-style: none; padding: 0; margin-bottom: 28px; }
        .steps li {
            display: flex; align-items: flex-start; gap: 14px;
            padding: 14px 0; border-bottom: 1px solid #f3f4f6;
        }
        .steps li:last-child { border-bottom: none; }
        .step-num {
            width: 30px; height: 30px; border-radius: 50%; flex-shrink: 0;
            display: flex; align-items: center; justify-content: center;
            font-size: .8rem; font-weight: 700;
        }
        .step-done  { background: #d1fae5; color: #065f46; }
        .step-active{ background: #fef3c7; color: #92400e; }
        .step-pending{ background: #f3f4f6; color: #9ca3af; }
        .step-text { font-size: .88rem; }
        .step-text strong { display: block; color: #111827; margin-bottom: 2px; }
        .step-text span { color: #6b7280; }

        .info-box {
            background: #f0f9ff; border: 1px solid #bae6fd; border-radius: 12px;
            padding: 16px 20px; margin-bottom: 24px;
            display: flex; align-items: flex-start; gap: 12px;
        }
        .info-box i { color: #0284c7; font-size: 1.2rem; margin-top: 2px; flex-shrink: 0; }
        .info-box p { margin: 0; color: #0369a1; font-size: .87rem; line-height: 1.6; }

        .btn-outline {
            display: block; width: 100%; text-align: center; padding: 13px;
            border: 2px solid #e5e7eb; border-radius: 10px; color: #374151;
            font-weight: 600; font-size: .93rem; text-decoration: none; transition: all .2s;
            margin-bottom: 12px;
        }
        .btn-outline:hover { border-color: #1d4ed8; color: #1d4ed8; }
        .btn-logout {
            display: block; width: 100%; text-align: center; padding: 13px;
            border-radius: 10px; background: #f9fafb; color: #6b7280;
            font-size: .88rem; text-decoration: none; transition: background .2s;
        }
        .btn-logout:hover { background: #fee2e2; color: #dc2626; }

        @keyframes pulse { 0%,100%{opacity:1} 50%{opacity:.5} }
        .pulse-dot {
            display: inline-block; width: 8px; height: 8px; border-radius: 50%;
            background: #f59e0b; margin-right: 6px;
            animation: pulse 2s ease-in-out infinite;
        }
    </style>
</head>
<body>

<div class="card">
    <div class="card-header">
        <img src="{{ asset('our-logo.png') }}" alt="Logo">
        <h1>Upward Saver Bank Corporation</h1>
        <p>Account Verification Portal</p>
    </div>

    <div class="card-body">
        <div class="status-icon">⏳</div>

        <h2>Your Account Is Under Review</h2>
        <p class="subtitle">
            Thank you for submitting your identification documents.<br>
            Our compliance team is currently reviewing your application.
        </p>

        <ul class="steps">
            <li>
                <div class="step-num step-done"><i class="bi bi-check"></i></div>
                <div class="step-text">
                    <strong>Registration Complete</strong>
                    <span>Your account has been created successfully.</span>
                </div>
            </li>
            <li>
                @if(Auth::user()->id_card || Auth::user()->passport || Auth::user()->driver_license)
                    <div class="step-num step-done"><i class="bi bi-check"></i></div>
                @else
                    <div class="step-num step-active">2</div>
                @endif
                <div class="step-text">
                    <strong>
                        @if(Auth::user()->id_card || Auth::user()->passport || Auth::user()->driver_license)
                            Documents Submitted
                        @else
                            <span class="pulse-dot"></span>Upload ID Documents
                        @endif
                    </strong>
                    <span>
                        @if(Auth::user()->id_card || Auth::user()->passport || Auth::user()->driver_license)
                            Your documents have been received and are queued for review.
                        @else
                            You haven't uploaded your ID documents yet.
                        @endif
                    </span>
                </div>
            </li>
            <li>
                <div class="step-num step-pending">3</div>
                <div class="step-text">
                    <strong>Admin Approval</strong>
                    <span>Our team will verify your identity within 1–2 business days.</span>
                </div>
            </li>
            <li>
                <div class="step-num step-pending">4</div>
                <div class="step-text">
                    <strong>Account Activated</strong>
                    <span>You'll receive an email once your account is fully active.</span>
                </div>
            </li>
        </ul>

        <div class="info-box">
            <i class="bi bi-envelope"></i>
            <p>
                We'll send a confirmation email to <strong>{{ Auth::user()->email }}</strong>
                as soon as your account has been reviewed.
            </p>
        </div>

        @if(!Auth::user()->id_card && !Auth::user()->passport && !Auth::user()->driver_license)
            <a href="{{ route('kyc.upload.form') }}" class="btn-outline">
                <i class="bi bi-upload me-2"></i>Upload ID Documents
            </a>
        @else
            <a href="{{ route('kyc.upload.form') }}" class="btn-outline">
                <i class="bi bi-arrow-repeat me-2"></i>Re-upload Documents
            </a>
        @endif

        <a href="{{ route('sign.out') }}" class="btn-logout">
            <i class="bi bi-box-arrow-right me-1"></i> Log out
        </a>
    </div>
</div>

</body>
</html>
