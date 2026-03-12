<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Two Factor Authentication - {{ config('app.name') }}</title>
    <link rel="shortcut icon" href="{{ asset('logo1.png') }}" type="image/png">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="w-full max-w-md bg-white rounded-lg shadow-md p-8">
        <h1 class="text-2xl font-bold text-gray-800 mb-4">Two Factor Authentication</h1>
        @if ($errors->any())
            <div class="mb-4 p-3 bg-red-50 border border-red-200 text-red-700 text-sm rounded">
                @foreach ($errors->all() as $error)<p>{{ $error }}</p>@endforeach
            </div>
        @endif
        <form method="POST" action="{{ route('two-factor.login.store') }}">
            @csrf
            <div class="mb-4">
                <label for="code" class="block text-sm font-medium text-gray-700 mb-1">Authentication Code</label>
                <input id="code" type="text" name="code" inputmode="numeric" autofocus autocomplete="one-time-code"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
            </div>
            <button type="submit" class="w-full py-2 px-4 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold rounded-md transition">
                Verify
            </button>
        </form>
    </div>
</body>
</html>
