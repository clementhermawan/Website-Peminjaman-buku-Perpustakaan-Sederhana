<?php

    // berfungsi untuk menghubungkan database dengan index.php
    $koneksi = mysqli_connect('localhost','root','','akademik');

    // berfungsi untuk menampilkan apakah database terhubung atau tidak
    if(!$koneksi){
        echo "koneksi gagal";
    } 

?>