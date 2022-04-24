<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Action</title>
</head>
<body>

<?php
include "konek.php";

// $id = $_POST["id_dwi"];
$nama = $_POST["nama_dwi"];
$email = $_POST["email_dwi"];
$alamat = $_POST["alamat_dwi"];

$sql = "INSERT INTO tbl_dwi VALUES(null,'$nama','$email','$alamat')";
$hasil =mysqli_query($koneksi, $sql);

if (!$hasil){
    echo "
    <div class='alert alert-danger'> Tambah data mahasiswa gagal <br/>";
    echo "<a href='data_mhs.php'>Lihat data</a>";
}else{
    echo "
    <div class='alert alert-success'> Tambah data mahasiswa berhasil <br/>";
    echo "<a href='data_mhs.php'>Lihat data</a>";
}
?>