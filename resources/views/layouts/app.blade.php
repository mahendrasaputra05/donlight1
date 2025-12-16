<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Donlight</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">

<div class="flex min-h-screen">

    {{-- SIDEBAR --}}
    <aside class="w-64 bg-pink-500 text-white flex flex-col">
        <div class="p-4 text-2xl font-bold border-b border-pink-400">
            💡 Donlight
        </div>

        <nav class="flex-1 p-4 space-y-2">
            <a href="{{ route('home') }}" class="block px-3 py-2 rounded hover:bg-pink-600">
                🏠 Dashboard
            </a>

            @if(in_array(auth()->user()->role, ['owner','admin']))
                <a href="{{ route('produk.index') }}" class="block px-3 py-2 rounded hover:bg-pink-600">
                    📦 Produk
                </a>

                <a href="{{ route('customer.index') }}" class="block px-3 py-2 rounded hover:bg-pink-600">
                    👥 Customer
                </a>
            @endif

            @if(in_array(auth()->user()->role, ['owner','admin','kasir']))
                <a href="{{ route('transaksi.index') }}" class="block px-3 py-2 rounded hover:bg-pink-600">
                    💳 Transaksi
                </a>
            @endif
        </nav>

        <div class="p-4 border-t border-pink-400">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="w-full bg-white text-pink-600 py-2 rounded">
                    Logout
                </button>
            </form>
        </div>
    </aside>

    {{-- CONTENT --}}
    <main class="flex-1 p-6">
        @yield('content')
    </main>

</div>

</body>
</html>
