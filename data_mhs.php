<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <title>Data Mahasiswa</title>
</head>
<body>
    <div class="container mt-3">
        <a href="form_mhs.php" class="btn btn-primary btn-md mb-3"> <i class="fa fa-plus"></i> Tambah Data </a>
        <div class="w-100 mx-auto border p-3 mt-2">
        <div class="card-header">
            <h2> DATA MAHASISWA </h2>
        </div>
        <table class="table table-striped tabel-hover table-bordered">
            <thead class="table-dark">
                <th>ID Mahasiswa</th>
                <th>Nama Mahasiswa</th>
                <th>Email Mahasiswa</th>
                <th>Alamat Mahasiswa</th>
                <th>Action</th>
            </thead>

        <?php
        include "konek.php";
        $sql="SELECT * FROM tbl_dwi";
        $hasil = mysqli_query($koneksi, $sql);
        while($row = mysqli_fetch_array($hasil))
        {
        ?>
        <tr>
            <td><?=$row['id_dwi'];?></td>
            <td><?=$row['nama_dwi'];?></td>
            <td><?=$row['alamat_dwi'];?></td>
            <td><?=$row['email_dwi'];?></td>
            <td><a href="form_edit.php?id=<?=$row['id_dwi']?>" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i> Edit </a>
            <a href="hapus.php?id=<?=$row['id_dwi']?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Delete</td>
        </tr>
        <?php }
        ?>
        </table>

        
</body>
</html>