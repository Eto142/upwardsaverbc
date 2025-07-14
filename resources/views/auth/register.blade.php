<!DOCTYPE html>
<html lang="en">
<head>
    <title>Create an Account - Upward Saver Bank Corporation</title>
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
            <h1 class="text-4xl font-extrabold mb-6 text-center">Start Banking with Us</h1>
            
            <!-- Description -->
            <p class="text-xl mb-8 max-w-md text-center text-white/80">
                Create your Upward Saver Bank Corporation account in just a few steps and enjoy our full range of banking services.
            </p>
            
            <!-- Benefits -->
            <div class="w-full max-w-md space-y-4">
                <div class="flex items-start space-x-3">
                    <div class="flex-shrink-0 w-6 h-6 rounded-full bg-white/20 flex items-center justify-center mt-0.5">
                        <i data-lucide="check" class="h-3 w-3"></i>
                    </div>
                    <p class="text-sm text-white/80">
                        <span class="font-medium text-white">Secure Banking Platform</span> - Industry-leading security protocols to keep your funds safe
                    </p>
                </div>
                
                <div class="flex items-start space-x-3">
                    <div class="flex-shrink-0 w-6 h-6 rounded-full bg-white/20 flex items-center justify-center mt-0.5">
                        <i data-lucide="check" class="h-3 w-3"></i>
                    </div>
                    <p class="text-sm text-white/80">
                        <span class="font-medium text-white">Fast Transfers</span> - Send and receive money quickly to anyone, anywhere
                    </p>
                </div>
                
                <div class="flex items-start space-x-3">
                    <div class="flex-shrink-0 w-6 h-6 rounded-full bg-white/20 flex items-center justify-center mt-0.5">
                        <i data-lucide="check" class="h-3 w-3"></i>
                    </div>
                    <p class="text-sm text-white/80">
                        <span class="font-medium text-white">24/7 Account Access</span> - Manage your finances anytime, anywhere on any device
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Right Side - Registration Form -->
    <div class="w-full lg:w-1/2 flex flex-col justify-center items-center p-6 lg:p-12">
        <div class="w-full max-w-2xl">
            <!-- Mobile Logo -->
            <div class="lg:hidden text-center mb-8">
                <a href="/">
                    <img src="logo02.png" alt="Logo" class="h-12 mx-auto">
                </a>
            </div>
            
            <!-- Alerts -->
                        
                        
            <!-- Registration Card -->
            <div x-data="{ 
                step: 1,
                totalSteps: 2,
                formData: {
                    name: '',
                    middlename: '',
                    lastname: '',
                    username: '',
                    email: '',
                    phone: '',
                    country: '',
                    accounttype: '',
                    pin: '',
                    password: '',
                    password_confirmation: '',
                    terms: false
                },
                nextStep() {
                    if (this.validateCurrentStep()) {
                        if (this.step < this.totalSteps) {
                            this.step++;
                            window.scrollTo(0, 0);
                        }
                    }
                },
                prevStep() {
                    if (this.step > 1) {
                        this.step--;
                        window.scrollTo(0, 0);
                    }
                },
                validateCurrentStep() {
                    // Basic validation logic based on current step
                    if (this.step === 1) {
                        return this.formData.name && this.formData.lastname && this.formData.username;
                    } else if (this.step === 2) {
                        return this.formData.email && this.formData.phone && this.formData.country;
                    } else if (this.step === 3) {
                        return this.formData.accounttype && this.formData.pin;
                    } else if (this.step === 4) {
                        return this.formData.password && this.formData.password_confirmation && this.formData.terms;
                    }
                    return true;
                },
                get progress() {
                    return (this.step / this.totalSteps) * 100;
                }
            }" class="bg-white rounded-2xl shadow-xl overflow-hidden">
                <!-- Progress Header -->
                  <center><img class="logo-light" src="logo1.png" alt="Upward Saver Bank Corporation  " width="200" height="260"></center>
                <div class="bg-gray-50 px-8 py-6 border-b border-gray-200">
                    <div class="flex justify-between items-center mb-2">
                        <h2 class="text-2xl font-bold text-gray-900">Create Your Account</h2>
                        <span class="text-sm font-medium text-gray-500">Step <span x-text="step"></span> of <span x-text="totalSteps"></span></span>
                    </div>
                    
                    <!-- Progress Bar -->
                    <div class="h-2 w-full bg-gray-200 rounded-full overflow-hidden">
                        <div class="h-full bg-primary-600 rounded-full transition-all duration-300 ease-in-out" :style="'width: ' + progress + '%'"></div>
                    </div>
                    
                    <!-- Step Titles -->
                    <div class="flex justify-between mt-2 text-xs text-gray-500">
                        <div class="text-center" :class="{ 'text-primary-600 font-medium': step >= 1 }">Account Setup</div>
                        <div class="text-center" :class="{ 'text-primary-600 font-medium': step >= 2 }">Security</div>
                    </div>
                </div>
                
                <!-- Form Container -->
                <div class="px-8 py-6">
                   <form method="POST" action="{{route('register')}}" id="regester" class="needs-validation" novalidate>
                                @csrf
                                              
                        <!-- Step 1: Personal Information -->
                        <div x-show="step === 1" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100">
                            <div class="text-center mb-6">
                                <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-primary-100 mb-4">
                                    <i data-lucide="user" class="h-8 w-8 text-primary-600"></i>
                                </div>
                                <h3 class="text-lg font-medium text-gray-900">Get started by telling us about you</h3>
                                <p class="mt-1 text-sm text-gray-500">
