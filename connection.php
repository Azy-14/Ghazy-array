<?php

$koneksi = mysqli_connect("localhost","root","",);

if (mysqli_select_db($koneksi,"paqet_db")){
    echo "Welcome";
}else{
    die("terdeteksi suki ");
}

?>