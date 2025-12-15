<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Pengingat - MONELO</title>
  <link rel="stylesheet" href="assets/css/style.css" />
</head>
<body class="dashboard">
  <!-- Sidebar -->
  <aside class="sidebar">
    <div class="logo">
      <img src="assets/img/monelo-logo.png" alt="MONELO" />
      <span>MONELO</span>
    </div>

    <nav>
      <a href="dashboard.php"><i class="icon-dashboard"></i> Dashboard</a>
      <a href="transaksi.php"><i class="icon-transaksi"></i> Transaksi</a>
      <a href="tabungan.php"><i class="icon-tabungan"></i> Tabungan</a>
      <a href="anggaran.php"><i class="icon-anggaran"></i> Anggaran</a>
      <a href="kalender.php"><i class="icon-kalender"></i> Kalender</a>
      <a href="pengingat.php" class="active"><i class="icon-pengingat"></i> Pengingat</a>
      <a href="laporan.php"><i class="icon-laporan"></i> Laporan</a>
    </nav>

    <div class="user-section">
      <div class="user-info">
        <div class="avatar">M</div>
        <div>
          <strong>User Demo</strong>
          <div class="plan">Free Plan</div>
        </div>
      </div>
    </div>
  </aside>

  <!-- Main Content -->
  <main class="main-content">
    <header>
      <h1>Pengingat</h1>
      <p>Kelola pengingat tagihan dan pembayaran</p>
      <button class="btn-primary">+ Tambah Pengingat</button>
    </header>

    <div class="stats-cards">
      <div class="card">
        <div class="icon">
          <img src="assets/img/bell-icon.png" alt="Bell" />
        </div>
        <div class="content">
          <div class="label">Total Pengingat</div>
          <div class="value">0</div>
        </div>
      </div>
      <div class="card">
        <div class="icon">
          <img src="assets/img/clock-icon.png" alt="Clock" />
        </div>
        <div class="content">
          <div class="label">Belum Selesai</div>
          <div class="value">0</div>
        </div>
      </div>
      <div class="card">
        <div class="icon">
          <img src="assets/img/alert-icon.png" alt="Alert" />
        </div>
        <div class="content">
          <div class="label">Mendesak (≤3 hari)</div>
          <div class="value">0</div>
        </div>
      </div>
    </div>

    <div class="empty-state">
      <h3>Belum Selesai</h3>
      <div class="icon-large">
        <img src="assets/img/bell-icon.png" alt="No Reminders" />
      </div>
      <p>Tidak ada pengingat yang pending</p>
    </div>
  </main>

  <script src="assets/js/main.js"></script>
</body>
</html>