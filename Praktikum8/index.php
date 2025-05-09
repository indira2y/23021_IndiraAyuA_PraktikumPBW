<?php
include 'koneksi.php';

$sql = "SELECT * FROM mahasiswa ORDER BY id";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

    <div class="container mx-auto py-10">
        <h1 class="text-5xl font-bold text-center text-gray-800 mb-8">Data Mahasiswa</h1>

        <!-- Tambah Data Mahasiswa Button -->
        <div class="text-center mb-6">
            <a href="add.php" class="px-6 py-3 bg-gradient-to-r from-purple-400 via-purple-500 to-purple-600 text-white rounded-lg shadow-md transform hover:scale-105 hover:shadow-xl transition-all duration-300">
                Tambah Data Mahasiswa
            </a>
        </div>

        <!-- Tabel Data Mahasiswa -->
        <div class="overflow-x-auto bg-white shadow-lg rounded-xl">
            <table class="min-w-full text-left table-auto">
                <thead>
                    <tr class="bg-gradient-to-r from-purple-400 via-purple-500 to-purple-600 text-white">
                        <th class="py-4 px-6 text-lg font-medium">No</th>
                        <th class="py-4 px-6 text-lg font-medium">Nama Lengkap</th>
                        <th class="py-4 px-6 text-lg font-medium">Mata Kuliah</th>
                        <th class="py-4 px-6 text-lg font-medium">Keterangan</th>
                        <th class="py-4 px-6 text-lg font-medium">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1; 
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr class='border-t bg-gradient-to-r from-white to-gray-100 hover:from-purple-100 hover:to-purple-200 transition-all duration-300'>
                                    <td class='py-4 px-6'>{$no}</td> <!-- Menampilkan nomor urut -->
                                    <td class='py-4 px-6'>{$row['nama_lengkap']}</td>
                                    <td class='py-4 px-6'>{$row['mata_kuliah']}</td>
                                    <td class='py-4 px-6'>{$row['keterangan']}</td>
                                    <td class='py-4 px-6 flex space-x-3 justify-center'>
                                        <a href='edit.php?id={$row['id']}' class='inline-block px-5 py-2 text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 rounded-lg shadow-md transform hover:scale-105 hover:shadow-xl transition-all duration-300'>Edit</a>
                                        <a href='delete.php?id={$row['id']}' class='inline-block px-5 py-2 text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 rounded-lg shadow-md transform hover:scale-105 hover:shadow-xl transition-all duration-300'>Delete</a>
                                    </td>
                                </tr>";
                            $no++; 
                        }
                    } else {
                        echo "<tr><td colspan='5' class='py-4 px-6 text-center text-gray-500'>No records found</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>

<?php
$conn->close();
?>
