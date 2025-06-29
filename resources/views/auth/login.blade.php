<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'T-Shirt Store' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        function toggleSidebar() {
            document.getElementById('sidebar').classList.toggle('-translate-x-full');
        }
    </script>
</head>
<body class="bg-gray-100 min-h-screen flex">
    <!-- Sidebar -->
    <div id="sidebar" class="fixed z-30 inset-y-0 left-0 w-64 bg-white shadow-lg transform -translate-x-full md:translate-x-0 transition-transform duration-200 ease-in-out">
        <div class="p-6 font-bold text-xl border-b">TeeStore</div>
        <nav class="mt-6">
            <a href="/" class="block px-6 py-2 hover:bg-gray-200">Home</a>
            <a href="/cart" class="block px-6 py-2 hover:bg-gray-200">Cart</a>
            <a href="/about" class="block px-6 py-2 hover:bg-gray-200">About</a>
        </nav>
    </div>
    <!-- Overlay for mobile -->
    <div onclick="toggleSidebar()" class="fixed inset-0 bg-black bg-opacity-30 z-20 hidden" id="sidebar-overlay"></div>
    <!-- Main Content -->
    <div class="flex-1 ml-0 md:ml-64">
        <div class="p-4">
            <!-- Mobile menu button -->
            <button onclick="toggleSidebar()" class="md:hidden mb-4 bg-gray-200 p-2 rounded">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
            @yield('content')
        </div>
    </div>
    <script>
        // Sidebar open/close for mobile
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const overlay = document.getElementById('sidebar-overlay');
            sidebar.classList.toggle('-translate-x-full');
            overlay.classList.toggle('hidden');
        }
    </script>
</body>
</html>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded shadow-md w-full max-w-sm">
        <h2 class="text-2xl font-bold mb-6 text-center">Login</h2>
        @if(session('error'))
            <div class="mb-4 text-red-600">{{ session('error') }}</div>
        @endif
        @if(session('success'))
            <div class="mb-4 text-green-600">{{ session('success') }}</div>
        @endif
        <form method="POST" action="{{ route('jwt.login') }}">
            @csrf
            <div class="mb-4">
                <label class="block mb-1" for="email">Email</label>
                <input class="w-full border rounded px-3 py-2" type="email" name="email" required autofocus>
            </div>
            <div class="mb-6">
                <label class="block mb-1" for="password">Password</label>
                <input class="w-full border rounded px-3 py-2" type="password" name="password" required>
            </div>
            <button class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 transition" type="submit">
                Login
            </button>
        </form>
        <div class="mt-4 text-center">
            <a href="{{ route('jwt.register.form') }}" class="text-blue-600 underline">Don't have an account? Register</a>
        </div>
    </div>
</body>
</html>