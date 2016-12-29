<?php
include "koneksi.php";


// assigment nim dengan nilai nim yang akan diedit
// jika tombol 'Simpan' dengan properti name="save" pada baris 162 ditekan
$id = $_POST['idbarang'];
$barang = $_POST['n_barang'];
$kategori = $_POST['kategori'];
$harga = $_POST['harga'];
$stock = $_POST['stock'];
$keterangan = $_POST['keterangan'];
$gambar = $_POST['gambar'];
$tgl_input = $_POST['tgl_input'];


$update = mysqli_query($conn, "UPDATE barang SET n_barang='$barang', kategori='$kategori', harga='$harga', stock='$stock', gambar='$gambar', keterangan='$keterangan', tgl_input='$tgl_input' WHERE idbarang='$id'"); // query untuk mengupdate nilai entri dalam database
mysqli_query($conn, $update);
header("location: barang.php");


?>