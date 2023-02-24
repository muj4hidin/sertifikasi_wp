<?php
include 'db.php';

if(isset($_GET['type']) && $_GET['type'] == "buku"){
    $id = $_GET['id'];
    $delete = mysqli_query($connect, "delete from book where id_buku='$id'");
    if($delete){
        header('Location:admin.php?pesan=1');
    }
}
else if(isset($_GET['type'] ) && $_GET['type']== "penerbit"){
    $id = $_GET['id'];
    $delete = mysqli_query($connect, "delete from penerbit where id_penerbit='$id'");
    if($delete){
        header('Location:admin.php?pesan=1');
    }
}

?>