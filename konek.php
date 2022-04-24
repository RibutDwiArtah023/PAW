<?php
$host = 'localhost';
$user ='root';
$password ='';
$dbname ='db_023';

$koneksi = mysqli_connect($host,$user,$password,$dbname);
if(!$koneksi){
    echo "koneksi gagal";
}else{
    echo "";
}

?>