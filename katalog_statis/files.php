<?php 
require "koneksi.php"; // file koneksi.php terdapat didalam folder config 
require "data.php";
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

            <form action="" method="POST">
            
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="" placeholder="" name="nama_produk">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Deskripsi</label>
                    <textarea name="deskripsi" id="" cols="30" rows="5" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Harga</label>
                    <input type="text" class="form-control" id="" placeholder="" name="harga">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Ukuran</label>
                    <input type="text" class="form-control" id="" placeholder="" name="ukuran">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Gambar</label>
                    <input type="file" class="form-control" name="gambar">
                </div>
                
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Kategori</label>
                    <select name="kategori_id" id="" class="form-control">
                        <option value="">--Pilih Kategori--</option>
                        <?php 
                            $kategori_id = "SELECT * FROM kategori";

                            $query3 = mysqli_query($koneksi, $kategori_id);
                            while($kat = mysqli_fetch_array($query3)){
                        ?>
                        <option value="<?= $kat['id'] ?>"><?= $kat['nama'] ?></option>
                       <?php } ?>
                    </select>
                </div>
                <div class="mb-3">
                    <input type="submit" value="Inputkan Data" class="btn btn-primary" name="inputBarang">
                </div>
            </form>
        </div>
    </div>
</body>
</html>