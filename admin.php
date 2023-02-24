<?php
include 'db.php';
$tampil_buku = mysqli_query($connect, "select * from book inner join penerbit on book.id_penerbit = penerbit.id_penerbit");
$tampil_penerbit = mysqli_query($connect, "select * from penerbit");

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
        <?php if(isset($_GET['pesan']) == 1):?>
        <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
        <strong>Berhasil</strong>.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php endif?>
        
        <h2>Tabel Buku</h2>
        <a href="add.php?type=buku" class="btn btn-success" >tambah</a>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Id Buku</th>
                <th scope="col">Nama Buku</th>
                <th scope="col">Harga</th>
                <th scope="col">Kategori</th>
                <th scope="col">Stok</th>
                <th scope="col">Penerbit</th>
                <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($tampil_buku as $buku):?>
                <tr>
                <td><?=$buku['id_buku']?></td>
                <td><?=$buku['kategori']?></td>
                <td><?=$buku['nama_buku']?></td>
                <td><?=$buku['harga']?></td>
                <td><?=$buku['stok']?></td>
                <td><?=$buku['nama']?></td>
                <td>   
                    <a class="btn btn-danger" onclick="hapus()" href="delete.php?id=<?=$buku['id_buku']?>&type=buku">delete</a>
                    <a class="btn btn-warning" href="edit.php?id=<?=$buku['id_buku']?>&type=buku">edit</a>
            
                </td>
                </tr>
                <?php endforeach?>
            </tbody>
        </table>
        <h2 clas="mt-5">Tabel Penerbit</h2>
        <a href="add.php?type=penerbit" class="btn btn-success" >tambah</a>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Id Penerbit</th>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">Kota</th>
                <th scope="col">Telepon</th>
                <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($tampil_penerbit as $penerbit):?>
                <tr>
                <td><?=$penerbit['id_penerbit']?></td>
                <td><?=$penerbit['nama']?></td>
                <td><?=$penerbit['alamat']?></td>
                <td><?=$penerbit['kota']?></td>
                <td><?=$penerbit['telepon']?></td>
                
                <td>   
                    <a class="btn btn-danger" onclick="hapus()" href="delete.php?id=<?=$penerbit['id_penerbit']?>&type=penerbit">delete</a>
                    <a class="btn btn-warning" href="edit.php?id=<?=$penerbit['id_penerbit']?>&type=penerbit">edit</a>
            
                </td>
                </tr>
                <?php endforeach?>
            </tbody>
        </table>
    </div>
    <script>
        function hapus(){
            var con = confirm("apakah anda yakin akan menghapus data ini")
            if(con = false){
                location.reload();
            }
        }
    </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>