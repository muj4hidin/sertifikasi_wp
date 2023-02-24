<?php
include 'db.php';
if(isset($_GET['s'])){
    $cari = $_GET['s'];
    $tampil = mysqli_query($connect, "select * from book inner join penerbit on book.id_penerbit = penerbit.id_penerbit where nama_buku like '%".$cari."%'");
}else{
    
    $tampil = mysqli_query($connect, "select * from book inner join penerbit on book.id_penerbit = penerbit.id_penerbit");
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
        <form class="d-flex" >

            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="s">
            <button class="btn btn-success" type="submit">Search</button>
        </form>
        </div>
    </div>
    </nav>
    <div class="container">
    <h2>List Buku</h2>
    <div class="row">
        <?php foreach($tampil as $value):?>
        <div class="col-md-4 mb-3 mt-3">
            <div class="card">
                <div class="card-header">
                    <?=$value['nama_buku']?>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Kategori :<?=$value['kategori']?></li>
                    <li class="list-group-item">Penerbit :<?=$value['nama']?></li>
                    <li class="list-group-item">Stok : <?=$value['stok']?></li>
                </ul>
                <div class="card-footer">
                    <a class="btn btn-primary" href="/beli.php?id=<?=$value['id_buku']?>">beli</a>
                </div>
            </div>           
        </div>
        <?php endforeach?>    
    </div>
    </div>
</body>
</html>