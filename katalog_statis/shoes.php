<?php 
require "koneksi.php";
require "data.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: #f4f4f4;
        }
        .container {
            width: 600px;
            margin: 0 auto;
            padding: 40px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-size: 30px;
            font-weight: Bold;
        }
        input[type="text"], input[type="date"], input[type="number"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        input[type="radio"], input[type="checkbox"]{
            margin-right: 1px;
        }
        input[type="submit"] {
            background-color: #f4f4f4;
            color: #000;
            margin-top: 20px;
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="data.php" method="POST" enctype="multipart/form-data">
            <label for="judul">Onitsuka Product</label><br>
            Nama <input type="text" name="nama_produk"><br>
            Deskripsi <br><textarea  name="deskripsi" rows="10" cols="81"></textarea><br>
            Harga <input type="number" name="harga" step="0.01" min="0" required><br>
            ukuran <br/>
            <?php 
                for($i = 38; $i<=44; $i++){
                    ?>
                        <input type="checkbox" name="ukuran[]" id="" value="<?= $i ?>"> <?= $i ?>
                    <?php 
                }
            ?>
            <br/><br>
            Kategori <select name="kategori_id" id="" class="form-control">
                        <option value="">--Pilih Kategori--</option>
                        <?php 
                            $kategori_id = "SELECT * FROM kategori";

                            $query3 = mysqli_query($koneksi, $kategori_id);
                            while($kat = mysqli_fetch_array($query3)){
                        ?>
                        <option value="<?= $kat['id'] ?>"><?= $kat['nama'] ?></option>
                       <?php } ?>
                    </select>
            <input type="submit" name="btn" value="Submit">
        </form>
    </div>
</body>
</html>