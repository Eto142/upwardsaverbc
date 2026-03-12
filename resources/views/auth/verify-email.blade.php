<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify Email - {{ config('app.name') }}</title>
    <link rel="shortcut icon" href="{{ asset('logo1.png') }}" type="image/png">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="w-full max-w-md bg-white rounded-lg shadow-md p-8 text-center">
        <h1 class="text-2xl font-bold text-gray-800 mb-4">Verify Your Email</h1>
        <p class="text-gray-600 mb-6">Before continuing, could you verify your email address by clicking on the link we just emailed to you?</p>
        @if (session('status') === 'verification-link-sent')
            <div class="mb-4 p-3 bg-green-50 border border-green-200 text-green-700 text-sm rounded">
                A new verification link has been sent.
            </div>
        @endif
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf
            <button type="submit" class="w-full py-2 px-4 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold rounded-md transition mb-3">
                Resend Verification Email
            </button>
        </form>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="text-sm text-gray-500 hover:underline">Log Out</button>
        </form>
    </div>
</body>
</html>
