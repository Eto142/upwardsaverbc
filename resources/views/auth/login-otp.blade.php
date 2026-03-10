<!DOCTYPE html>
<html lang="en">
<head>
    <title>Verify Login — Upward Saver Bank Corporation</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="index, follow">
    <meta name="description" content="Enter the one-time code sent to your email to complete sign-in.">
    <link rel="shortcut icon" href="https://ccufinance.com/storage/app/public/photos/SogsHXqU6Y0ICRb6DyZgVRWFyDOm44mgql9lWKwW.png">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50:  '#ffe0e1', 100: '#ffb3b5', 200: '#ff8082',
                            300: '#ff4d55', 400: '#ff2028', 500: '#e51c24',
                            600: '#e51c24', 700: '#a51c24', 800: '#a51c24', 900: '#7a1018',
                        },
                        secondary: { 500: '#AC39D4', 600: '#AC39D4', 700: '#8a2aaa' }
                    },
                    fontFamily: { 'sans': ['Lato', 'sans-serif'] },
                }
            }
        }
    </script>

    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">

    <style>
        .page-loading{position:fixed;top:0;right:0;bottom:0;left:0;width:100%;height:100%;transition:all .4s .2s ease-in-out;background-color:#fff;visibility:hidden;opacity:0;z-index:9999}
        .page-loading.active{opacity:1;visibility:visible}
        .page-loading-inner{position:absolute;top:50%;left:0;width:100%;text-align:center;transform:translateY(-50%);transition:opacity .2s ease-in-out;opacity:0}
        .page-loading.active>.page-loading-inner{opacity:1}
        .loading-container{display:flex;align-items:center;justify-content:center;flex-direction:column}
        .loading-animation{display:flex;align-items:center;justify-content:center;width:80px;height:80px;margin-bottom:1rem;position:relative}
        .loading-animation .circle{position:absolute;width:100%;height:100%;border-radius:50%;border:4px solid transparent;animation:rotateCircle 1.5s linear infinite}
        .loading-animation .circle:nth-child(1){border-top-color:#e51c24;animation-delay:0s}
        .loading-animation .circle:nth-child(2){border-right-color:#ff4d55;animation-delay:.2s}
        .loading-animation .circle:nth-child(3){border-bottom-color:#AC39D4;animation-delay:.4s}
        .loading-animation .circle:nth-child(4){border-left-color:#ff4d55;animation-delay:.6s}
        .loading-animation .core{width:20px;height:20px;border-radius:50%;background:linear-gradient(45deg,#ff4d55,#a51c24);animation:corePulse 1s ease-in-out infinite alternate}
        .page-loading .text{color:#e51c24;font-weight:500;letter-spacing:.05em;margin-top:.5rem;font-size:.875rem;background:linear-gradient(90deg,#a51c24,#ff4d55,#a51c24);background-size:200% auto;-webkit-background-clip:text;-webkit-text-fill-color:transparent;animation:gradientFlow 2s linear infinite}
        @keyframes rotateCircle{0%{transform:rotate(0deg)}100%{transform:rotate(360deg)}}
        @keyframes corePulse{from{transform:scale(.8);opacity:.8}to{transform:scale(1.2);opacity:1}}
        @keyframes gradientFlow{0%{background-position:0% 50%}50%{background-position:100% 50%}100%{background-position:0% 50%}}
        @keyframes floating{0%{transform:translateY(0)}50%{transform:translateY(-10px)}100%{transform:translateY(0)}}
        .floating{animation:floating 3s ease-in-out infinite}
        .floating-slow{animation:floating 6s ease-in-out infinite}
        .floating-slower{animation:floating 8s ease-in-out infinite}
        .otp-digit{width:46px;height:56px;border:2px solid #d1d5db;border-radius:10px;text-align:center;font-size:22px;font-weight:700;color:#111827;background:#fff;outline:none;transition:border-color .2s,box-shadow .2s;-webkit-appearance:none;appearance:none;font-family:'Lato',sans-serif}
        .otp-digit:focus{border-color:#e51c24;box-shadow:0 0 0 3px rgba(229,28,36,.18)}
        .otp-digit.filled{border-color:#e51c24;background:#fff5f5}
    </style>
</head>

<body class="font-sans bg-gray-50 text-gray-900 flex min-h-screen">

    <!-- Page Loader -->
    <div class="page-loading active">
        <div class="page-loading-inner">
            <div class="loading-container">
                <div class="loading-animation">
                    <div class="circle"></div><div class="circle"></div>
                    <div class="circle"></div><div class="circle"></div>
                    <div class="core"></div>
                </div>
                <div class="text">Upward Saver Bank Corporation</div>
            </div>
        </div>
    </div>

    <div class="w-full">
        <div class="flex flex-col lg:flex-row min-h-screen">

            <!-- Left Branding Panel -->
            <div class="hidden lg:flex lg:w-1/2 relative overflow-hidden" style="background:linear-gradient(135deg,#1a1426 0%,#e51c24 55%,#AC39D4 100%)">
                <div class="absolute inset-0 overflow-hidden opacity-10">
                    <div class="absolute top-1/4 left-1/4 w-64 h-64 bg-white rounded-full mix-blend-overlay floating-slow"></div>
                    <div class="absolute bottom-1/3 right-1/4 w-96 h-96 bg-white rounded-full mix-blend-overlay floating"></div>
                    <div class="absolute top-2/3 left-1/3 w-40 h-40 bg-white rounded-full mix-blend-overlay floating-slower"></div>
                    <div class="absolute inset-0" style="background-image:radial-gradient(rgba(255,255,255,0.1) 1px,transparent 1px);background-size:20px 20px"></div>
                </div>
                <div class="relative flex flex-col justify-center items-center w-full h-full text-white p-12 z-10">
                    <a href="/" class="mb-6"><img src="logo02.png" alt="Logo" class="h-16 filter brightness-0 invert"></a>
                    <h1 class="text-4xl font-extrabold mb-6 text-center">Two-Factor Authentication</h1>
                    <p class="text-xl mb-8 max-w-md text-center text-white/80">Your account is protected with an extra layer of security. A one-time code was sent to your registered email.</p>
                    <div class="grid grid-cols-2 gap-6 w-full max-w-md">
                        <div class="flex items-center space-x-3">
                            <div class="flex-shrink-0 w-10 h-10 rounded-full bg-white/20 flex items-center justify-center"><i data-lucide="shield-check" class="h-5 w-5"></i></div>
                            <span>Two-Factor Auth</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="flex-shrink-0 w-10 h-10 rounded-full bg-white/20 flex items-center justify-center"><i data-lucide="timer" class="h-5 w-5"></i></div>
                            <span>10-Min Expiry</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="flex-shrink-0 w-10 h-10 rounded-full bg-white/20 flex items-center justify-center"><i data-lucide="lock" class="h-5 w-5"></i></div>
                            <span>Phishing Protected</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="flex-shrink-0 w-10 h-10 rounded-full bg-white/20 flex items-center justify-center"><i data-lucide="key" class="h-5 w-5"></i></div>
                            <span>One-Time Only</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Form Panel -->
            <div class="w-full lg:w-1/2 flex flex-col justify-center items-center p-6 lg:p-12">
                <div class="w-full max-w-md">

                    <!-- Mobile Logo -->
                    <div class="lg:hidden text-center mb-8">
                        <a href="/"><img src="logo02.png" alt="Logo" class="h-12 mx-auto"></a>
                    </div>

                    <!-- Card -->
                    <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
                        <!-- Header -->
                        <div class="px-8 pt-8 pb-6 text-center">
                            <div class="w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4" style="background:linear-gradient(135deg,#e51c24,#a51c24)">
                                <i data-lucide="shield-check" class="h-8 w-8 text-white"></i>
                            </div>
                            <h2 class="text-2xl font-bold text-gray-900">Enter Verification Code</h2>
                            <p class="mt-2 text-sm text-gray-600">We sent a 6-digit code to your email. Enter it below to complete sign-in.</p>
                        </div>

                        <!-- Body -->
                        <div class="px-8 pb-8">

                            @if (session('error'))
                            <div class="mb-4 flex items-center gap-2 text-sm text-red-600 bg-red-50 border border-red-200 rounded-lg p-3">
                                <i data-lucide="alert-circle" class="h-4 w-4 flex-shrink-0"></i>
                                <span>{{ session('error') }}</span>
                            </div>
                            @endif

                            <div id="ajaxError" class="hidden mb-4 flex items-center gap-2 text-sm text-red-600 bg-red-50 border border-red-200 rounded-lg p-3">
                                <i data-lucide="alert-circle" class="h-4 w-4 flex-shrink-0"></i><span></span>
                            </div>
                            <div id="ajaxSuccess" class="hidden mb-4 flex items-center gap-2 text-sm text-green-600 bg-green-50 border border-green-200 rounded-lg p-3">
                                <i data-lucide="check-circle" class="h-4 w-4 flex-shrink-0"></i><span></span>
                            </div>

                            <!-- Hint -->
                            <div class="mb-5 bg-red-50 border border-red-100 rounded-xl p-3 text-center">
                                <p class="text-sm text-gray-600">A 6-digit code was sent to your registered email address.<br><strong class="text-primary-600">Check your inbox (and spam folder).</strong></p>
                            </div>

                            <!-- Form -->
                            <form id="otpForm" action="{{ route('login.otp.verify') }}" method="POST">
                                @csrf
                                <input type="hidden" name="otp" id="otpHidden">

                                <div class="flex gap-2 justify-center mb-2">
                                    <input class="otp-digit" type="text" maxlength="1" inputmode="numeric" pattern="[0-9]" autocomplete="one-time-code" data-index="0">
                                    <input class="otp-digit" type="text" maxlength="1" inputmode="numeric" pattern="[0-9]" data-index="1">
                                    <input class="otp-digit" type="text" maxlength="1" inputmode="numeric" pattern="[0-9]" data-index="2">
                                    <input class="otp-digit" type="text" maxlength="1" inputmode="numeric" pattern="[0-9]" data-index="3">
                                    <input class="otp-digit" type="text" maxlength="1" inputmode="numeric" pattern="[0-9]" data-index="4">
                                    <input class="otp-digit" type="text" maxlength="1" inputmode="numeric" pattern="[0-9]" data-index="5">
                                </div>

                                <!-- Expiry bar -->
                                <div class="h-1 bg-gray-200 rounded-full overflow-hidden mb-1 mt-4">
                                    <div id="expiryBar" class="h-full rounded-full transition-all duration-1000" style="width:100%;background:linear-gradient(90deg,#e51c24,#AC39D4)"></div>
                                </div>
                                <p class="text-center text-xs text-gray-400 mb-5">Code expires in <span id="expiryText" class="font-semibold text-primary-600">10:00</span></p>

                                <!-- Submit button -->
                                <button type="submit" id="verifyBtn" disabled
                                    class="w-full py-3 px-4 bg-primary-600 hover:bg-primary-700 text-white font-medium rounded-lg shadow transition duration-150 ease-in-out flex items-center justify-center disabled:opacity-50 disabled:cursor-not-allowed">
                                    <span id="btn-idle" class="flex items-center">
                                        <i data-lucide="shield-check" class="h-5 w-5 mr-2"></i>
                                        Verify &amp; Sign In
                                    </span>
                                    <span id="btn-loading" class="hidden flex items-center">
                                        <svg class="animate-spin h-5 w-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v4a4 4 0 00-4 4H4z"></path>
                                        </svg>
                                        Verifying&hellip;
                                    </span>
                                </button>
                            </form>

                            <!-- Resend row -->
                            <div class="flex items-center justify-center gap-2 mt-4 text-sm text-gray-500">
                                <span>Didn't receive it?</span>
                                <button id="resendBtn" disabled
                                    class="font-semibold text-primary-600 hover:text-primary-700 underline disabled:text-gray-400 disabled:no-underline disabled:cursor-not-allowed bg-transparent border-0 p-0 cursor-pointer">
                                    Resend code
                                </button>
                                <span>in <span id="countdown" class="font-semibold text-primary-600 inline-block min-w-[28px] text-center">60s</span></span>
                            </div>

                            <!-- Back link -->
                            <div class="mt-6 text-center">
                                <a href="{{ route('login') }}" class="inline-flex items-center gap-1 text-sm text-gray-500 hover:text-primary-600">
                                    <i data-lucide="arrow-left" class="h-4 w-4"></i>
                                    Back to sign in
                                </a>
                            </div>

                        </div>
                    </div>

                    <div class="mt-8 text-center">
                        <p class="text-sm text-gray-600">By signing in, you agree to our
                            <a href="#" class="text-primary-600 hover:text-primary-500">Terms of Service</a> and
                            <a href="#" class="text-primary-600 hover:text-primary-500">Privacy Policy</a>
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script>lucide.createIcons();</script>

    <script>
        window.onload = function () {
            var pl = document.querySelector('.page-loading');
            setTimeout(function () {
                pl.classList.remove('active');
                setTimeout(function () { pl.remove(); }, 500);
            }, 800);
        };
    </script>

    <script>
    (function () {
        var digits    = document.querySelectorAll('.otp-digit');
        var hidden    = document.getElementById('otpHidden');
        var verifyBtn = document.getElementById('verifyBtn');
        var btnIdle   = document.getElementById('btn-idle');
        var btnLoad   = document.getElementById('btn-loading');
        var form      = document.getElementById('otpForm');
        var csrf      = document.querySelector('meta[name=csrf-token]').content;

        function resetBtn() {
            verifyBtn.disabled = false;
            btnIdle.classList.remove('hidden');
            btnLoad.classList.add('hidden');
        }
        function syncHidden() {
            var val = '';
            digits.forEach(function (b) { val += b.value || ''; });
            hidden.value = val;
            digits.forEach(function (b) { b.classList.toggle('filled', b.value !== ''); });
            verifyBtn.disabled = (val.length < 6);
        }
        digits.forEach(function (inp, idx) {
            inp.addEventListener('input', function () {
                this.value = this.value.replace(/[^0-9]/g, '').slice(0, 1);
                if (this.value && idx < 5) digits[idx + 1].focus();
                syncHidden();
            });
            inp.addEventListener('keydown', function (e) {
                if (e.key === 'Backspace' && !this.value && idx > 0) { digits[idx - 1].value = ''; digits[idx - 1].focus(); syncHidden(); }
                if (e.key === 'ArrowLeft'  && idx > 0) digits[idx - 1].focus();
                if (e.key === 'ArrowRight' && idx < 5) digits[idx + 1].focus();
            });
            inp.addEventListener('paste', function (e) {
                e.preventDefault();
                var p = (e.clipboardData || window.clipboardData).getData('text').replace(/\D/g, '').slice(0, 6);
                for (var i = 0; i < 6; i++) digits[i].value = p[i] || '';
                digits[Math.min(p.length, 5)].focus();
                syncHidden();
            });
        });

        function showError(msg) {
            var b = document.getElementById('ajaxError'); b.classList.remove('hidden'); b.querySelector('span').textContent = msg;
            document.getElementById('ajaxSuccess').classList.add('hidden');
        }
        function showSuccess(msg) {
            var b = document.getElementById('ajaxSuccess'); b.classList.remove('hidden'); b.querySelector('span').textContent = msg;
            document.getElementById('ajaxError').classList.add('hidden');
        }

        form.addEventListener('submit', function (e) {
            e.preventDefault();
            var otpVal = hidden.value;
            if (otpVal.length !== 6) { showError('Please enter all 6 digits.'); return; }
            verifyBtn.disabled = true;
            btnIdle.classList.add('hidden');
            btnLoad.classList.remove('hidden');
            document.getElementById('ajaxError').classList.add('hidden');
            document.getElementById('ajaxSuccess').classList.add('hidden');

            var safetyTimer = setTimeout(function () { resetBtn(); showError('Request timed out. Please try again.'); }, 15000);

            fetch('{{ route("login.otp.verify") }}', {
                method: 'POST',
                headers: { 'X-CSRF-TOKEN': csrf, 'Accept': 'application/json', 'Content-Type': 'application/x-www-form-urlencoded' },
                body: '_token=' + encodeURIComponent(csrf) + '&otp=' + encodeURIComponent(otpVal)
            })
            .then(function (res) {
                clearTimeout(safetyTimer);
                return res.text().then(function (t) { try { return { status: res.status, data: JSON.parse(t) }; } catch (ex) { return { status: res.status, data: null }; } });
            })
            .then(function (r) {
                if (!r.data) { resetBtn(); showError('Unexpected server response.'); return; }
                if (r.status === 419) { showError('Session expired. Reloading...'); setTimeout(function () { window.location.reload(); }, 1500); return; }
                if (r.status === 422) { resetBtn(); showError((r.data.errors && r.data.errors.otp && r.data.errors.otp[0]) || r.data.message || 'Please enter a valid 6-digit code.'); return; }
                if (r.data.content === 'Successful') { window.location.href = r.data.redirect; }
                else { resetBtn(); showError(r.data.message || 'Invalid code. Please try again.'); digits.forEach(function (b) { b.value = ''; }); hidden.value = ''; digits[0].focus(); }
            })
            .catch(function () { clearTimeout(safetyTimer); resetBtn(); showError('Network error. Please check your connection.'); });
        });

        var resendBtn = document.getElementById('resendBtn');
        var countdownEl = document.getElementById('countdown');
        var resendSecs = 60;
        function startResendTimer() {
            resendSecs = 60; resendBtn.disabled = true;
            var t = setInterval(function () {
                resendSecs--;
                countdownEl.textContent = resendSecs > 0 ? resendSecs + 's' : '';
                if (resendSecs <= 0) { clearInterval(t); resendBtn.disabled = false; countdownEl.textContent = ''; }
            }, 1000);
        }
        startResendTimer();
        resendBtn.addEventListener('click', function () {
            resendBtn.disabled = true; resendBtn.textContent = 'Sending\u2026';
            fetch('{{ route("login.otp.resend") }}', { method: 'POST', headers: { 'X-CSRF-TOKEN': csrf, 'Accept': 'application/json', 'Content-Type': 'application/x-www-form-urlencoded' }, body: '_token=' + encodeURIComponent(csrf) })
            .then(function (r) { return r.json(); })
            .then(function (d) {
                resendBtn.textContent = 'Resend code';
                if (d.content === 'Successful') { showSuccess(d.message || 'New code sent to your email.'); startResendTimer(); }
                else { resendBtn.disabled = false; showError(d.message || 'Failed to resend.'); }
            })
            .catch(function () { resendBtn.textContent = 'Resend code'; resendBtn.disabled = false; showError('Network error.'); });
        });

        var totalSecs = 600;
        var expiryBar = document.getElementById('expiryBar');
        var expiryText = document.getElementById('expiryText');
        var expiryTimer = setInterval(function () {
            totalSecs--;
            if (totalSecs <= 0) {
                clearInterval(expiryTimer);
                expiryBar.style.width = '0%'; expiryBar.style.background = '#ef4444';
                expiryText.textContent = 'Expired'; expiryText.style.color = '#ef4444';
                showError('Your code has expired. Please sign in again.');
                verifyBtn.disabled = true; return;
            }
            var m = Math.floor(totalSecs / 60), s = totalSecs % 60;
            expiryText.textContent = m + ':' + (s < 10 ? '0' : '') + s;
            expiryBar.style.width = (totalSecs / 600 * 100) + '%';
            if (totalSecs < 120) expiryBar.style.background = 'linear-gradient(90deg,#dc2626,#ef4444)';
        }, 1000);

        digits[0].focus();
    })();
    </script>

    <div class="gtranslate_wrapper"></div>
    <script>window.gtranslateSettings={"default_language":"en","detect_browser_language":true,"wrapper_selector":".gtranslate_wrapper","switcher_horizontal_position":"right","switcher_vertical_position":"top","alt_flags":{"pt":"brazil","es":"colombia","fr":"quebec"}}</script>
    <script src="https://cdn.gtranslate.net/widgets/latest/float.js" defer></script>

</body>
</html>
