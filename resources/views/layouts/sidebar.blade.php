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
            <form method="POST" action="{{ route('jwt.logout') }}">
                @csrf
                <button type="submit" class="block w-full text-left px-6 py-2 hover:bg-gray-200 text-red-600">Logout</button>
            </form>
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