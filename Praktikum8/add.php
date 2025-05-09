<?php
include 'koneksi.php';

// Cek apakah form di-submit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari form
    $nama_lengkap = $_POST['nama_lengkap'];
    $mata_kuliah = $_POST['mata_kuliah'];
    $keterangan = $_POST['keterangan'];

    // Query untuk memasukkan data mahasiswa baru
    $sql = "INSERT INTO mahasiswa (nama_lengkap, mata_kuliah, keterangan) VALUES ('$nama_lengkap', '$mata_kuliah', '$keterangan')";

    if ($conn->query($sql) === TRUE) {
        // Jika data berhasil ditambahkan, arahkan kembali ke index.php
        echo "<script>alert('Record added successfully'); window.location.href='index.php';</script>";
    } else {
        // Jika gagal
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

    <div class="container mx-auto py-10">
        <h1 class="text-3xl font-bold text-center text-gray-800 mb-8">Tambah Data Mahasiswa</h1>

        <div class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow-lg">
            <form action="add.php" method="POST">
                <div class="mb-4">
                    <label for="nama_lengkap" class="block text-gray-700">Nama Lengkap</label>
                    <input type="text" id="nama_lengkap" name="nama_lengkap" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
                </div>

                <div class="mb-4">
                    <label for="mata_kuliah" class="block text-gray-700">Mata Kuliah</label>
                    <input type="text" id="mata_kuliah" name="mata_kuliah" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
                </div>

                <div class="mb-4">
                    <label for="keterangan" class="block text-gray-700">Keterangan</label>
                    <input type="text" id="keterangan" name="keterangan" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
                </div>

                <div class="flex justify-center">
                    <button type="submit" class="px-6 py-3 bg-gradient-to-r from-green-400 via-green-500 to-green-600 text-white rounded-lg shadow-md transform hover:scale-105 hover:shadow-xl transition-all duration-300">Tambah</button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>

<?php
$conn->close();
?>
