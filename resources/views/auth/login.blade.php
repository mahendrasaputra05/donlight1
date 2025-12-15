<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login - Donlight</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    body{font-family:Poppins;background:#f6f7fb}
    .box{width:360px;margin:120px auto;background:#fff;padding:30px;border-radius:12px}
    input,button{width:100%;padding:10px;margin-top:10px}
    button{background:#ff5fa2;border:0;color:#fff;border-radius:8px}
  </style>
</head>
<body>
<div class="box">
  <h3>Login Donlight</h3>

  @if($errors->any())
    <p style="color:red">{{ $errors->first() }}</p>
  @endif

  <form method="POST" action="/login">
    @csrf
    <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Login</button>
  </form>
</div>
</body>
</html>
