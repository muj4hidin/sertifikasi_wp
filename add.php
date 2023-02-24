<?php
include 'db.php';

$tampil_penerbit = mysqli_query($connect, "select id_penerbit,nama from penerbit");

if(isset($_POST['submit'])){
    if($_POST['type'] == "buku"){
        $id_buku = $_POST['id_buku'];
        $nama_buku = $_POST['nama_buku'];
        $kategori = $_POST['kategori'];
        $harga = $_POST['HARGA'];
        $stok = $_POST['stok'];
        $penerbit = $_POST['penerbit'];

        $add = mysqli_query($connect, "insert into book values('$id_buku','$kategori','$nama_buku','$harga', '$stok', '$penerbit')");

        if($add){
            header ('Location:admin.php?pesan=2');
        }
    }
    if($_POST['type'] == "penerbit"){
        $id_penerbit = $_POST['id_penerbit'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $kota = $_POST['kota'];
        $telepon = $_POST['telepon'];

        $add = mysqli_query($connect, "insert into penerbit values('$id_penerbit','$nama','$alamat', '$kota', '$telepon')");

        if($add){
            header ('Location:admin.php?pesan=2');
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <title>UNIBOOKSTORE</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">UNIBOOKSTORE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="admin.php">Admin</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="pengadaan.php">Pengadaan</a>
                </li>
            </ul>

            </div>
        </div>
    </nav>
    <div class="container">
        <?php if(isset($_GET['type']) && $_GET['type']== "buku"):?>
        <div class="card">
            <form action="" method="post">
                <label for="id_buku" class="mt-3">ID Buku</label>
                <input type="text" class="form-control" name="id_buku" id="id_buku" required>
                <label for="kategori" class="mt-3">Kategori</label>
                <input type="text" class="form-control" name="kategori" id="kategori" required>
                <label for="nama_buku" class="mt-3">Nama Buku</label>
                <input type="text" class="form-control" name="nama_buku" id="nama_buku" required>
                <label for="harga" class="mt-3">Harga</label>
                <input type="text" class="form-control" name="HARGA" id="harga" required>
                <label for="stok" class="mt-3">Stok</label>
                <input type="text" class="form-control" name="stok" id="stok" required>
                <label for="penerbit" class="mt-3"></label>
                <select name="penerbit" id="penerbit" class="form-control" required>
                    <?php foreach($tampil_penerbit as $value):?>
                        <option value="<?=$value['id_penerbit']?>"><?=$value['nama']?></option>
                    <?php endforeach?>
                </select>
                <input type="hidden" name="type" value="buku">
                <input type="submit" class="btn btn-primary mt-3" name="submit">
            </form>
        </div>

        <?php endif?>
        <?php if(isset($_GET['type']) && $_GET['type']== "penerbit"):?>
        <div class="card">
        <form action="" method="post">
            <label for="id_penerbit" class="mt-3">ID Penerbit</label>
            <input type="text" class="form-control" name="id_penerbit" id="id_penerbit" required>
            <label for="nama" class="mt-3">Nama </label>
            <input type="text" class="form-control" name="nama" id="nama" required>
            <label for="alamat" class="mt-3">Alamat</label>
            <input type="text" class="form-control" name="alamat" id="alamat" required>
            <label for="kota" class="mt-3">Kota</label>
            <input type="text" class="form-control" name="kota" id="kota" required>
            <label for="telepon" class="mt-3">Telepon</label>
            <input type="text" class="form-control" name="telepon" id="telepon" required>
            <input type="hidden" name="type" value="penerbit">
            <input type="submit" class="btn btn-primary mt-3" name="submit">
        </form>
        </div>

        <?php endif?>
    </div>

</body>
</html>