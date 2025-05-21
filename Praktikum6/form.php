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
?>
<!DOCTYPE html>
<html>
<head>
  <title>Pendaftaran Penerbangan</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h2>Pendaftaran Rute Penerbangan</h2>
    <form action="hasil.php" method="post">
      <label>Nama Maskapai:</label>
      <input type="text" name="maskapai" required>

      <label>Bandara Asal:</label>
      <select name="asal">
        <?php foreach ($bandara_asal as $nama => $pajak): ?>
          <option value="<?= $nama ?>"><?= $nama ?></option>
        <?php endforeach; ?>
      </select>

      <label>Bandara Tujuan:</label>
      <select name="tujuan">
        <?php foreach ($bandara_tujuan as $nama => $pajak): ?>
          <option value="<?= $nama ?>"><?= $nama ?></option>
        <?php endforeach; ?>
      </select>

      <label>Harga Tiket (Rp):</label>
      <input type="number" name="harga" required>

      <button type="submit">Proses</button>
    </form>
  </div>
</body>
</html>
