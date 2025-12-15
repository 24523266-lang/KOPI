<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login - MONELO</title>
  <link rel="stylesheet" href="assets/css/style.css" />
</head>
<body class="auth-page">
  <div class="auth-container">
    <!-- Logo & Header -->
    <div class="auth-header">
      <img src="assets/img/monelo-logo.png" alt="MONELO" class="logo-small" />
      <h1>MONELO</h1>
      <p>Kelola uangmu, raih kebebasan finansial</p>
    </div>

    <!-- Form Login -->
    <form method="POST" action="login.php" class="auth-form">
      <div class="input-group">
        <label>Email</label>
        <input type="email" name="email" placeholder="Email" required />
      </div>
      <div class="input-group">
        <label>Password</label>
        <input type="password" name="password" placeholder="Password" required />
      </div>
      <div class="remember-me">
        <input type="checkbox" id="remember" name="remember" />
        <label for="remember">Ingat saya</label>
      </div>
      <button type="submit" class="btn-submit">Masuk</button>
    </form>

    <div class="divider">atau</div>

    <button class="btn-google">
      <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M12.545 10.239v3.821h5.445c-.712 2.315-2.647 3.972-5.445 3.972-3.332 0-6.033-2.701-6.033-6.032s2.701-6.032 6.033-6.032c1.498 0 2.866.549 3.921 1.453L12.545 10.239z" fill="#4285F4"/>
        <path d="M23.713 12.826c0-.671-.058-1.339-.172-1.995H12.545v3.821h6.35c-.292 1.407-1.169 2.58-2.41 3.296V24h3.97c2.324-2.184 3.632-5.34 3.632-9.174z" fill="#34A853"/>
        <path d="M5.506 15.545c-.202-.586-.31-1.215-.31-1.879s.108-1.293.31-1.879V8.006H1.63C.708 9.682 0 11.727 0 14.002c0 2.275.708 4.32 1.63 5.994h3.876v-3.451z" fill="#FBBC05"/>
        <path d="M12.545 4.006c-2.332 0-4.354 1.028-5.622 2.844L1.63 8.006c1.268 1.816 3.29 2.844 5.622 2.844 2.332 0 4.354-1.028 5.622-2.844L12.545 4.006z" fill="#EA4335"/>
      </svg>
      Masuk dengan Google
    </button>

    <p class="link">
      Belum punya akun? <a href="register.php">Daftar di sini</a>
    </p>
  </div>
</body>
</html>