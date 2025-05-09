<?php
include 'koneksi.php';

$id = $_GET['id'];

$sql = "SELECT * FROM mahasiswa WHERE id = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

    <div class="container mx-auto py-10">
        <h1 class="text-3xl font-bold text-center text-gray-800 mb-8">Edit Data Mahasiswa</h1>

        <div class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow-lg">
            <form action="update.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <form action="update.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

    <div class="mb-4">
        <label for="nama_lengkap" class="block text-gray-700">Nama Lengkap</label>
        <input type="text" id="nama_lengkap" name="nama_lengkap" value="<?php echo $row['nama_lengkap']; ?>" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
    </div>

    <div class="mb-4">
        <label for="mata_kuliah" class="block text-gray-700">Mata Kuliah</label>
        <input type="text" id="mata_kuliah" name="mata_kuliah" value="<?php echo $row['mata_kuliah']; ?>" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
    </div>

    <div class="mb-4">
        <label for="keterangan" class="block text-gray-700">Keterangan</label>
        <input type="text" id="keterangan" name="keterangan" value="<?php echo $row['keterangan']; ?>" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
    </div>

    <div class="flex justify-center">
        <button type="submit" class="px-6 py-3 bg-gradient-to-r from-green-400 via-green-500 to-green-600 text-white rounded-lg shadow-md transform hover:scale-105 hover:shadow-xl transition-all duration-300">Update</button>
    </div>
</form>
        </div>
    </div>

</body>
</html>

<?php
$conn->close();
?>
