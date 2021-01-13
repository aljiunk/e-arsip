<?php

@$halaman =$_GET['halaman'];

if($halaman =="departemen")
{
    //tampilkan halaman departemen
   // echo"tampil halaman modul departemen";
   include "modul/departemen/departemen.php";
}
elseif ($halaman =="pengirim_surat")
{
    //tampilkan halaman pengirim surat
    echo"tampil halaman modul pengirim_surat";
}
elseif ($halaman=="arsip_surat")
{
    //tampilkan halaman arsip
    echo"tampil halaman modul arsip surat";
}
else{
   // echo "tampil halaman Home";
    include "modul/home.php";
}
?>