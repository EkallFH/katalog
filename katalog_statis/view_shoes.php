<?php 
    require "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">
        <div class=row>
            <h3> List Data Sepatu</h3>
            <table class="table">
                <tr>
                    <td>No. </td>
                    <td>Nama Produk </td>
                    <td>Deskripsi</td>
                    <td>Harga</td>
                    <td>Ukuran</td>
                    <td>Kategori</td>
                    <td colspan=2> Menu</td>
                </tr>
                <?php 
                    $query = "SELECT *, kategori.nama as kat FROM produk
                    LEFT JOIN kategori ON produk.kategori_id = kategori.id";
                    $query_shoes = mysqli_query($koneksi, $query);
                    $no = 1; 
                    
                    while($onit_db = mysqli_fetch_array($query_shoes)){
                ?>
                <tr>
                    <td><?= $onit_db['id_produk'] ?></td>
                    <td><?= $onit_db['nama_produk']?></td>
                    <td><?= $onit_db['deskripsi']?></td>
                    <td><?= $onit_db['harga']?></td>
                    <td><?= $onit_db['ukuran']?></td>
                    <td><?= $onit_db['kat']?></td>
                    <td > Edit</td>
                    <td> <a href="?del=<?= $dbuku[0] ?>"> Delete</td>
                </tr>
                <?php 
                    } 
                ?>
            </table>
        </div>
</div>
</body>
</html>