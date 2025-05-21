<?php
include 'koneksi.php';

// Cek apakah form di-submit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari form
    $id = $_POST['id'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $mata_kuliah = $_POST['mata_kuliah'];
    $keterangan = $_POST['keterangan'];

    // Query untuk update data mahasiswa
    $sql = "UPDATE mahasiswa SET nama_lengkap = '$nama_lengkap', mata_kuliah = '$mata_kuliah', keterangan = '$keterangan' WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        // Jika update sukses, arahkan kembali ke index.php
        echo "<script>alert('Record updated successfully'); window.location.href='index.php';</script>";
    } else {
        // Jika gagal
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