To setup online access, we need to locate you in our system.</p>
                            </div>
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                                <!-- First Name -->
                                <div>
                                    <label for="name" class="block text-sm font-medium text-gray-700 mb-2">First Name *</label>
                                    <input 
                                        type="text" 
                                        id="name" 
                                        name="first_name"
                                        x-model="formData.name"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500" 
                                        placeholder="Enter First Name"
                                        required>
                                         @if ($errors->has('first_name'))
                                <span class="text-danger">{{ $errors->first('first_name') }}</span>
                                @endif
                                                                    </div>
                                
                                <!-- Last Name -->
                                <div>
                                    <label for="lastename" class="block text-sm font-medium text-gray-700 mb-2">Last Name</label>
                                    <input 
                                        type="text" 
                                        id="lastname" 
                                       name="last_name" placeholder="Enter Last Name"
                                        x-model="formData.middlename"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500" 
                                        >
                                         @if ($errors->has('last_name'))
                                <span class="text-danger">{{ $errors->first('last_name') }}</span>
                                @endif
                                </div>
                                
                                <!-- Email -->
                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email *</label>
                                    <input 
                                        type="email" 
                                        id="email" 
                                        name="email" 
                                        x-model="formData.lastname"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500" 
                                        placeholder="Enter Email"
                                        required>
                                        @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                                </div>
                                
                                <!-- Address -->
                                <div>
                                    <label for="address" class="block text-sm font-medium text-gray-700 mb-2">Address *</label>
                                    <input 
                                        type="text" 
                                        id="address" 
                                        name="address" 
                                        x-model="formData.username"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500" 
                                        placeholder=" Enter address"
                                        required>
                                                                    </div> 
                        

                                
                                <!-- Phone -->
                                <div>
                                    <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Phone Number *</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 flex items-center pl-3">
                                            <i data-lucide="phone" class="h-5 w-5 text-gray-400"></i>
                                        </div>
                                        <input 
                                            type="tel" 
                                            id="phone" 
                                            name="phone" 
                                            x-model="formData.phone"
                                            class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500" 
                                            placeholder="+1 (234) 567-8901"
                                            required>
                                    </div>
                                                                    </div>
                                
                                <!-- Country -->
                                <div>
                                    <label for="country" class="block text-sm font-medium text-gray-700 mb-2">Country *</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 flex items-center pl-3">
                                            <i data-lucide="globe" class="h-5 w-5 text-gray-400"></i>
                                        </div>
                                        <select 
                                            id="country" 
                                            name="country" 
                                            x-model="formData.country"
                                            class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 appearance-none"
                                            required>
                                            <option value="" disabled selected>Select your country</option>
                                            <option value="Afganistan">Afghanistan</option>
                                        <option value="Albania">Albania</option>
                                        <option value="Algeria">Algeria</option>
                                        <option value="American Samoa">American Samoa</option>
                                        <option value="Andorra">Andorra</option>
                                        <option value="Angola">Angola</option>
                                        <option value="Anguilla">Anguilla</option>
                                        <option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
                                        <option value="Argentina">Argentina</option>
                                        <option value="Armenia">Armenia</option>
                                        <option value="Aruba">Aruba</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Austria">Austria</option>
                                        <option value="Azerbaijan">Azerbaijan</option>
                                        <option value="Bahamas">Bahamas</option>
                                        <option value="Bahrain">Bahrain</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                        <option value="Barbados">Barbados</option>
                                        <option value="Belarus">Belarus</option>
                                        <option value="Belgium">Belgium</option>
                                        <option value="Belize">Belize</option>
                                        <option value="Benin">Benin</option>
                                        <option value="Bermuda">Bermuda</option>
                                        <option value="Bhutan">Bhutan</option>
                                        <option value="Bolivia">Bolivia</option>
                                        <option value="Bonaire">Bonaire</option>
                                        <option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
                                        <option value="Botswana">Botswana</option>
                                        <option value="Brazil">Brazil</option>
                                        <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                        <option value="Brunei">Brunei</option>
                                        <option value="Bulgaria">Bulgaria</option>
                                        <option value="Burkina Faso">Burkina Faso</option>
                                        <option value="Burundi">Burundi</option>
                                        <option value="Cambodia">Cambodia</option>
                                        <option value="Cameroon">Cameroon</option>
                                        <option value="Canada">Canada</option>
                                        <option value="Canary Islands">Canary Islands</option>
                                        <option value="Cape Verde">Cape Verde</option>
                                        <option value="Cayman Islands">Cayman Islands</option>
                                        <option value="Central African Republic">Central African Republic</option>
                                        <option value="Chad">Chad</option>
                                        <option value="Channel Islands">Channel Islands</option>
                                        <option value="Chile">Chile</option>
                                        <option value="China">China</option>
                                        <option value="Christmas Island">Christmas Island</option>
                                        <option value="Cocos Island">Cocos Island</option>
                                        <option value="Colombia">Colombia</option>
                                        <option value="Comoros">Comoros</option>
                                        <option value="Congo">Congo</option>
                                        <option value="Cook Islands">Cook Islands</option>
                                        <option value="Costa Rica">Costa Rica</option>
                                        <option value="Cote DIvoire">Cote D'Ivoire</option>
                                        <option value="Croatia">Croatia</option>
                                        <option value="Cuba">Cuba</option>
                                        <option value="Curaco">Curacao</option>
                                        <option value="Cyprus">Cyprus</option>
                                        <option value="Czech Republic">Czech Republic</option>
                                        <option value="Denmark">Denmark</option>
                                        <option value="Djibouti">Djibouti</option>
                                        <option value="Dominica">Dominica</option>
                                        <option value="Dominican Republic">Dominican Republic</option>
                                        <option value="East Timor">East Timor</option>
                                        <option value="Ecuador">Ecuador</option>
                                        <option value="Egypt">Egypt</option>
                                        <option value="El Salvador">El Salvador</option>
                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                        <option value="Eritrea">Eritrea</option>
                                        <option value="Estonia">Estonia</option>
                                        <option value="Ethiopia">Ethiopia</option>
                                        <option value="Falkland Islands">Falkland Islands</option>
                                        <option value="Faroe Islands">Faroe Islands</option>
                                        <option value="Fiji">Fiji</option>
                                        <option value="Finland">Finland</option>
                                        <option value="France">France</option>
                                        <option value="French Guiana">French Guiana</option>
                                        <option value="French Polynesia">French Polynesia</option>
                                        <option value="French Southern Ter">French Southern Ter</option>
                                        <option value="Gabon">Gabon</option>
                                        <option value="Gambia">Gambia</option>
                                        <option value="Georgia">Georgia</option>
                                        <option value="Germany">Germany</option>
                                        <option value="Ghana">Ghana</option>
                                        <option value="Gibraltar">Gibraltar</option>
                                        <option value="Great Britain">Great Britain</option>
                                        <option value="Greece">Greece</option>
                                        <option value="Greenland">Greenland</option>
                                        <option value="Grenada">Grenada</option>
                                        <option value="Guadeloupe">Guadeloupe</option>
                                        <option value="Guam">Guam</option>
                                        <option value="Guatemala">Guatemala</option>
                                        <option value="Guinea">Guinea</option>
                                        <option value="Guyana">Guyana</option>
                                        <option value="Haiti">Haiti</option>
                                        <option value="Hawaii">Hawaii</option>
                                        <option value="Honduras">Honduras</option>
                                        <option value="Hong Kong">Hong Kong</option>
                                        <option value="Hungary">Hungary</option>
                                        <option value="Iceland">Iceland</option>
                                        <option value="India">India</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="Iran">Iran</option>
                                        <option value="Iraq">Iraq</option>
                                        <option value="Ireland">Ireland</option>
                                        <option value="Isle of Man">Isle of Man</option>
                                        <option value="Israel">Israel</option>
                                        <option value="Italy">Italy</option>
                                        <option value="Jamaica">Jamaica</option>
                                        <option value="Japan">Japan</option>
                                        <option value="Jordan">Jordan</option>
                                        <option value="Kazakhstan">Kazakhstan</option>
                                        <option value="Kenya">Kenya</option>
                                        <option value="Kiribati">Kiribati</option>
                                        <option value="Korea North">Korea North</option>
                                        <option value="Korea Sout">Korea South</option>
                                        <option value="Kuwait">Kuwait</option>
                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                        <option value="Laos">Laos</option>
                                        <option value="Latvia">Latvia</option>
                                        <option value="Lebanon">Lebanon</option>
                                        <option value="Lesotho">Lesotho</option>
                                        <option value="Liberia">Liberia</option>
                                        <option value="Libya">Libya</option>
                                        <option value="Liechtenstein">Liechtenstein</option>
                                        <option value="Lithuania">Lithuania</option>
                                        <option value="Luxembourg">Luxembourg</option>
                                        <option value="Macau">Macau</option>
                                        <option value="Macedonia">Macedonia</option>
                                        <option value="Madagascar">Madagascar</option>
                                        <option value="Malaysia">Malaysia</option>
                                        <option value="Malawi">Malawi</option>
                                        <option value="Maldives">Maldives</option>
                                        <option value="Mali">Mali</option>
                                        <option value="Malta">Malta</option>
                                        <option value="Marshall Islands">Marshall Islands</option>
                                        <option value="Martinique">Martinique</option>
                                        <option value="Mauritania">Mauritania</option>
                                        <option value="Mauritius">Mauritius</option>
                                        <option value="Mayotte">Mayotte</option>
                                        <option value="Mexico">Mexico</option>
                                        <option value="Midway Islands">Midway Islands</option>
                                        <option value="Moldova">Moldova</option>
                                        <option value="Monaco">Monaco</option>
                                        <option value="Mongolia">Mongolia</option>
                                        <option value="Montserrat">Montserrat</option>
                                        <option value="Morocco">Morocco</option>
                                        <option value="Mozambique">Mozambique</option>
                                        <option value="Myanmar">Myanmar</option>
                                        <option value="Nambia">Nambia</option>
                                        <option value="Nauru">Nauru</option>
                                        <option value="Nepal">Nepal</option>
                                        <option value="Netherland Antilles">Netherland Antilles</option>
                                        <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                        <option value="Nevis">Nevis</option>
                                        <option value="New Caledonia">New Caledonia</option>
                                        <option value="New Zealand">New Zealand</option>
                                        <option value="Nicaragua">Nicaragua</option>
                                        <option value="Niger">Niger</option>
                                        <option value="Nigeria">Nigeria</option>
                                        <option value="Niue">Niue</option>
                                        <option value="Norfolk Island">Norfolk Island</option>
                                        <option value="Norway">Norway</option>
                                        <option value="Oman">Oman</option>
                                        <option value="Pakistan">Pakistan</option>
                                        <option value="Palau Island">Palau Island</option>
                                        <option value="Palestine">Palestine</option>
                                        <option value="Panama">Panama</option>
                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                        <option value="Paraguay">Paraguay</option>
                                        <option value="Peru">Peru</option>
                                        <option value="Phillipines">Philippines</option>
                                        <option value="Pitcairn Island">Pitcairn Island</option>
                                        <option value="Poland">Poland</option>
                                        <option value="Portugal">Portugal</option>
                                        <option value="Puerto Rico">Puerto Rico</option>
                                        <option value="Qatar">Qatar</option>
                                        <option value="Republic of Montenegro">Republic of Montenegro</option>
                                        <option value="Republic of Serbia">Republic of Serbia</option>
                                        <option value="Reunion">Reunion</option>
                                        <option value="Romania">Romania</option>
                                        <option value="Russia">Russia</option>
                                        <option value="Rwanda">Rwanda</option>
                                        <option value="St Barthelemy">St Barthelemy</option>
                                        <option value="St Eustatius">St Eustatius</option>
                                        <option value="St Helena">St Helena</option>
                                        <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                        <option value="St Lucia">St Lucia</option>
                                        <option value="St Maarten">St Maarten</option>
                                        <option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
                                        <option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>
                                        <option value="Saipan">Saipan</option>
                                        <option value="Samoa">Samoa</option>
                                        <option value="Samoa American">Samoa American</option>
                                        <option value="San Marino">San Marino</option>
                                        <option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                        <option value="Senegal">Senegal</option>
                                        <option value="Serbia">Serbia</option>
                                        <option value="Seychelles">Seychelles</option>
                                        <option value="Sierra Leone">Sierra Leone</option>
                                        <option value="Singapore">Singapore</option>
                                        <option value="Slovakia">Slovakia</option>
                                        <option value="Slovenia">Slovenia</option>
                                        <option value="Solomon Islands">Solomon Islands</option>
                                        <option value="Somalia">Somalia</option>
                                        <option value="South Africa">South Africa</option>
                                        <option value="Spain">Spain</option>
                                        <option value="Sri Lanka">Sri Lanka</option>
                                        <option value="Sudan">Sudan</option>
                                        <option value="Suriname">Suriname</option>
                                        <option value="Swaziland">Swaziland</option>
                                        <option value="Sweden">Sweden</option>
                                        <option value="Switzerland">Switzerland</option>
                                        <option value="Syria">Syria</option>
                                        <option value="Tahiti">Tahiti</option>
                                        <option value="Taiwan">Taiwan</option>
                                        <option value="Tajikistan">Tajikistan</option>
                                        <option value="Tanzania">Tanzania</option>
                                        <option value="Thailand">Thailand</option>
                                        <option value="Togo">Togo</option>
                                        <option value="Tokelau">Tokelau</option>
                                        <option value="Tonga">Tonga</option>
                                        <option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
                                        <option value="Tunisia">Tunisia</option>
                                        <option value="Turkey">Turkey</option>
                                        <option value="Turkmenistan">Turkmenistan</option>
                                        <option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>
                                        <option value="Tuvalu">Tuvalu</option>
                                        <option value="Uganda">Uganda</option>
                                        <option value="Ukraine">Ukraine</option>
                                        <option value="United Arab Erimates">United Arab Emirates</option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option value="United States">United States of America</option>
                                        <option value="Uraguay">Uruguay</option>
                                        <option value="Uzbekistan">Uzbekistan</option>
                                        <option value="Vanuatu">Vanuatu</option>
                                        <option value="Vatican City State">Vatican City State</option>
                                        <option value="Venezuela">Venezuela</option>
                                        <option value="Vietnam">Vietnam</option>
                                        <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                        <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                        <option value="Wake Island">Wake Island</option>
                                        <option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option>
                                        <option value="Yemen">Yemen</option>
                                        <option value="Zaire">Zaire</option>
                                        <option value="Zambia">Zambia</option>
                                        <option value="Zimbabwe">Zimbabwe</option>                                        </select>
                                        <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                            <i data-lucide="chevron-down" class="h-5 w-5 text-gray-400"></i>
                                        </div>
                                    </div>
                                                                    </div>
                    
                        



                         <!-- Account Type -->
                                <div>
                                    <label for="account_type" class="block text-sm font-medium text-gray-700 mb-2">Account Type*</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 flex items-center pl-3">
                                            <i data-lucide="globe" class="h-5 w-5 text-gray-400"></i>
                                        </div>
                                        <select 
                                            id="account_type" 
                                            name="account_type"
                                            class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 appearance-none"
                                            required>
                                            <option value="" disabled selected>Account Type</option>
                                           <option value="Savings">Savings</option>
                                            <option value="Checking">Checking</option>
                                       </select>
                                        <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                            <i data-lucide="chevron-down" class="h-5 w-5 text-gray-400"></i>
                                        </div>
                                    </div>
                                                                    </div>



                                                                     <!-- Currency -->
                                <div>
                                    <label for="currency" class="block text-sm font-medium text-gray-700 mb-2">Currency*</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 flex items-center pl-3">
                                            <i data-lucide="globe" class="h-5 w-5 text-gray-400"></i>
                                        </div>
                                        <select 
                                            id="currency" 
                                          name="currency"
                                            x-model="formData.country"
                                            class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 appearance-none"
                                            required>
                                             <option>select</option>
                                                <option value='Afghanistan'>Afghanistan (؋)</option>
                                                <option value='Albania'>Albania (Lek)</option>
                                                <option value='Algeria'>Algeria (دج)</option>
                                                <option value='American Samoa'>American Samoa ($)</option>
                                                <option value='Andorra'>Andorra (€)</option>
                                                <option value='Angola'>Angola (Kz)</option>
                                                <option value='Anguilla'>Anguilla ($)</option>
                                                <option value='Antarctica'>Antarctica ($)</option>
                                                <option value='Antigua and Barbuda'>Antigua and Barbuda ($)</option>
                                                <option value='Argentina'>Argentina ($)</option>
                                                <option value='Armenia'>Armenia (֏)</option>
                                                <option value='Aruba'>Aruba (ƒ)</option>
                                                <option value='Australia'>Australia ($)</option>
                                                <option value='Austria'>Austria (€)</option>
                                                <option value='Azerbaijan'>Azerbaijan (AZN)</option>
                                                <option value='Bahamas'>Bahamas ($)</option>
                                                <option value='Bahrain'>Bahrain (د.)</option>
                                                <option value='Bangladesh'>Bangladesh (ó)</option>
                                                <option value='Barbados'>Barbados ($)</option>
                                                <option value='Belarus'>Belarus (Br)</option>
                                                <option value='Belgium'>Belgium (€)</option>
                                                <option value='Belize'>Belize ($)</option>
                                                <option value='Benin'>Benin (CFA)</option>
                                                <option value='Bermuda'>Bermuda ($)</option>
                                                <option value='Bhutan'>Bhutan (Nu)</option>
                                                <option value='Bolivia'>Bolivia (Bs)</option>
                                                <option value='Bosnia and Herzegovina'>Bosnia and Herzegovina (KM)</option>
                                                <option value='Botswana'>Botswana (P)</option>
                                                <option value='Bouvet Island'>Bouvet Island (kr)</option>
                                                <option value='Brazil'>Brazil (R$)</option>
                                                <option value='British Indian Ocean Territory'>British Indian Ocean Territory ($)</option>
                                                <option value='Brunei Darussalam'>Brunei Darussalam (B$)</option>
                                                <option value='Bulgaria'>Bulgaria (Лв.)</option>
                                                <option value='Burkina Faso'>Burkina Faso (CFA)</option>
                                                <option value='Burundi'>Burundi (FBu)</option>
                                                <option value='Cambodia'>Cambodia (៛)</option>
                                                <option value='Cameroon'>Cameroon (FCFA)</option>
                                                <option value='Canada'>Canada ($)</option>
                                                <option value='Cape Verde'>Cape Verde ($)</option>
                                                <option value='Cayman Islands'>Cayman Islands ($)</option>
                                                <option value='Central African Republic'>Central African Republic (FCFA)</option>
                                                <option value='Chad'>Chad (FCFA)</option>
                                                <option value='Chile'>Chile ($)</option>
                                                <option value='China'>China (¥)</option>
                                                <option value='Christmas Island'>Christmas Island ($)</option>
                                                <option value='Cocos (Keeling) Islands'>Cocos (Keeling) Islands ($)</option>
                                                <option value='Colombia'>Colombia ($)</option>
                                                <option value='Comoros'>Comoros (CF)</option>
                                                <option value='Congo'>Congo (FC)</option>
                                                <option value='Democratic Republic of the Congo'>Democratic Republic of the Congo (FC)</option>
                                                <option value='Cook Islands'>Cook Islands ($)</option>
                                                <option value='Costa Rica'>Costa Rica (₡)</option>
                                                <option value="Cote D'Ivoire">Cote D'Ivoire (CFA)</option>
                                                <option value='Croatia'>Croatia (Kn)</option>
                                                <option value='Cuba'>Cuba ($)</option>
                                                <option value='Cyprus'>Cyprus (€)</option>
                                                <option value='Czech Republic'>Czech Republic (Kč)</option>
                                                <option value='Denmark'>Denmark (kr)</option>
                                                <option value='Djibouti'>Djibouti (Fdj)</option>
                                                <option value='Dominica'>Dominica ($)</option>
                                                <option value='Dominican Republic'>Dominican Republic (RD$)</option>
                                                <option value='Ecuador'>Ecuador (S/.)</option>
                                                <option value='Egypt'>Egypt (E£)</option>
                                                <option value='El Salvador'>El Salvador (₡)</option>
                                                <option value='Equatorial Guinea'>Equatorial Guinea (FCFA)</option>
                                                <option value='Eritrea'>Eritrea (Nkf)</option>
                                                <option value='Estonia'>Estonia (kr)</option>
                                                <option value='Ethiopia'>Ethiopia (Br)</option>
                                                <option value='Falkland Islands (Malvinas)'>Falkland Islands (Malvinas) (£)</option>
                                                <option value='Faroe Islands'>Faroe Islands (kr)</option>
                                                <option value='Fiji'>Fiji (FJ$)</option>
                                                <option value='Finland'>Finland (mk)</option>
                                                <option value='France'>France (€)</option>
                                                <option value='French Guiana'>French Guiana (€)</option>
                                                <option value='French Polynesia'>French Polynesia (F)</option>
                                                <option value='French Southern Territories'>French Southern Territories (€)</option>
                                                <option value='Gabon'>Gabon (FCFA)</option>
                                                <option value='Gambia'>Gambia (D)</option>
                                                <option value='Georgia'>Georgia (GEL)</option>
                                                <option value='Germany'>Germany (€)</option>
                                                <option value='Ghana'>Ghana (GH₵)</option>
                                                <option value='Gibraltar'>Gibraltar (£)</option>
                                                <option value='Greece'>Greece (€)</option>
                                                <option value='Greenland'>Greenland (Kr.)</option>
                                                <option value='Grenada'>Grenada ($)</option>
                                                <option value='Guadeloupe'>Guadeloupe (€)</option>
                                                <option value='Guam'>Guam ($)</option>
                                                <option value='Guatemala'>Guatemala (Q)</option>
                                                <option value='Guernsey'>Guernsey (£)</option>
                                                <option value='Guinea'>Guinea (FG)</option>
                                                <option value='Guinea-Bissau'>Guinea-Bissau (CFA)</option>
                                                <option value='Guyana'>Guyana (G$)</option>
                                                <option value='Haiti'>Haiti (G)</option>
                                                <option value='Heard Island and McDonald Islands'>Heard Island and McDonald Islands ($)</option>
                                                <option value='Holy See (Vatican City State)'>Holy See (Vatican City State) (₤)</option>
                                                <option value='Honduras'>Honduras (HNL)</option>
                                                <option value='Hong Kong'>Hong Kong (HK$)</option>
                                                <option value='Hungary'>Hungary (Ft)</option>
                                                <option value='Iceland'>Iceland (kr)</option>
                                                <option value='India'>India (₹)</option>
                                                <option value='Indonesia'>Indonesia (Rp)</option>
                                                <option value='Islamic Republic of Iran'>Islamic Republic of Iran (IRR)</option>
                                                <option value='Iraq'>Iraq (د.ع)</option>
                                                <option value='Ireland'>Ireland (€)</option>
                                                <option value='Isle of Man'>Isle of Man (£)</option>
                                                <option value='Israel'>Israel (₪)</option>
                                                <option value='Italy'>Italy (€)</option>
                                                <option value='Jamaica'>Jamaica (J$)</option>
                                                <option value='Japan'>Japan (¥)</option>
                                                <option value='Jersey'>Jersey (£)</option>
                                                <option value='Jordan'>Jordan (د.ا)</option>
                                                <option value='Kazakhstan'>Kazakhstan (₸)</option>
                                                <option value='Kenya'>Kenya (KSh)</option>
                                                <option value='Kiribati'>Kiribati ($)</option>
                                                <option value="Democratic People's Republic of Korea">Democratic People's Republic of Korea (₩)</option>
                                                <option value='Republic of Korea'>Republic of Korea (₩)</option>
                                                <option value='Kuwait'>Kuwait (د.ك)</option>
                                                <option value='Kyrgyzstan'>Kyrgyzstan (лв)</option>
                                                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic (₭)</option>
                                                <option value='Latvia'>Latvia (LVL)</option>
                                                <option value='Lebanon'>Lebanon (ل.ل)</option>
                                                <option value='Lesotho'>Lesotho (L)</option>
                                                <option value='Liberia'>Liberia (L$)</option>
                                                <option value='Libyan Arab Jamahiriya'>Libyan Arab Jamahiriya (LD)</option>
                                                <option value='Liechtenstein'>Liechtenstein (CHF)</option>
                                                <option value='Lithuania'>Lithuania (Lt)</option>
                                                <option value='Luxembourg'>Luxembourg (€)</option>
                                                <option value='Macao'>Macao (MOP$)</option>
                                                <option value='The Former Yugoslav Republic of Macedonia'>The Former Yugoslav Republic of Macedonia (den)</option>
                                                <option value='Madagascar'>Madagascar (Ar)</option>
                                                <option value='Malawi'>Malawi (K)</option>
                                                <option value='Malaysia'>Malaysia (RM)</option>
                                                <option value='Maldives'>Maldives (Rf)</option>
                                                <option value='Mali'>Mali (MAF)</option>
                                                <option value='Malta'>Malta (€)</option>
                                                <option value='Marshall Islands'>Marshall Islands ($)</option>
                                                <option value='Martinique'>Martinique (€)</option>
                                                <option value='Mauritania'>Mauritania (MRU</option>
                                                <option value='Mauritius'>Mauritius (₨)</option>
                                                <option value='Mayotte'>Mayotte (€)</option>
                                                <option value='Mexico'>Mexico ($)</option>
                                                <option value='Federated States of Micronesia'>Federated States of Micronesia ($)</option>
                                                <option value='Republic of Moldova'>Republic of Moldova (L)</option>
                                                <option value='Monaco'>Monaco (€)</option>
                                                <option value='Mongolia'>Mongolia (₮)</option>
                                                <option value='Montenegro'>Montenegro (€)</option>
                                                <option value='Montserrat'>Montserrat ($)</option>
                                                <option value='Morocco'>Morocco (MAD)</option>
                                                <option value='Mozambique'>Mozambique (MT)</option>
                                                <option value='Myanmar'>Myanmar (K)</option>
                                                <option value='Namibia'>Namibia (N$)</option>
                                                <option value='Nauru'>Nauru ($)</option>
                                                <option value='Nepal'>Nepal (Rs)</option>
                                                <option value='Netherlands'>Netherlands (ANG)</option>
                                                <option value='Netherlands Antilles'>Netherlands Antilles (NAf)</option>
                                                <option value='New Caledonia'>New Caledonia (F)</option>
                                                <option value='New Zealand'>New Zealand ($)</option>
                                                <option value='Nicaragua'>Nicaragua (C$)</option>
                                                <option value='Niger'>Niger (XOF)</option>
                                                <option value='Nigeria'>Nigeria (₦)</option>
                                                <option value='Niue'>Niue ($)</option>
                                                <option value='Norfolk Island'>Norfolk Island ($)</option>
                                                <option value='Northern Mariana Islands'>Northern Mariana Islands ($)</option>
                                                <option value='Norway'>Norway (kr)</option>
                                                <option value='Oman'>Oman (ر.ع.)</option>
                                                <option value='Pakistan'>Pakistan (₨)</option>
                                                <option value='Palau'>Palau ($)</option>
                                                <option value='Occupied Palestinian Territory'>Occupied Palestinian Territory ($)</option>
                                                <option value='Panama'>Panama (B/)</option>
                                                <option value='Papua New Guinea'>Papua New Guinea (K)</option>
                                                <option value='Paraguay'>Paraguay (₲)</option>
                                                <option value='Peru'>Peru (S/)</option>
                                                <option value='Philippines'>Philippines (₱)</option>
                                                <option value='Pitcairn'>Pitcairn ($)</option>
                                                <option value='Poland'>Poland (zł)</option>
                                                <option value='Portugal'>Portugal (€)</option>
                                                <option value='Puerto Rico'>Puerto Rico ($)</option>
                                                <option value='Qatar'>Qatar (QR)</option>
                                                <option value='Reunion'>Reunion (€)</option>
                                                <option value='Romania'>Romania (lei)</option>
                                                <option value='Russian Federation'>Russian Federation (₽)</option>
                                                <option value='Rwanda'>Rwanda (FRw)</option>
                                                <option value='Saint Barthélemy'>Saint Barthélemy (€)</option>
                                                <option value='Saint Helena'>Saint Helena (£)</option>
                                                <option value='Saint Kitts and Nevis'>Saint Kitts and Nevis ($)</option>
                                                <option value='Saint Lucia'>Saint Lucia ($)</option>
                                                <option value='Saint Martin'>Saint Martin (ƒ)</option>
                                                <option value='Saint Pierre and Miquelon'>Saint Pierre and Miquelon (€)</option>
                                                <option value='Saint Vincent and the Grenadines'>Saint Vincent and the Grenadines (X$)</option>
                                                <option value='Samoa'>Samoa ($)</option>
                                                <option value='San Marino'>San Marino (€)</option>
                                                <option value='Sao Tome and Principe'>Sao Tome and Principe (Db)</option>
                                                <option value='Saudi Arabia'>Saudi Arabia (﷼)</option>
                                                <option value='Senegal'>Senegal (CFA)</option>
                                                <option value='Serbia'>Serbia (din)</option>
                                                <option value='Seychelles'>Seychelles (SCR)</option>
                                                <option value='Sierra Leone'>Sierra Leone (Le)</option>
                                                <option value='Singapore'>Singapore (S$)</option>
                                                <option value='Slovakia'>Slovakia (SKK)</option>
                                                <option value='Slovenia'>Slovenia (€)</option>
                                                <option value='Solomon Islands'>Solomon Islands (Si$)</option>
                                                <option value='Somalia'>Somalia (Sh.so.)</option>
                                                <option value='South Africa'>South Africa (R)</option>
                                                <option value='South Georgia and the South Sandwich Islands'>South Georgia and the South Sandwich Islands (£)</option>
                                                <option value='Spain'>Spain (€)</option>
                                                <option value='Sri Lanka'>Sri Lanka (Rs)</option>
                                                <option value='Sudan'>Sudan (£SD)</option>
                                                <option value='Suriname'>Suriname ($)</option>
                                                <option value='Svalbard and Jan Mayen'>Svalbard and Jan Mayen (kr)</option>
                                                <option value='Swaziland'>Swaziland (L)</option>
                                                <option value='Sweden'>Sweden (kr)</option>
                                                <option value='Switzerland'>Switzerland (CHf)</option>
                                                <option value='Syrian Arab Republic'>Syrian Arab Republic (LS)</option>
                                                <option value='Taiwan, Province Of China'>Taiwan, Province Of China (NT$)</option>
                                                <option value='Tajikistan'>Tajikistan (SM)</option>
                                                <option value='United Republic of Tanzania'>United Republic of Tanzania (TSh)</option>
                                                <option value='Thailand'>Thailand (฿))</option>
                                                <option value='Timor-Leste'>Timor-Leste ($)</option>
                                                <option value='Togo'>Togo (CFA)</option>
                                                <option value='Tokelau'>Tokelau ($)</option>
                                                <option value='Tonga'>Tonga (T$)</option>
                                                <option value='Trinidad and Tobago'>Trinidad and Tobago (TT$)</option>
                                                <option value='Tunisia'>Tunisia (د.ت)</option>
                                                <option value='Turkey'>Turkey (₺)</option>
                                                <option value='Turkmenistan'>Turkmenistan (T)</option>
                                                <option value='Turks and Caicos Islands'>Turks and Caicos Islands ($)</option>
                                                <option value='Tuvalu'>Tuvalu ($)</option>
                                                <option value='Uganda'>Uganda (USh)</option>
                                                <option value='Ukraine'>Ukraine (₴)</option>
                                                <option value='United Arab Emirates'>United Arab Emirates (د.إ)</option>
                                                <option value='United Kingdom'>United Kingdom (£)</option>
                                                <option value='United States'>United States ($)</option>
                                                <option value='United States Minor Outlying Islands'>United States Minor Outlying Islands ($)</option>
                                                <option value='Uruguay'>Uruguay ($)</option>
                                                <option value='Uzbekistan'>Uzbekistan (лв)</option>
                                                <option value='Vanuatu'>Vanuatu (VT)</option>
                                                <option value='Venezuela'>Venezuela (Bs.)</option>
                                                <option value='Vietnam'>Vietnam (₫)</option>
                                                <option value='British, Virgin Islands'>British, Virgin Islands ($)</option>
                                                <option value='U.S., Virgin Islands'>U.S., Virgin Islands ($)</option>
                                                <option value='Wallis And Futuna'>Wallis And Futuna (Fr)</option>
                                                <option value='Western Sahara'>Western Sahara (د.م.)</option>
                                                <option value='Yemen'>Yemen (﷼)</option>
                                                <option value='Zambia'>Zambia (ZK)</option>
                                                <option value='Zimbabwe'>Zimbabwe (Z$)</option>
                                       </select>
                                        <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                            <i data-lucide="chevron-down" class="h-5 w-5 text-gray-400"></i>
                                        </div>
                                    </div>
                                                                    </div>
                          
                        


                                
                                <!-- Transaction PIN -->
                                <div>
                                    <label for="pin" class="block text-sm font-medium text-gray-700 mb-2">Transaction PIN (4 digits) *</label>
                                    <div class="relative" x-data="{ showPin: false }">
                                        <div class="absolute inset-y-0 left-0 flex items-center pl-3">
                                            <i data-lucide="key" class="h-5 w-5 text-gray-400"></i>
                                        </div>
                                        <input 
                                            :type="showPin ? 'text' : 'password'" 
                                            id="pin" 
                                            name="account_pin" 
                                            x-model="formData.pin"
                                            class="w-full pl-10 pr-10 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500" 
                                            placeholder="••••"
                                            maxlength="4"
                                            pattern="[0-9]{4}"
                                            required>
                                        <button 
                                            type="button"
                                            @click="showPin = !showPin"
                                            class="absolute inset-y-0 right-0 flex items-center pr-3">
                                            <i data-lucide="eye" class="h-5 w-5 text-gray-400" x-show="!showPin"></i>
                                            <i data-lucide="eye-off" class="h-5 w-5 text-gray-400" x-show="showPin"></i>
                                        </button>
                                    </div>
                                    <p class="mt-1 text-xs text-gray-500">Your PIN will be required to authorize transactions</p>
                                </div>
                            </div>

                              <!-- Step 4: Security -->
                       
                                <h3 class="text-lg font-medium text-gray-900">Secure Your Account</h3>
                                <p class="mt-1 text-sm text-gray-500">Create a strong password to protect your account</p>
                       
                             <!-- Password -->
                                <div x-data="{ showPassword: false }">
                                    <label for="password" class="block text-sm font-medium text-gray-700 mb-2">Password *</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 flex items-center pl-3">
                                            <i data-lucide="lock" class="h-5 w-5 text-gray-400"></i>
                                        </div>
                                        <input 
                                            :type="showPassword ? 'text' : 'password'" 
                                            id="password" 
                                            name="password" 
                                            x-model="formData.password"
                                            class="w-full pl-10 pr-10 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500" 
                                            placeholder="••••••••"
                                            required>
                                        <button 
                                            type="button"
                                            @click="showPassword = !showPassword"
                                            class="absolute inset-y-0 right-0 flex items-center pr-3">
                                            <i data-lucide="eye" class="h-5 w-5 text-gray-400" x-show="!showPassword"></i>
                                            <i data-lucide="eye-off" class="h-5 w-5 text-gray-400" x-show="showPassword"></i>
                                        </button>
                                    </div>
                                                                        
                                    <!-- Password Strength Meter -->
                                    <div class="mt-2" x-data="{ 
                                        get strength() {
                                            let score = 0;
                                            
                                            // Length check
                                            if (formData.password.length > 7) score += 1;
                                            if (formData.password.length > 10) score += 1;
                                            
                                            // Complexity checks
                                            if (/[A-Z]/.test(formData.password)) score += 1;
                                            if (/[0-9]/.test(formData.password)) score += 1;
                                            if (/[^A-Za-z0-9]/.test(formData.password)) score += 1;
                                            
                                            return score;
                                        },
                                        get strengthLabel() {
                                            const labels = ['Very Weak', 'Weak', 'Fair', 'Good', 'Strong', 'Very Strong'];
                                            return labels[this.strength] || 'Very Weak';
                                        },
                                        get strengthColor() {
                                            const colors = [
                                                'bg-red-500', // Very Weak
                                                'bg-red-500', // Weak
                                                'bg-yellow-500', // Fair
                                                'bg-yellow-500', // Good
                                                'bg-green-500', // Strong
                                                'bg-green-500'  // Very Strong
                                            ];
                                            return colors[this.strength] || 'bg-red-500';
                                        }
                                    }" x-show="formData.password.length > 0">
                                        <div class="flex justify-between items-center mb-1">
                                            <p class="text-xs text-gray-500">Password strength: <span x-text="strengthLabel" :class="{
                                                'text-red-600': strength < 2,
                                                'text-yellow-600': strength >= 2 && strength < 4,
                                                'text-green-600': strength >= 4
                                            }"></span></p>
                                        </div>
                                        <div class="w-full h-2 bg-gray-200 rounded-full overflow-hidden">
                                            <div 
                                                class="h-full transition-all duration-300 ease-in-out" 
                                                :class="strengthColor"
                                                :style="`width: ${(strength / 5) * 100}%`"></div>
                                        </div>
                                        <ul class="mt-2 space-y-1 text-xs text-gray-500">
                                            <li class="flex items-center" :class="{ 'text-green-600': formData.password.length > 7 }">
                                                <i data-lucide="check-circle" class="h-3 w-3 mr-1" x-show="formData.password.length > 7"></i>
                                                <i data-lucide="circle" class="h-3 w-3 mr-1" x-show="formData.password.length <= 7"></i>
                                                At least 8 characters
                                            </li>
                                            <li class="flex items-center" :class="{ 'text-green-600': /[A-Z]/.test(formData.password) }">
                                                <i data-lucide="check-circle" class="h-3 w-3 mr-1" x-show="/[A-Z]/.test(formData.password)"></i>
                                                <i data-lucide="circle" class="h-3 w-3 mr-1" x-show="!/[A-Z]/.test(formData.password)"></i>
                                                At least one uppercase letter
                                            </li>
                                            <li class="flex items-center" :class="{ 'text-green-600': /[0-9]/.test(formData.password) }">
                                                <i data-lucide="check-circle" class="h-3 w-3 mr-1" x-show="/[0-9]/.test(formData.password)"></i>
                                                <i data-lucide="circle" class="h-3 w-3 mr-1" x-show="!/[0-9]/.test(formData.password)"></i>
                                                At least one number
                                            </li>
                                            <li class="flex items-center" :class="{ 'text-green-600': /[^A-Za-z0-9]/.test(formData.password) }">
                                                <i data-lucide="check-circle" class="h-3 w-3 mr-1" x-show="/[^A-Za-z0-9]/.test(formData.password)"></i>
                                                <i data-lucide="circle" class="h-3 w-3 mr-1" x-show="!/[^A-Za-z0-9]/.test(formData.password)"></i>
                                                At least one special character
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <!-- Confirm Password -->
                                <div x-data="{ showPassword: false }">
                                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-2">Confirm Password *</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 flex items-center pl-3">
                                            <i data-lucide="lock" class="h-5 w-5 text-gray-400"></i>
                                        </div>
                                        <input 
                                            :type="showPassword ? 'text' : 'password'" 
                                            id="password_confirmation" 
                                            name="password_confirmation" 
                                            x-model="formData.password_confirmation"
                                            class="w-full pl-10 pr-10 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500" 
                                            placeholder="••••••••"
                                            required>
                                        <button 
                                            type="button"
                                            @click="showPassword = !showPassword"
                                            class="absolute inset-y-0 right-0 flex items-center pr-3">
                                            <i data-lucide="eye" class="h-5 w-5 text-gray-400" x-show="!showPassword"></i>
                                            <i data-lucide="eye-off" class="h-5 w-5 text-gray-400" x-show="showPassword"></i>
                                        </button>
                                    </div>
                                    <p 
                                        class="mt-1 text-sm" 
                                        x-show="formData.password && formData.password_confirmation"
                                        :class="formData.password === formData.password_confirmation ? 'text-green-600' : 'text-red-600'">
                                        <span x-show="formData.password === formData.password_confirmation">
                                            <i data-lucide="check" class="inline h-3 w-3"></i> Passwords match
                                        </span>
                                        <span x-show="formData.password !== formData.password_confirmation">
                                            <i data-lucide="x" class="inline h-3 w-3"></i> Passwords do not match
                                        </span>
                                    </p>
                                </div>
                                
                        </div>
                        
                      
                            
                            <div class="space-y-6 mb-6">
                               
                                <!-- Terms and Conditions -->
                                <div>
                                    <label class="flex items-start">
                                        <input 
                                            type="checkbox" 
                                            id="terms" 
                                            name="terms" 
                                            x-model="formData.terms"
                                            class="rounded border-gray-300 text-primary-600 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 mt-1" 
                                            required>
                                        <span class="ml-2 text-sm text-gray-600">
                                            I agree to the <a href="/terms" target="_blank" class="text-primary-600 hover:text-primary-500 underline">Terms of Service</a> and <a href="/privacy" target="_blank" class="text-primary-600 hover:text-primary-500 underline">Privacy Policy</a>
                                        </span>
                                    </label>
                                </div>
                                 <button 
                                type="submit" 
                                class="inline-flex items-center px-4 py-2 border border-transparent rounded-md font-medium text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                                <i data-lucide="check" class="h-4 w-4 mr-2"></i>
                                Create Account
                            </button>
                            </div>
                            
                        </div>
                        
                
                            
                           
                           
                        </div>
                        
                      
                </div>
                
                <!-- Login Link -->
                <div class="text-center mt-4 pb-4">
                    <p class="text-sm text-gray-600">
                        Already have an account? 
                        <a href="{{ route('login') }}" class="text-primary-600 hover:text-primary-500 font-medium">
                            Sign in instead
                        </a>
                    </p>
                </div>
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
    function restrictSpaces(event) {
        if (event.keyCode === 32) {
            return false;
        }
    }
    
    // When the DOM is loaded
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize Lucide icons
        lucide.createIcons();
        
        // Prevent spaces in username field
        const usernameInput = document.getElementById('username');
        if (usernameInput) {
            usernameInput.addEventListener('keypress', restrictSpaces);
        }
        
        // Restrict PIN to numbers only
        const pinInput = document.getElementById('pin');
        if (pinInput) {
            pinInput.addEventListener('keypress', function(event) {
                const charCode = (event.which) ? event.which : event.keyCode;
                if (charCode > 31 && (charCode < 48 || charCode > 57)) {
                    event.preventDefault();
                    return false;
                }
                return true;
            });
        }
    });
</script>


                       <div class="gtranslate_wrapper"></div> <script>window.gtranslateSettings = {"default_language":"en","detect_browser_language":true,"wrapper_selector":".gtranslate_wrapper","switcher_horizontal_position":"right","switcher_vertical_position":"top","alt_flags":{"en":"usa","pt":"brazil","es":"colombia","fr":"quebec"}}</script> <script src="https://cdn.gtranslate.net/widgets/latest/float.js" defer></script>
                    </div>
</body>
</html>