<?php
session_start();
include "koneksi.php";
$sid = session_id();


//di cek dulu apakah barang yang di beli sudah ada di tabel keranjang
$sql = mysqli_query("SELECT idbarang FROM keranjang WHERE idbarang='$_GET[id]' AND id_session='$sid'");
$ketemu=mysql_num_rows($sql);
if ($ketemu==0){
    // kalau barang belum ada, maka di jalankan perintah insert
    mysql_query("INSERT INTO keranjang (idbarang, jumlah, id_session)
				VALUES ('$_GET[id]', 1, '$sid')");
} else {
    //  kalau barang ada, maka di jalankan perintah update
    mysql_query("UPDATE keranjang
		        SET jumlah = jumlah + 1
				WHERE id_session ='$sid' AND idbarang='$_GET[id]'");
}
header('Location:cart.php');
?>