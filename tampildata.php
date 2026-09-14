<?php

require_once('connection.php');

$host = "Localhost";
$username = "root";
$password = "";
$database = "murid_pplg";
echo "<br/>";
echo "<hr/>";

$koneksi = mysqli_connect($host,$username,$password,$database);
$querydata = "SELECT * FROM pplg2";

$hasil = mysqli_query($koneksi, $querydata);

if($hasil && $hasil->num_rows>0) {
    while($rowdata = $hasil->fetch_assoc()){
        // var_dump($rowdata);
        echo "NIS: ", $rowdata["NIS"]. "<br/>";
        echo "Nama: ", $rowdata["Nama_siswa"]. "<br/>";
        echo "Hobi: ", $rowdata["Hobi"]. "<br/>";
        echo "<hr/>";
    }
    
}else {
    echo "Data tidak ditemukan";
}
?>