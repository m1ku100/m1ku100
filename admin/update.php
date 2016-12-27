<?php
include "koneksi.php";

$id = $_POST['idbarang'];
$barang = $_POST['n_barang'];
$kategori = $_POST['kategori'];
$harga = $_POST['harga'];
$stock = $_POST['stock'];
$keterangan = $_POST['keterangan'];
$foto = $_POST['foto'];
$tgl_input = $_POST['tgl_input'];

$juh = "update barang set idbarang='$id', n_barang='$barang', kategori='$kategori',harga='$harga', 
              keterangan='$keterangan', gambar='$foto' tgl_input='$tgl_input'where idbarang";

mysqli_query($conn, $juh);
header("location: barang.php");
?>