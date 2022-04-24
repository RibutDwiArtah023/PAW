<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Form Update Data Mahasiswa</title>
</head>
<body>
<?php
include 'konek.php';
$id=$_GET['id'];
$sql = "SELECT * FROM tbl_dwi where id_dwi=$id";
$hasil = mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "query salah";
}
?>
<?php
while ($row = mysqli_fetch_array($hasil))
{
?>
    <div class="w-50 mx-auto border p-3 mt-5">
    <a href="data_mhs.php">Kembali ke home</a>
        <div class="card-header">
            <h2> FORM EDIT DATA MAHASISWA </h2>
        </div>
        <form method="POST" action="update.php">
            <input type="hidden" name="id_dwi" value="<?php echo $row['id_dwi']?>">
            <label for="nama">Nama Mahasiswa</label>
            <input type="text" id="nama_mhs" name="nama_dwi" value="<?php echo $row['nama_dwi']?>" class="form-control" placeholder="--masukkan nama mahasiswa--">

            <label for="alamat">Alamat Mahasiswa</label>
            <input type="text" id="alamat_mhs" name="alamat_dwi" value="<?php echo $row['alamat_dwi']?>" class="form-control" placeholder="--masukkan email mahasiswa--"> 

            <label for="email">Email</label>
            <input type="text" id="email_mhs" name="email_dwi" value="<?php echo $row['email_dwi']?>" class="form-control" placeholder="--masukkan alamat--">

            <input class="btn btn-success mt-3" type="submit" value="Update">
        </form>  
    </div>

<?php }?>
</body>
</html>