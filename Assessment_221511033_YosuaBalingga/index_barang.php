<?php
include 'libraries/database.php';
$sql = "select * from barangs";
$data_barangs = $mysqli ->query($sql);
include 'views/v_index_barang.php';

//$sqlriwayatPendidikan = "select * from riwayatpendidikan";
//$data_riwayatpendidikan = $mysqli ->query($sqlriwayatPendidikan);
// include 'views/v_riwayatadd.php';
?>