<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_lengkap = $_POST['nama_lengkap'];
    $mata_kuliah = $_POST['mata_kuliah'];
    $keterangan = $_POST['keterangan'];

    $sql = "INSERT INTO mahasiswa (nama_lengkap, mata_kuliah, keterangan) VALUES ('$nama_lengkap', '$mata_kuliah', '$keterangan')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
