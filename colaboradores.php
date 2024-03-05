<?php require './layout/header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="main_login_container">
            <div class="principal_logo_container">
                <img class="logo_login" src="./img/LogoMC.jpeg">
            </div>
            <form method="post" action="">
            <div class="login">
                <img class="login_img" src="./img/acceso.png"> <label for="username">Username</label>
                <input type="text" name="username">
                <img class="login_img" src="./img/contrasena.png"> <label for="password">Password</label>
                <input type="password" name="password">
                <input type="submit" class="btn btn-dark login_button" name="btn_ingresar" text="Login"></input>
                <?php 
                include("./layout/controlers/db_conexion.php");
                include("./layout/controlers/login_controler.php");
                ?>
                
            </div>
            </form> 
        </div>
</body>
</html>
