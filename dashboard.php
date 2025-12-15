<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Dashboard - MONELO</title>
  <link rel="stylesheet" href="assets/css/style.css" />
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class="dashboard">
  <aside class="sidebar">
    <h2>MONELO</h2>
    <nav>
      <a href="dashboard.php" class="active">Dashboard</a>
      <a href="#">Laporan</a>
      <a href="#">Tabungan</a>
      <a href="#">Pengingat</a>
      <a href="#">Anggaran</a>
      <a href="logout.php">Logout</a>
    </nav>
  </aside>

  <main class="main-content">
    <header>
      <h1>Selamat Datang, <span id="username">User</span>!</h1>
      <button class="btn-export" onclick="exportToPDF()">📄 Ekspor PDF</button>
    </header>

    <!-- Ringkasan Keuangan -->
    <div class="summary-cards">
      <div class="card">
        <h3>Pemasukan Bulan Ini</h3>
        <p class="value"></p>
      </div>
      <div class="card">
        <h3>Pengeluaran</h3>
        <p class="value negative"></p>
      </div>
      <div class="card">
        <h3></h3>
        <p class="value"></p>
      </div>
    </div>

    <!-- Grafik -->
    <div class="chart-container">
      <canvas id="expenseChart"></canvas>
    </div>

    <!-- Target Tabungan -->
    <div class="goal-section">
      <h2>🎯 Target Tabungan: Liburan ke Bali</h2>
      <div class="progress-bar">
        <div class="progress" style="width: 65%"></div>
      </div>
      <p>Rp 1.300.000 / Rp 2.000.000</p>
    </div>
  </main>

  <script src="assets/js/main.js"></script>
</body>
</html>