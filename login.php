<?php

// penghubung ke halaman koneksi
include 'koneksi.php';

// mengambil data dari index.php (form)
if(isset($_POST['input'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    // mengambil data dari database
    $query = mysqli_query($koneksi,"SELECT * FROM login WHERE username='$username'");
    $data = mysqli_fetch_array($query);
    $cekdata = mysqli_num_rows($query);

    if($cekdata > 0){
        if($data['level']=='ADMIN'){
            header("Location: http://localhost/Object/login/Dashboard/vendor/sbadmin2/");
        } else if ($data['level']=='USER'){
            header("Location: http://localhost/Object/login/perpustakaan/index_indrawan.html");
        }
    } else {
        echo "login gagal";
    }

    // untuk menampilkan hasil
 


}
?>



