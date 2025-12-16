<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home - Donlight</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f6f7fb;
            text-align: center;
            padding-top: 100px;
        }
        a {
            display: inline-block;
            margin: 10px;
            padding: 10px 20px;
            background: #ff5fa2;
            color: white;
            text-decoration: none;
            border-radius: 6px;
        }
    </style>
</head>
<body>

    <h1>🏠 Home Donlight</h1>
    <p>Selamat datang, {{ auth()->user()->nama }}</p>
    <p>Role: <b>{{ auth()->user()->role }}</b></p>

    <a href="/produk">Data Produk</a>
    <a href="/transaksi">Transaksi</a>
    <a href="/logout"
       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        Logout
    </a>

    <form id="logout-form" action="/logout" method="POST" style="display:none;">
        @csrf
    </form>

</body>
</html>
