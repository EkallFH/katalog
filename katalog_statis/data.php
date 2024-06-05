<?php
include "koneksi.php";
if (isset($_POST['btn'])) {
    
    $nama_produk = $_POST['nama_produk'];
    $deskripsi = $_POST['deskripsi'];
    $harga = $_POST['harga'];
    $ukuran = implode($_POST['ukuran']);
    $kategori_id = $_POST['kategori_id'];

    
        $query = "INSERT INTO produk VALUES ('', '$nama_produk', '$deskripsi', $harga, $ukuran, $kategori_id)";

        mysqli_query($koneksi, $query);

        header ("location:shoes.php");

}
?>