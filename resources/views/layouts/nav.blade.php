<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'T-Shirt Store' }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">
    <!-- Top Navigation -->
    <nav class="bg-white shadow sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center h-16">
                <div class="flex-shrink-0 text-2xl font-bold bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500 bg-clip-text text-transparent">
                    TeeStore
                </div>
                <div class="hidden md:flex space-x-8">
                    <a href="/" class="text-gray-700 hover:text-blue-600 font-medium">Home</a>
                    <a href="/shop" class="text-gray-700 hover:text-blue-600 font-medium">Shop</a>
                    <a href="/brands" class="text-gray-700 hover:text-blue-600 font-medium">Brands</a>
                    <a href="/cart" class="text-gray-700 hover:text-blue-600 font-medium">Cart</a>
                    <a href="/about" class="text-gray-700 hover:text-blue-600 font-medium">About</a>
                    <a href="/contact" class="text-gray-700 hover:text-blue-600 font-medium">Contact</a>
                    <a href="/faq" class="text-gray-700 hover:text-blue-600 font-medium">FAQ</a>
                    <form method="POST" action="{{ route('jwt.logout') }}">
                        @csrf
                        <button type="submit" class="text-red-600 hover:text-red-800 font-medium">Logout</button>
                    </form>
                </div>
                <div class="md:hidden">
                    <button id="nav-toggle" class="text-gray-700 focus:outline-none">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                </div>
            </div>
            <div id="nav-menu" class="md:hidden hidden pb-4">
                <a href="/" class="block py-2 text-gray-700 hover:text-blue-600 font-medium">Home</a>
                <a href="/shop" class="block py-2 text-gray-700 hover:text-blue-600 font-medium">Shop</a>
                <a href="/brands" class="block py-2 text-gray-700 hover:text-blue-600 font-medium">Brands</a>
                <a href="/cart" class="block py-2 text-gray-700 hover:text-blue-600 font-medium">Cart</a>
                <a href="/about" class="block py-2 text-gray-700 hover:text-blue-600 font-medium">About</a>
                <a href="/contact" class="block py-2 text-gray-700 hover:text-blue-600 font-medium">Contact</a>
                <a href="/faq" class="block py-2 text-gray-700 hover:text-blue-600 font-medium">FAQ</a>
                <form method="POST" action="{{ route('jwt.logout') }}">
                    @csrf
                    <button type="submit" class="block w-full text-left py-2 text-red-600 hover:text-red-800 font-medium">Logout</button>
                </form>
            </div>
        </div>
    </nav>
    <main class="flex-1">
        @yield('content')
    </main>
</body>
</html>