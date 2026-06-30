<!DOCTYPE html>
<html lang="en">
<head>
    <title>Choose Account Type - Upward Saver Bank Corporation</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="02W95pTDClVSYljhmiWs67M5nPMlATuldSal47LH">
    <meta name="robots" content="index, follow">
    <meta name="apple-mobile-web-app-title" content="Upward Saver Bank Corporation">
    <meta name="application-name" content="Upward Saver Bank Corporation">
    <meta name="description" content="Swift and Secure Money Transfer to any UK bank account will become a breeze with Upward Saver Bank Corporation.">
    <link rel="shortcut icon" href="{{ asset('logo1.png') }}" type="image/png">
    
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#ffe0e1',
                            100: '#ffb3b5',
                            200: '#ff8082',
                            300: '#ff4d55',
                            400: '#ff2028',
                            500: '#e51c24',
                            600: '#e51c24',
                            700: '#a51c24',
                            800: '#a51c24',
                            900: '#7a1018',
                        },
                        secondary: {
                            50: '#f3d6fc',
                            100: '#e4a8f7',
                            200: '#d47af2',
                            300: '#c04ce8',
                            400: '#b63fdb',
                            500: '#AC39D4',
                            600: '#AC39D4',
                            700: '#8a2aaa',
                            800: '#6e2085',
                            900: '#511660',
                        }
                    },
                    fontFamily: {
                        'sans': ['Lato', 'sans-serif'],
                    },
                    animation: {
                        'pulse-slow': 'pulse 3s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                    }
                }
            }
        }
    </script>
    
    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
    
    <!-- CSS Variables -->
    <script>
        // Set CSS theme variables
        document.documentElement.style.setProperty('--primary-color', '#e51c24');
        document.documentElement.style.setProperty('--primary-color-dark', '#a51c24');
        document.documentElement.style.setProperty('--primary-color-light', '#ff4d55');
        document.documentElement.style.setProperty('--secondary-color', '#AC39D4');
        document.documentElement.style.setProperty('--secondary-color-dark', '#8a2aaa');
        document.documentElement.style.setProperty('--secondary-color-light', '#c860e0');
        document.documentElement.style.setProperty('--text-color', '#111827');
        document.documentElement.style.setProperty('--bg-color', '#f9fafb');
        document.documentElement.style.setProperty('--card-bg-color', '#ffffff');
    </script>
    
        
    <!-- Modern Loading Animation -->
    <style>
        .page-loading {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            transition: all .4s .2s ease-in-out;
            background-color: #ffffff;
            visibility: hidden;
            z-index: 9999;
        }
        .page-loading.active {
            opacity: 1;
            visibility: visible;
        }
        .page-loading-inner {
            position: absolute;
            top: 50%;
            left: 0;
            width: 100%;
            text-align: center;
            transform: translateY(-50%);
            transition: opacity .2s ease-in-out;
            opacity: 0;
        }
        .page-loading.active>.page-loading-inner {
            opacity: 1;
        }
        
        .loading-container {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }
        
        .loading-animation {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 80px;
            height: 80px;
            margin-bottom: 1rem;
            position: relative;
        }
        
        .loading-animation .circle {
            position: absolute;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            border: 4px solid transparent;
            mix-blend-mode: overlay;
            animation: rotateCircle 1.5s linear infinite;
        }
        
        .loading-animation .circle:nth-child(1) {
            border-top-color: var(--primary-color);
            animation-delay: 0s;
        }
        
        .loading-animation .circle:nth-child(2) {
            border-right-color: var(--primary-color-light);
            animation-delay: 0.2s;
        }
        
        .loading-animation .circle:nth-child(3) {
            border-bottom-color: var(--secondary-color);
            animation-delay: 0.4s;
        }
        
        .loading-animation .circle:nth-child(4) {
            border-left-color: var(--primary-color-light);
            animation-delay: 0.6s;
        }
        
        .loading-animation .core {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: linear-gradient(45deg, var(--primary-color-light), var(--primary-color-dark));
            box-shadow: 0 0 15px rgba(59, 130, 246, 0.5);
            animation: pulse 1s ease-in-out infinite alternate;
        }
        
        .page-loading .text {
            color: var(--primary-color);
            font-weight: 500;
            letter-spacing: 0.05em;
            margin-top: 0.5rem;
            font-size: 0.875rem;
            background: linear-gradient(90deg, var(--primary-color-dark), var(--primary-color-light), var(--primary-color-dark));
            background-size: 200% auto;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: gradient 2s linear infinite;
        }
        
        @keyframes  rotateCircle {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        
        @keyframes  pulse {
            from { transform: scale(0.8); opacity: 0.8; }
            to { transform: scale(1.2); opacity: 1; }
        }
        
        @keyframes  gradient {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        
        /* Floating elements animation */
        .floating {
            animation: floating 3s ease-in-out infinite;
        }
        .floating-slow {
            animation: floating 6s ease-in-out infinite;
        }
        .floating-slower {
            animation: floating 8s ease-in-out infinite;
        }
        
        @keyframes  floating {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }
        
        /* Interactive elements */
        .input-wrapper {
            position: relative;
            transition: all 0.3s ease;
        }
        
        .input-wrapper:focus-within {
            transform: translateY(-2px);
        }
        
        .input-icon {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            left: 1rem;
            color: #94a3b8;
            transition: color 0.3s ease;
        }
        
        .input-wrapper:focus-within .input-icon {
            color: var(--primary-color);
        }
        
        input:focus + .input-toggle {
            color: var(--primary-color);
        }
    </style>
    <!-- Web Application Manifest -->
<link rel="manifest" href="{{ asset('manifest.json') }}">
<!-- Chrome for Android theme color -->
<meta name="theme-color" content="#e51c24">

<!-- Add to homescreen for Chrome on Android -->
<meta name="mobile-web-app-capable" content="yes">
<meta name="application-name" content="Upward Saver Bank Corporation">
<link rel="icon" sizes="512x512" href="{{ asset('logo1.png') }}">

<!-- Add to homescreen for Safari on iOS -->
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="apple-mobile-web-app-title" content="Upward Saver Bank Corporation">
<link rel="apple-touch-icon" href="{{ asset('logo1.png') }}">


<link href="/images/icons/splash-640x1136.png" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
<link href="/images/icons/splash-750x1334.png" media="(device-width: 375px) and (device-height: 667px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
<link href="/images/icons/splash-1242x2208.png" media="(device-width: 621px) and (device-height: 1104px) and (-webkit-device-pixel-ratio: 3)" rel="apple-touch-startup-image" />
<link href="/images/icons/splash-1125x2436.png" media="(device-width: 375px) and (device-height: 812px) and (-webkit-device-pixel-ratio: 3)" rel="apple-touch-startup-image" />
<link href="/images/icons/splash-828x1792.png" media="(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
<link href="/images/icons/splash-1242x2688.png" media="(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 3)" rel="apple-touch-startup-image" />
<link href="/images/icons/splash-1536x2048.png" media="(device-width: 768px) and (device-height: 1024px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
<link href="/images/icons/splash-1668x2224.png" media="(device-width: 834px) and (device-height: 1112px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
<link href="/images/icons/splash-1668x2388.png" media="(device-width: 834px) and (device-height: 1194px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
<link href="/images/icons/splash-2048x2732.png" media="(device-width: 1024px) and (device-height: 1366px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />

<!-- Tile for Win8 -->
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/images/icons/icon-512x512.png">

<script type="text/javascript">
    // Initialize the service worker
    if ('serviceWorker' in navigator) {
        navigator.serviceWorker.register('/serviceworker.js', {
            scope: '.'
        }).then(function (registration) {
            // Registration was successful
            console.log('Laravel PWA: ServiceWorker registration successful with scope: ', registration.scope);
        }, function (err) {
            // registration failed :(
            console.log('Laravel PWA: ServiceWorker registration failed: ', err);
        });
    }
</script></head>

<body class="font-sans bg-gray-50 text-gray-900 flex min-h-screen">
    <!-- Page Loader -->
    <div class="page-loading active">
        <div class="page-loading-inner">
            <div class="loading-container">
                <div class="loading-animation">
                    <div class="circle"></div>
                    <div class="circle"></div>
                    <div class="circle"></div>
                    <div class="circle"></div>
                    <div class="core"></div>
                </div>
                <div class="text">Upward Saver Bank Corporation</div>
            </div>
        </div>
    </div>
    
    <!-- Main Content -->
    <div class="w-full">
        
<div class="min-h-screen bg-gray-50 flex flex-col items-center justify-center px-4 py-16 md:px-8">
    <!-- Header with Logo -->
    <div class="text-center mb-12">
        <a href="/" class="inline-block mb-6">
            <img src="{{ asset('our-logo.png') }}" class="h-16 mx-auto" alt="Logo">
        </a>
        <h2 class="text-4xl font-extrabold text-gray-900 tracking-tight">Choose Account Type</h2>
        <p class="text-gray-600 mt-3 text-lg max-w-md mx-auto">
            Select the account you would like to open with us.
        </p>
    </div>

    <!-- Cards Grid -->
    <div class="grid md:grid-cols-2 gap-8 max-w-4xl w-full">
        <!-- Personal Account -->
        <div class="group bg-white rounded-2xl shadow-md hover:shadow-xl border border-gray-100 hover:border-red-500/30 transition-all duration-300 p-8 transform hover:-translate-y-1 flex flex-col justify-between">
            <div>
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-red-500 to-rose-600 flex items-center justify-center text-white shadow-md shadow-red-500/20">
                        <i data-lucide="user" class="h-7 w-7"></i>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold text-gray-900">Personal Account</h3>
                        <p class="text-sm text-gray-500 mt-0.5">For individuals and everyday banking.</p>
                    </div>
                </div>

                <ul class="space-y-3 text-gray-600 mb-8 text-sm">
                    <li class="flex items-center">
                        <i data-lucide="check" class="h-4 w-4 text-emerald-500 mr-2 flex-shrink-0"></i>
                        Savings & Current Accounts
                    </li>
                    <li class="flex items-center">
                        <i data-lucide="check" class="h-4 w-4 text-emerald-500 mr-2 flex-shrink-0"></i>
                        Debit Card
                    </li>
                    <li class="flex items-center">
                        <i data-lucide="check" class="h-4 w-4 text-emerald-500 mr-2 flex-shrink-0"></i>
                        Online Banking
                    </li>
                    <li class="flex items-center">
                        <i data-lucide="check" class="h-4 w-4 text-emerald-500 mr-2 flex-shrink-0"></i>
                        Mobile Banking
                    </li>
                    <li class="flex items-center">
                        <i data-lucide="check" class="h-4 w-4 text-emerald-500 mr-2 flex-shrink-0"></i>
                        Instant Transfers
                    </li>
                    <li class="flex items-center">
                        <i data-lucide="check" class="h-4 w-4 text-emerald-500 mr-2 flex-shrink-0"></i>
                        Bill Payments
                    </li>
                </ul>
            </div>

            <a href="{{ route('register') }}"
               class="inline-flex items-center justify-center w-full bg-gradient-to-r from-red-600 to-rose-500 hover:from-red-700 hover:to-rose-600 text-white rounded-xl py-3.5 font-bold shadow-lg shadow-red-600/20 transition-all duration-300 group-hover:shadow-red-600/30">
                Open Personal Account
                <i data-lucide="arrow-right" class="ml-2 h-5 w-5 transition-transform group-hover:translate-x-1"></i>
            </a>
        </div>

        <!-- Corporate Account -->
        <div class="group bg-white rounded-2xl shadow-md hover:shadow-xl border border-gray-100 hover:border-purple-500/30 transition-all duration-300 p-8 transform hover:-translate-y-1 flex flex-col justify-between">
            <div>
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-purple-500 to-indigo-600 flex items-center justify-center text-white shadow-md shadow-purple-500/20">
                        <i data-lucide="building-2" class="h-7 w-7"></i>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold text-gray-900">Corporate Account</h3>
                        <p class="text-sm text-gray-500 mt-0.5">For registered businesses and organizations.</p>
                    </div>
                </div>

                <ul class="space-y-3 text-gray-600 mb-8 text-sm">
                    <li class="flex items-center">
                        <i data-lucide="check" class="h-4 w-4 text-emerald-500 mr-2 flex-shrink-0"></i>
                        Business Banking
                    </li>
                    <li class="flex items-center">
                        <i data-lucide="check" class="h-4 w-4 text-emerald-500 mr-2 flex-shrink-0"></i>
                        Payroll Processing
                    </li>
                    <li class="flex items-center">
                        <i data-lucide="check" class="h-4 w-4 text-emerald-500 mr-2 flex-shrink-0"></i>
                        Bulk Payments
                    </li>
                    <li class="flex items-center">
                        <i data-lucide="check" class="h-4 w-4 text-emerald-500 mr-2 flex-shrink-0"></i>
                        Multi-user Access
                    </li>
                    <li class="flex items-center">
                        <i data-lucide="check" class="h-4 w-4 text-emerald-500 mr-2 flex-shrink-0"></i>
                        Corporate Cards
                    </li>
                    <li class="flex items-center">
                        <i data-lucide="check" class="h-4 w-4 text-emerald-500 mr-2 flex-shrink-0"></i>
                        Relationship Manager
                    </li>
                </ul>
            </div>

            <a href="{{ route('register.corporate') }}"
               class="inline-flex items-center justify-center w-full bg-gradient-to-r from-purple-600 to-indigo-500 hover:from-purple-700 hover:to-indigo-600 text-white rounded-xl py-3.5 font-bold shadow-lg shadow-purple-600/20 transition-all duration-300 group-hover:shadow-purple-600/30">
                Open Corporate Account
                <i data-lucide="arrow-right" class="ml-2 h-5 w-5 transition-transform group-hover:translate-x-1"></i>
            </a>
        </div>
    </div>

    <!-- Login Link -->
    <div class="text-center mt-12">
        <span class="text-gray-500">Already have an account?</span>
        <a href="{{ route('login') }}" class="font-bold text-red-600 hover:text-red-700 hover:underline ml-1">
            Sign In
        </a>
    </div>
</div>

</div> <!-- Closes the div w-full -->

<!-- Initialize Lucide Icons -->
<script>
    lucide.createIcons();
</script>

<!-- Enhanced Page Loading Animation -->
<script>
    window.onload = function() {
        const preloader = document.querySelector('.page-loading');
        
        setTimeout(function() {
            preloader.classList.remove('active');
            setTimeout(function() {
                preloader.remove();
            }, 500);
        }, 800);
    };
</script>

<div class="gtranslate_wrapper"></div> 
<script>
    window.gtranslateSettings = {"default_language":"en","detect_browser_language":true,"wrapper_selector":".gtranslate_wrapper","switcher_horizontal_position":"right","switcher_vertical_position":"top","alt_flags":{"pt":"brazil","es":"colombia","fr":"quebec"}}
</script> 
<script src="https://cdn.gtranslate.net/widgets/latest/float.js" defer></script>
</body>
</html>
