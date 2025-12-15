<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Anggaran - MONELO</title>
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
      <a href="anggaran.php" class="active"><i class="icon-anggaran"></i> Anggaran</a>
      <a href="kalender.php"><i class="icon-kalender"></i> Kalender</a>
      <a href="pengingat.php"><i class="icon-pengingat"></i> Pengingat</a>
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
      <h1>Anggaran</h1>
      <p>Kelola batas pengeluaran per kategori</p>
      <button class="btn-primary">+ Tambah Anggaran</button>
    </header>

    <div class="stats-cards">
      <div class="card">
        <div class="icon">
          <img src="assets/img/budget-icon.png" alt="Budget" />
        </div>
        <div class="content">
          <div class="label">Total Anggaran</div>
          <div class="value">Rp 0</div>
        </div>
      </div>
      <div class="card">
        <div class="icon">
          <img src="assets/img/check-icon.png" alt="Check" />
        </div>
        <div class="content">
          <div class="label">Total Terpakai</div>
          <div class="value">Rp 0</div>
          <div class="sub-label">NaN% dari total anggaran</div>
        </div>
      </div>
      <div class="card">
        <div class="icon">
          <img src="assets/img/exceed-icon.png" alt="Exceed" />
        </div>
        <div class="content">
          <div class="label">Melebihi Batas</div>
          <div class="value">0 kategori</div>
        </div>
      </div>
    </div>

    <div class="budget-list">
      <h3>Daftar Anggaran</h3>
      <div class="empty-state">
        <div class="icon-large">
          <img src="assets/img/pie-icon.png" alt="No Budget" />
        </div>
        <p>Belum ada anggaran</p>
        <button class="btn-secondary">Buat Anggaran Pertama</button>
      </div>
    </div>
  </main>

  <script src="assets/js/main.js"></script>
</body>
</html>