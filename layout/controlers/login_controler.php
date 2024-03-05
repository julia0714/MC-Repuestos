<?php
if (!empty($_POST["password"]) and !empty($_POST["username"])) {
    $user = $_POST["username"];
    $password = $_POST["password"];
    
    $sql = $conn->query("select * from user where User ='$user' and Password ='$password'");
    if ($datos = $sql->fetch_object()) {
        header("location:index.php");
    } else {
        echo "Accesso denegado";
    }
} elseif (!empty(($_POST["btn_ingresar"]))) {
    if (empty($_POST["password"]) and empty($_POST["username"])) {
        echo "Los campos estan vacios";
    }
}
?>  