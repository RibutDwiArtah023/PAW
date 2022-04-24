<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Hapus Data Mahasiswa</title>
</head>
<body>

<?php
include "konek.php";
$id=$_GET['id'];

$sql="DELETE FROM tbl_dwi WHERE id_dwi=$id";
$hasil=mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "
    <div class='alert alert-danger'> Data gagal di Hapus <br/>";
    echo "<a href='data_mhs.php'>Lihat data</a>";
}else{
    echo "
    <div class='alert alert-success'> Data berhasil di Hapus <br/>";
    echo "<a href='data_mhs.php'>Lihat data</a>";
}

?>