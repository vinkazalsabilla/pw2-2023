<?php
require_once '../dbkoneksi.php';
?>

//koneksi ke database
$koneksi = mysqli_connect("localhost", "username", "password", "nama_database");

//mendapatkan nilai dari form
$nama_barang = $_POST['nama_barang'];
$jumlah_barang = $_POST['jumlah_barang'];
$harga_barang = $_POST['harga_barang'];
$tanggal_pembelian = $_POST['tanggal_pembelian'];

//query untuk menambahkan data ke tabel pembelian
$query = "INSERT INTO pembelian (nama_barang, jumlah_barang, harga_barang, tanggal_pembelian) VALUES ('$nama_barang', '$jumlah_barang', '$harga_barang', '$tanggal_pembelian')";
$result = mysqli_query($koneksi, $query);

if ($result) {
  //jika berhasil menambahkan data
  echo "Data berhasil ditambahkan";
} else {
  //jika gagal menambahkan data
  echo "Gagal menambahkan data";
}

//menutup koneksi ke database
mysqli_close($koneksi);
