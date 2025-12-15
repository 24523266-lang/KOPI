<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login - MONELO</title>
  <link rel="stylesheet" href="assets/css/style.css" />
  <script src="assets/js/main.js"></script>
</head>
<body class="auth-page">
  <div class="auth-container">
    <div class="logo">
      <h1>MONELO</h1>
      <p>Kelola uangmu, raih kebebasan finansial</p>
    </div>

    <form method="POST" action="login.php" class="auth-form">
      <input type="email" name="email" placeholder="Email" required />
      <input type="password" name="password" placeholder="Password" required />
      <button type="submit">Masuk</button>
    </form>

    <div class="divider">atau</div>

    <button class="btn-google" onclick="alert('Fitur Google Auth akan ditambahkan!')">
      🔵 Masuk dengan Google
    </button>

    <p class="link">Belum punya akun? <a href="register.php">Daftar di sini</a></p>
  </div>
</body>
</html>