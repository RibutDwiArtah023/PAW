<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Form Tambah Mahasiswa</title>
</head>
<body>
    <div class="w-50 mx-auto border p-3 mt-5">
    <a href="data_mhs.php">Kembali ke home</a>
        <div class="card-header">
            <h1> FORM DATA MAHASISWA </h1>
        </div>
        <form method="POST" action="action.php">
            <label for="nama">Nama Mahasiswa</label>
            <input type="text" id="nama_mhs" name="nama_dwi" class="form-control" placeholder="--masukkan nama mahasiswa-">

            <label for="email">Email</label>
            <input type="text" id="email_mhs" name="email_dwi" class="form-control" placeholder="--masukkan email--">

            <label for="alamat">Alamat</label>
            <input type="text" id="alamat_mhs" name="alamat_dwi" class="form-control" placeholder="--masukkan alamat--">

            <input class="btn btn-success mt-3" type="submit" value="Kirim">
        </form>  
    </div>
    
</body>
</html>