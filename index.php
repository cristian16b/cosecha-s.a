<?php

require_once("conexion.php");

$errorLogin = "";

if(isset($_POST)) {

    if(isset($_POST['username']) && $_POST['username'] == "" && isset($_POST['password']) && $_POST['password'] == "") {
        $errorLogin = "Debe ingresar el nombre de usuario y la contraseña.";
    }
    else if(isset($_POST['username']) && $_POST['username'] == "") {
        $errorLogin = "Debe ingresar el nombre de usuario.";
    }
    else if(isset($_POST['password']) && $_POST['password'] == "") {
        $errorLogin = "Debe ingresar la contraseña.";
    }

    // procedemos a verificar la contraseña
    $resultado = $mysqli->query("SELECT contraseña FROM usuario where email = " . trim($_POST['username']) );

    if($resultado->num_rows === 0) {
        $errorLogin = "Usuario no encontrado.";
    }
    else {
        while ($usuario = $resultado->fetch_assoc()) {
            $hashed_password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            if(password_verify($_POST['password'], $hashed_password)) {
                header("Location: ./panel.php");
            }
            else {
                $errorLogin = "Usuario y/o contraseña incorrecto.";
            }
        }
    }
}


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->

    <title>Hello, world!</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="./estilos.css" rel="stylesheet">
  </head>
  <body>

    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-2"></div>
            <div class="col-lg-6 col-md-8 login-box">
                <div class="col-lg-12 login-key">
                    <i class="fa fa-key" aria-hidden="true"></i>
                </div>
                <div class="col-lg-12 login-title">
                    PROYECTO COSECHA S.A.
                </div>
                <div class="col-lg-12 login-title">
                    LOGIN
                </div>

                <div class="col-lg-12 login-form">
                    <div class="col-lg-12 login-form">
                        <form action="index.php" method="post">
                            <div class="form-group">
                                <label class="form-control-label">USERNAME</label>
                                <input name="username" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">PASSWORD</label>
                                <input name="password" type="password" class="form-control" i>
                            </div>

                            <div class="col-lg-12 loginbttm">
                                <div class="col-lg-6 login-btm login-text">
                                    <?php 
                                        echo $errorLogin;
                                    ?>
                                </div>
                                <div class="col-lg-6 login-btm login-button">
                                    <button type="submit" class="btn btn-outline-primary">LOGIN</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-2"></div>
            </div>
        </div>





  </body>
</html>