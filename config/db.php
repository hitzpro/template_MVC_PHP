<?php

$host = "localhost";
$username = "root";
$password = "";
$db_name = "db_wojwp";

$conn = mysqli_connect($host,$username,$password,$db_name);

if(!$conn){
    echo "
        gagal koneksi ke database
    ";
}