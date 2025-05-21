<?php
include 'koneksi.php';

$id = $_GET['id'];

$sql = "SELECT * FROM mahasiswa WHERE id = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Proses penghapusan data
    $sql = "DELETE FROM mahasiswa WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Record deleted successfully'); window.location.href='index.php';</script>";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

    <div class="container mx-auto py-10">
        <h1 class="text-3xl font-bold text-center text-gray-800 mb-8">Konfirmasi Hapus Data Mahasiswa</h1>

        <div class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow-lg">
            <p class="text-lg mb-6">Apakah Anda yakin ingin menghapus data mahasiswa berikut?</p>
            
            <div class="mb-4">
                <p class="font-bold">Nama Lengkap:</p>
                <p class="text-gray-600"><?php echo $row['nama_lengkap']; ?></p>
            </div>

            <div class="mb-4">
                <p class="font-bold">Mata Kuliah:</p>
                <p class="text-gray-600"><?php echo $row['mata_kuliah']; ?></p>
            </div>

            <div class="mb-4">
                <p class="font-bold">Keterangan:</p>
                <p class="text-gray-600"><?php echo $row['keterangan']; ?></p>
            </div>

            <!-- Modal Button -->
            <form method="POST">
                <div class="flex justify-center space-x-4">
                    <button type="submit" class="px-6 py-3 bg-gradient-to-r from-red-400 via-red-500 to-red-600 text-white rounded-lg shadow-md transform hover:scale-105 hover:shadow-xl transition-all duration-300">Hapus</button>
                    <a href="index.php" class="px-6 py-3 bg-gradient-to-r from-gray-400 via-gray-500 to-gray-600 text-white rounded-lg shadow-md transform hover:scale-105 hover:shadow-xl transition-all duration-300">Batal</a>
                </div>
            </form>
        </div>
    </div>

</body>
</html>

<?php
$conn->close();
?>
