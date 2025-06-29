<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - Users List</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col items-center py-10">
    <div class="w-full max-w-3xl bg-white rounded shadow p-6">
        <h1 class="text-2xl font-bold mb-6">Users List</h1>
        <table class="min-w-full table-auto border-collapse">
            <thead>
                <tr>
                    <th class="px-4 py-2 border-b text-left">ID</th>
                    <th class="px-4 py-2 border-b text-left">Name</th>
                    <th class="px-4 py-2 border-b text-left">Email</th>
                    <th class="px-4 py-2 border-b text-left">Created At</th>
                </tr>
            </thead>
            <tbody>
                @forelse($users as $user)
                <tr class="hover:bg-gray-50">
                    <td class="px-4 py-2 border-b">{{ $user->id }}</td>
                    <td class="px-4 py-2 border-b">{{ $user->name }}</td>
                    <td class="px-4 py-2 border-b">{{ $user->email }}</td>
                    <td class="px-4 py-2 border-b">{{ $user->created_at->format('Y-m-d') }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="px-4 py-2 text-center">No users found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>