<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container-box">
    <h3 class="cr"><center>Login</h3></center>

    <form action="process.php" method="POST">
        <label class="cr">Username</label>
        <input type="text" name="username" class="form-control"><br /> <br/>

        <label class="cr">Password</label>
        <input type="password" name="password" class="form-control"><br /> <br/>

        <center><button type="submit" class="btn">Log in</button></center><br /> <br/>
        <div class="reg">
            <small class="cr">Belum mempunyai akun?</small>
            <a href="../register/index.php"><span>Register</span></a>
        </div>

    </form>
</div>
</body>
</html>