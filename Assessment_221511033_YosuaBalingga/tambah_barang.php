<?php
include 'libraries/database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $kode_barang    = $_POST['kode_barang'];
    $nama_barang    = $_POST['nama_barang'];
    $satuan         = $_POST['satuan'];
    $harga_satuan   = $_POST['harga_satuan'];
    $stok           = $_POST['stok'];

    $sql = "INSERT INTO barangs (kode_barang, nama_barang, satuan, harga_satuan, stok) VALUES ('$kode_barang', '$nama_barang', '$satuan', '$harga_satuan', '$stok')";
    $mysqli->query($sql) or die(mysqli_error($mysqli));
    // Jangan perlu header karena form disubmit ke v_tambah_barang.php
}

include 'views/v_index_barang.php';
?>
