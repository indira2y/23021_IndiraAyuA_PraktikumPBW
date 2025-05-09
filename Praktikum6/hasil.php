<?php
$bandara_asal = [
  "Soekarno Hatta" => 65000,
  "Husein Sastranegara" => 50000,
  "Abdul Rachman Saleh" => 40000,
  "Juanda" => 30000,
  "Adi Soemarmo" => 45000,
  "Supadio" => 55000,
  "Depati Amir" => 47000,
  "Minangkabau" => 60000,
  "Kualanamu" => 58000,
  "Sultan Mahmud Badaruddin II" => 53000,
  "Radin Inten II" => 49000,
  "Syamsudin Noor" => 46000,
  "Sultan Aji Muhammad Sulaiman" => 52000,
  "Juwata" => 44000,
  "Haluoleo" => 42000,
  "Betoambari" => 31000,
  "Sultan Babullah" => 33000,
  "Wolter Monginsidi" => 41000,
  "Tanjung Api" => 32000,
  "Bunyu" => 36000,
  "Sultan Bantilan" => 39000,
  "Tampa Padang" => 35000
];

$bandara_tujuan = [
  "Ngurah Rai" => 85000,
  "Hasanuddin" => 70000,
  "Inanwatan" => 90000,
  "Sultan Iskandar Muda" => 60000,
  "El Tari" => 65000,
  "Frans Kaisiepo" => 75000,
  "Domine Eduard Osok" => 67000,
  "Mopah" => 72000,
  "Pattimura" => 68000,
  "Tjilik Riwut" => 62000,
  "Batu Licin" => 59000,
  "Tanah Grogot" => 61000,
  "Melonguane" => 64000,
  "Sangia Nibandera" => 58000,
  "Sam Ratulangi" => 66000,
  "Rendani" => 69000,
  "Mozez Kilangin" => 71000,
  "Namniwel" => 73000,
  "Karel Sadsuitubun" => 74000,
  "Kalimarau" => 77000,
  "Oesman Sadik" => 76000,
  "Beringin" => 79000
];

$maskapai = $_POST['maskapai'] ?? '';
$asal = $_POST['asal'] ?? '';
$tujuan = $_POST['tujuan'] ?? '';
$harga = isset($_POST['harga']) ? (int)$_POST['harga'] : 0;

$pajak_asal = $bandara_asal[$asal] ?? 0;
$pajak_tujuan = $bandara_tujuan[$tujuan] ?? 0;
$total = $harga + $pajak_asal + $pajak_tujuan;

function rupiah($angka) {
  return 'Rp ' . number_format($angka, 0, ',', '.');
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Hasil Pendaftaran</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h2>Hasil Pendaftaran Rute Penerbangan</h2>
    
    <h3>Detail Penerbangan</h3>
    <p><strong><?= htmlspecialchars($maskapai) ?></strong></p>

    <table>
      <tr><td>Asal Penerbangan</td><td><?= $asal ?> (<?= rupiah($pajak_asal) ?>)</td></tr>
      <tr><td>Tujuan Penerbangan</td><td><?= $tujuan ?> (<?= rupiah($pajak_tujuan) ?>)</td></tr>
      <tr><td>Harga Tiket</td><td><?= rupiah($harga) ?></td></tr>
      <tr><td>Pajak</td><td><?= rupiah($pajak_asal + $pajak_tujuan) ?></td></tr>
      <tr><td><strong>Total Harga Tiket</strong></td><td><strong><?= rupiah($total) ?></strong></td></tr>
    </table>

    <h3>Detail Pajak</h3>
    <table>
      <tr><th>Bandara</th><th>Pajak</th></tr>
      <tr><td><?= $asal ?></td><td><?= rupiah($pajak_asal) ?></td></tr>
      <tr><td><?= $tujuan ?></td><td><?= rupiah($pajak_tujuan) ?></td></tr>
      <tr><td><strong>Total Pajak</strong></td><td><strong><?= rupiah($pajak_asal + $pajak_tujuan) ?></strong></td></tr>
    </table>

    <p>Tanggal pendaftaran: <?= date("d-m-Y H:i:s") ?></p>

    <form action="form.php" method="post" style="margin-top: 20px; display: flex; gap: 10px;">
      <button type="submit">Kembali ke Form Pendaftaran</button>
      <button type="reset">Bersihkan Data</button>
    </form>
  </div>
</body>
</html>
