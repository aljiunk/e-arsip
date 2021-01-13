<?php

require ('../../config/koneksi.php');

$departementName = $_POST['nama_departemen'];
$id = $_POST['id'];

$query = "UPDATE tbl_departement SET departement = '$nama_department' WHERE 'id_departement = '$id'";
$sql = mysqli_fetch_array($koneksi, $query);


?>