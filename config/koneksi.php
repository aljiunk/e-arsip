<?php

//buat koneksi database
//identitas
$server ="localhost";
$user   ="root";
$pass   ="";
$database="db";

//koneksi data base
$koneksi =mysqli_connect($server,$user,$pass,$database)or die(mysqli_error($koneksi));




?>