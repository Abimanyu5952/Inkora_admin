<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded shadow-md w-full max-w-sm">
        <h2 class="text-2xl font-bold mb-6 text-center">Register</h2>
        @if ($errors->any())
            <div class="mb-4 text-red-600">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action="{{ route('jwt.register') }}">
            @csrf
            <div class="mb-4">
                <label class="block mb-1" for="name">Name</label>
                <input class="w-full border rounded px-3 py-2" type="text" name="name" required autofocus>
            </div>
            <div class="mb-4">
                <label class="block mb-1" for="email">Email</label>
                <input class="w-full border rounded px-3 py-2" type="email" name="email" required>
            </div>
            <div class="mb-4">
                <label class="block mb-1" for="password">Password</label>
                <input class="w-full border rounded px-3 py-2" type="password" name="password" required>
            </div>
            <div class="mb-6">
                <label class="block mb-1" for="password_confirmation">Confirm Password</label>
                <input class="w-full border rounded px-3 py-2" type="password" name="password_confirmation" required>
            </div>
            <button class="w-full bg-green-600 text-white py-2 rounded hover:bg-green-700 transition" type="submit">
                Register
            </button>
        </form>
        <div class="mt-4 text-center">
            <a href="{{ route('jwt.login.form') }}" class="text-blue-600 underline">Already have an account? Login</a>
        </div>
    </div>
</body>
</html>