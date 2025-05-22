<!DOCTYPE html>
<html lang="en">
<head>
    <title>Account Login - Upward Saver Bank Corporation</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="02W95pTDClVSYljhmiWs67M5nPMlATuldSal47LH">
    <meta name="robots" content="index, follow">
    <meta name="apple-mobile-web-app-title" content="Upward Saver Bank Corporation">
    <meta name="application-name" content="Upward Saver Bank Corporation">
    <meta name="description" content="Swift and Secure Money Transfer to any UK bank account will become a breeze with Upward Saver Bank Corporation.">
    <link rel="shortcut icon" href="https://ccufinance.com/storage/app/public/photos/SogsHXqU6Y0ICRb6DyZgVRWFyDOm44mgql9lWKwW.png">
    
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#38bdf8',
                            100: '#38bdf8',
                            200: '#38bdf8',
                            300: '#38bdf8',
                            400: '#38bdf8',
                            500: '#0ea5e9',
                            600: '#0ea5e9',
                            700: '#0369a1',
                            800: '#0369a1',
                            900: '#0369a1',
                        },
                        secondary: {
                            50: '#5eead4',
                            100: '#5eead4',
                            200: '#5eead4',
                            300: '#5eead4',
                            400: '#5eead4',
                            500: '#14b8a6',
                            600: '#14b8a6',
                            700: '#0f766e',
                            800: '#0f766e',
                            900: '#0f766e',
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
        document.documentElement.style.setProperty('--primary-color', '#0ea5e9');
        document.documentElement.style.setProperty('--primary-color-dark', '#0369a1');
        document.documentElement.style.setProperty('--primary-color-light', '#38bdf8');
        document.documentElement.style.setProperty('--secondary-color', '#14b8a6');
        document.documentElement.style.setProperty('--secondary-color-dark', '#0f766e');
        document.documentElement.style.setProperty('--secondary-color-light', '#5eead4');
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
<link rel="manifest" href="https://ccufinance.com/manifest.json">
<!-- Chrome for Android theme color -->
<meta name="theme-color" content="#000000">

<!-- Add to homescreen for Chrome on Android -->
<meta name="mobile-web-app-capable" content="yes">
<meta name="application-name" content="PWA">
<link rel="icon" sizes="512x512" href="/images/icons/icon-512x512.png">

<!-- Add to homescreen for Safari on iOS -->
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="apple-mobile-web-app-title" content="PWA">
<link rel="apple-touch-icon" href="/images/icons/icon-512x512.png">


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
        
<div class="flex flex-col lg:flex-row min-h-screen">
    <!-- Left Side - Branding & Illustration (Desktop Only) -->
    <div class="hidden lg:flex lg:w-1/2 bg-gradient-to-br from-primary-600 to-primary-800 relative overflow-hidden">
        <!-- Animated Shapes -->
        <div class="absolute inset-0 overflow-hidden opacity-10">
            <div class="absolute top-1/4 left-1/4 w-64 h-64 bg-white rounded-full mix-blend-overlay floating-slow"></div>
            <div class="absolute bottom-1/3 right-1/4 w-96 h-96 bg-white rounded-full mix-blend-overlay floating"></div>
            <div class="absolute top-2/3 left-1/3 w-40 h-40 bg-white rounded-full mix-blend-overlay floating-slower"></div>
            
            <!-- Grid pattern -->
            <div class="absolute inset-0" style="background-image: radial-gradient(rgba(255,255,255,0.1) 1px, transparent 1px); background-size: 20px 20px;"></div>
        </div>
        
        <!-- Content -->
        <div class="relative flex flex-col justify-center items-center w-full h-full text-white p-12 z-10">
            <!-- Logo -->
            <a href="/" class="mb-6">
                <img src="logo02.png" alt="Logo" class="h-16 filter brightness-0 invert">
            </a>
            
            <!-- Title -->
            <h1 class="text-4xl font-extrabold mb-6 text-center">Swift Money Transfer</h1>
            
            <!-- Description -->
            <p class="text-xl mb-8 max-w-md text-center text-white/80">
                Swift and Secure Money Transfer to any bank account will become a breeze with Upward Saver Bank Corporation.
            </p>
            
            <!-- Features -->
            <div class="grid grid-cols-2 gap-6 w-full max-w-md">
                <div class="flex items-center space-x-3">
                    <div class="flex-shrink-0 w-10 h-10 rounded-full bg-white/20 flex items-center justify-center">
                        <i data-lucide="shield" class="h-5 w-5"></i>
                    </div>
                    <span>Secure Transfers</span>
                </div>
                <div class="flex items-center space-x-3">
                    <div class="flex-shrink-0 w-10 h-10 rounded-full bg-white/20 flex items-center justify-center">
                        <i data-lucide="zap" class="h-5 w-5"></i>
                    </div>
                    <span>Lightning Fast</span>
                </div>
                <div class="flex items-center space-x-3">
                    <div class="flex-shrink-0 w-10 h-10 rounded-full bg-white/20 flex items-center justify-center">
                        <i data-lucide="globe" class="h-5 w-5"></i>
                    </div>
                    <span>Global Access</span>
                </div>
                <div class="flex items-center space-x-3">
                    <div class="flex-shrink-0 w-10 h-10 rounded-full bg-white/20 flex items-center justify-center">
                        <i data-lucide="smartphone" class="h-5 w-5"></i>
                    </div>
                    <span>Mobile Ready</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Right Side - Login Form -->
    <div class="w-full lg:w-1/2 flex flex-col justify-center items-center p-6 lg:p-12">
        <div class="w-full max-w-md">
            <!-- Mobile Logo -->
            <div class="lg:hidden text-center mb-8">
                <a href="/">
                    <img src="logo02.png" alt="Logo" class="h-12 mx-auto">
                </a>
            </div>
            
            <!-- Alerts -->
                        
                        
            <!-- Login Card -->
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
                <!-- Card Header -->
                <center><img class="logo-light" src="logo1.png" alt="Upward Saver Bank Corporation  " width="200" height="260"></center>
                <div class="px-8 pt-8 pb-6">
                    <h2 class="text-2xl font-bold text-gray-900">Sign In to Upward Saver Bank Corporation</h2>
                    <p class="mt-2 text-sm text-gray-600">Access the Upward Saver Bank Corporation panel using your email and password.</p>
                </div>
                
                <!-- Login Form -->
                <div class="px-8 pb-8">
                   <form class="form-horizontal" action="{{ route('login') }}" method="POST" id="login_form">
                                    @csrf
                                          @if (session('status'))
                                    <div class="alert alert-success text-success" style="color: green;" role="alert">
                                        {{ session('status') }}
                                    </div>
                                    @elseif (session('error'))
                                    <div class="alert alert-danger text-danger" role="alert">
                                        {{ session('error') }}
                                    </div>
                                    @endif
                        <!-- Email -->
                        <div class="mb-6">
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                            <div class="input-wrapper">
                                <div class="relative">
                                    <div class="input-icon">
                                        <i data-lucide="mail" class="h-5 w-5"></i>
                                    </div>
                                    <input 
                                        id="email"
                                        type="email" 
                                        name="email" 
                                        class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500" 
                                        placeholder="name@email.com"
                                        required 
                                        autocomplete="email">
                                         @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                </div>
                            </div>
                        </div>
                        
                        <!-- Password -->
                        <div class="mb-6">
                            <div class="flex items-center justify-between mb-2">
                                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                                <a href="https://ccufinance.com/forgot-password" class="text-sm text-primary-600 hover:text-primary-500">
                                    Forgot Password?
                                </a>
                            </div>
                            <div class="input-wrapper">
                                <div class="relative">
                                    <div class="input-icon">
                                        <i data-lucide="lock" class="h-5 w-5"></i>
                                    </div>
                                    <input 
                                        id="password"
                                        type="password" 
                                        name="password"
                                        class="w-full pl-10 pr-12 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500" 
                                        placeholder="••••••••"
                                        required
                                        autocomplete="current-password">
                                          @if ($errors->has('password'))
            <span class="text-danger">{{ $errors->first('password') }}</span>
        @endif
                                    <button 
                                        type="button"
                                        onclick="togglePasswordVisibility()"
                                        class="absolute inset-y-0 right-0 flex items-center pr-3 input-toggle">
                                        <i data-lucide="eye" id="show-password" class="h-5 w-5 text-gray-400"></i>
                                        <i data-lucide="eye-off" id="hide-password" class="h-5 w-5 text-gray-400 hidden"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Remember Me -->
                        <div class="mb-6">
                            <label class="inline-flex items-center">
                                <input 
                                    type="checkbox" 
                                    name="remember_me"
                                    class="rounded border-gray-300 text-primary-600 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50" 
                                    checked>
                                <span class="ml-2 text-sm text-gray-600">Stay signed in for 30 days</span>
                            </label>
                        </div>
                        
                        <!-- Buttons -->
                        <div class="flex flex-col space-y-4">
                            <button 
                                type="submit"
                                class="w-full py-3 px-4 bg-primary-600 hover:bg-primary-700 text-white font-medium rounded-lg shadow transition duration-150 ease-in-out flex items-center justify-center">
                                <i data-lucide="log-in" class="h-5 w-5 mr-2"></i>
                                Sign In
                            </button>
                            
                            <a 
                                href="{{route('register')}}"
                                class="w-full py-3 px-4 bg-gray-100 hover:bg-gray-200 text-gray-800 font-medium rounded-lg transition duration-150 ease-in-out flex items-center justify-center">
                                <i data-lucide="user-plus" class="h-5 w-5 mr-2"></i>
                                Not enrolled? Create Account
                            </a>
                        </div>
                    </form>
                </div>
            </div>
            
            <!-- Additional Links -->
            <div class="mt-8 text-center">
                <p class="text-sm text-gray-600">
                    By signing in, you agree to our 
                    <a href="#" class="text-primary-600 hover:text-primary-500">Terms of Service</a> and 
                    <a href="#" class="text-primary-600 hover:text-primary-500">Privacy Policy</a>
                </p>
            </div>
        </div>
    </div>
</div>

    </div>
    
    <!-- Initialize Lucide Icons -->
    <script>
        lucide.createIcons();
    </script>
    
    <!-- Enhanced Page Loading Animation -->
    <script>
        window.onload = function() {
            const preloader = document.querySelector('.page-loading');
            
            // Add a slight delay to make loading animation more noticeable
            setTimeout(function() {
                preloader.classList.remove('active');
                setTimeout(function() {
                    preloader.remove();
                }, 500);
            }, 800);
        };
    </script>
    <script>
        
    </script>
    
    <!-- Tidio Chat -->
        
    <!-- Additional Scripts -->
    <script>
    function togglePasswordVisibility() {
        const passwordInput = document.getElementById('password');
        const showPasswordIcon = document.getElementById('show-password');
        const hidePasswordIcon = document.getElementById('hide-password');
        
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            showPasswordIcon.classList.add('hidden');
            hidePasswordIcon.classList.remove('hidden');
        } else {
            passwordInput.type = 'password';
            showPasswordIcon.classList.remove('hidden');
            hidePasswordIcon.classList.add('hidden');
        }
    }
</script>
</body>
</html>