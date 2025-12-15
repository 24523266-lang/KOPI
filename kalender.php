<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Kalender Keuangan - MONELO</title>
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
      <a href="kalender.php" class="active"><i class="icon-kalender"></i> Kalender</a>
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
      <h1>Kalender Keuangan</h1>
      <p>Lihat transaksi dan pengingat berdasarkan tanggal</p>
    </header>

    <div class="calendar-container">
      <div class="calendar-header">
        <h2>Desember 2025</h2>
        <div class="nav-buttons">
          <button class="btn-nav">&lt;</button>
          <button class="btn-nav">&gt;</button>
        </div>
      </div>

      <div class="calendar-grid">
        <div class="day-header">Min</div>
        <div class="day-header">Sen</div>
        <div class="day-header">Sel</div>
        <div class="day-header">Rab</div>
        <div class="day-header">Kam</div>
        <div class="day-header">Jun</div>
        <div class="day-header">Sab</div>

        <!-- Tanggal -->
        <div class="day">1</div>
        <div class="day">2</div>
        <div class="day">3</div>
        <div class="day">4</div>
        <div class="day">5</div>
        <div class="day">6</div>
        <div class="day">7</div>
        <div class="day">8</div>
        <div class="day">9</div>
        <div class="day">10</div>
        <div class="day">11</div>
        <div class="day selected">12</div>
        <div class="day">13</div>
        <div class="day">14</div>
        <div class="day">15</div>
        <div class="day">16</div>
        <div class="day">17</div>
        <div class="day">18</div>
        <div class="day">19</div>
        <div class="day">20</div>
        <div class="day">21</div>
        <div class="day">22</div>
        <div class="day">23</div>
        <div class="day">24</div>
        <div class="day">25</div>
        <div class="day">26</div>
        <div class="day">27</div>
        <div class="day">28</div>
        <div class="day">29</div>
        <div class="day">30</div>
        <div class="day">31</div>
      </div>
    </div>

    <div class="detail-panel">
      <h3>Pilih tanggal</h3>
      <p>Klik tanggal untuk melihat detail</p>
    </div>
  </main>

  <script src="assets/js/main.js"></script>
</body>
</html>