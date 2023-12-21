<!DOCTYPE html>
<html>
<head>
    <title>Halaman Login</title>
    <style>
        body {
            /* background-image: url(assets/609931bb5334c.jpg); */
            font-family: 'Gill Sans', sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            padding-top: 150px;
        }

        .card{
            border-style: 2px solid;
            background-color: rgb(0,0,0); 
            background-color: rgba(0,0,0, 0.4); 
            width: 250px;
            height: 250px;
            padding-left: 50px;
            border-radius: 10px;
            border: 1px solid;
            box-shadow: 5px 10px #000;
        }
        .card>h1 {
            margin-left: 50px;
            color: white;
        }
        .card>input{
            border-bottom: 1px solid #000;
            border-top: none;
            border-left:none ;
            border-right: none;
            background-color: transparent;
            text-decoration: none;
            outline: none;
            
        }
        
        .card>.button{
            width: 180px;
            border-radius: 5px;
            border: none;
            background-color: white;
        }
        .card>.button:hover {
            cursor: pointer;
            border: 2px solid #000;
            background-color: transparent;
            color: white;
        }
        .card>a{
            font-size: 0.6em;
            text-decoration: none;
            color: white;
        }

    </style>
</head>
<body>
   <form action="login.php" method="post" name="form_input">
   <div class="card">
        <h1>Login</h1>
        <input type="text" placeholder="username" name="username" required="">
        <br>
        <br>
        <input type="text" placeholder="password" name="password" required="">
        <br>
        <br>
        <input class="button" type="submit" name="input" value="Login">
        <br>
        <a href="">Lupa Password?</a>
        <br>
        <a href="http://localhost/Object/login/regis/registrasi.php">belum punya akun?</a>
    </div>

   </form>
</body>
</html>