<?php
// Ambil data barang dari database dan tetapkan ke $data_barangs
$koneksi = new mysqli("localhost", "root", "", "uasyos");

// Periksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

// Query untuk mendapatkan data barang
$sql = "SELECT * FROM barangs";
$result = $koneksi->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="path-to-your-css/wp5.css">
    <title>Tabel Barang</title>
</head>
<body>

<div class="container">
    <h1 class="title">Tabel Barang</h1>

    <div class="tam">
        <a href="v_tambah_barang.php" class="btn btn-primary">Tambah Data Barang</a>
    </div>

    <br><br>

    <div class="tampilan">
        <table class="table table-bordered">
            <thead class="thead-dark"> 
                <tr>
                    <th>No</th>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Satuan</th>
                    <th>Harga Satuan</th>
                    <th>Stok</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $i = 1;
                    // Periksa apakah query berhasil dijalankan
                    if ($result) {
                        while ($barang = $result->fetch_array()) {
                            ?>
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td><?php echo $barang['kode_Barang']; ?></td>
                                <td><?php echo $barang['nama_Barang']; ?></td>
                                <td><?php echo $barang['satuan']; ?></td>
                                <td><?php echo $barang['harga_Satuan']; ?></td>
                                <td><?php echo $barang['stok']; ?></td>
                                <td>
                                    <a href="edit_barang.php?id=<?= $barang['kode_Barang'] ?>" class="btn btn-info">EDIT</a>
                                    <a href="hapus_barang.php?id=<?= $barang['kode_Barang'] ?>" class="btn btn-danger">HAPUS</a>
                                    <!-- Tambahkan aksi lain sesuai kebutuhan -->
                                </td>
                            </tr>
                            <?php
                        }
                    } else {
                        echo "Error: " . $koneksi->error; // Tampilkan pesan error jika query gagal
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
