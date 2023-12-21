
<?php

require 'konek.php';


    // mengambil data dari tombool register
   if(isset($_POST['register'])){
    // jika tombol register memiliki sebuah nilai
    if(registrasi($_POST)>0 ){
        // hasil yang di tampilkan
        echo "<script>
            alert('akun berhasil di tambahkan')
        </script>";
        header("Location: http://localhost/Object/login/index.php");
    } else {
        // jika tidak memiliki nilai akan langsung eror
        echo mysqli_error($koneksi);
    }

   }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>registration</title>
    <style>
        *,body{
            margin: 0;
            padding: 0;
            font-family: 'Gill Sans', sans-serif;
        }

        .card {
            position: absolute;
            left: 520px;
            top: 200px;
            border: 1px solid #000;
            width: 200px;
            height: 200px;
            border-radius: 10px;
            box-shadow: 5px 10px #000;
        }
        .card>h1{
            text-align: center;
            font-size: 2em;
        }
        .card>input{
            position: absolute;
            left: 20px;
            border-top: none;
            border-left: none;
            border-right: none;
            outline: none;
            border-bottom: 1px solid #000;
            
        }

        .card>.tbl{
            position: relative;
            left:25px;
            width: 153px;
            border: 1px solid #000;
            position: relative;
            top: 15px;
            border-radius: 5px;
            transform: width 2s linear;
            background-color: white;
        }

        .card>.tbl:hover {
            cursor: pointer;
        }

        .card>p{
            font-size: 0.7em;
            position: relative;
            left: 20px;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }

        
    </style>
</head>
<body>
    <form action="registrasi.php" method="post">
    <div class="card">
        <h1>Registration</h1>
        <hr>
        <br>
        <p>masukan username :</p>
        <input type="text" name="Fullusername">
        <br>
        <p>masukan password :</p>
        <input type="password" name="Fullpassword">
        <br>
        <p>masukan password ulang :</p>
        <input type="password" name="Fullpassword2">
        <br>
        <hr>
       <button class="tbl" type="submit" name="register">Register</button>
    </div>
    </form>
</body>
</html>