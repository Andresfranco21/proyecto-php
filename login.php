<?php
session_start();
if ($_POST) {

    if (($_POST['usuario'] == "andres") && ($_POST['contrasena'] == "4321")) {

        $_SESSION["usuario"] = "andres";


        // Me permite direccionar una vez logueado
        header("location:index.php");
    } else {
        echo "<script> alert('usuario o contrasena incorrecta'); </script>";
    }
}

?>
<!doctype html>
<html lang="en">

<head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/estiloLogin.css">
</head>

<body>



    <a href="https://front.codes/" class="logo" target="_blank">
        <img src="https://assets.codepen.io/1462889/fcy.png" alt="">
    </a>

    <div class="section">
        <div class="container">
            <div class="row full-height justify-content-center">
                <div class="col-12 text-center align-self-center py-5">
                    <div class="section pb-5 pt-5 pt-sm-2 text-center">
                        <h6 class="mb-0 pb-3"><span>Log In </span><span>Sign Up</span></h6>
                        <input class="checkbox" type="checkbox" id="reg-log" name="reg-log" />
                        <label for="reg-log"></label>
                        <form action="" method="post">
                            <div class="card-3d-wrap mx-auto">
                                <div class="card-3d-wrapper">
                                    <div class="card-front">
                                        <div class="center-wrap">
                                            <div class="section text-center">
                                                <!-- INICIO FOMRULACIO -->
                                                <h4 class="mb-4 pb-3">Log In</h4>
                                                <div class="form-group">
                                                    <input type="text" required name="usuario" class="form-style" placeholder="Usuario">
                                                    <i class="input-icon uil uil-at"></i>
                                                </div>
                                                <div class="form-group mt-2">
                                                    <input required type="password" name="contrasena" class="form-style" placeholder="Clave" >
                                                    <i class="input-icon uil uil-lock-alt"></i>
                                                </div>
                                                <button class="btn mt-4" type="submit">Entrar al portafolio</button>
                                                <p class="mb-0 mt-4 text-center"><a href="#0" class="link">Forgot your password?</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

</body>

<!-- </html>

    <div class="container">
        <div class="row justify-content-center align-items-center g-2">
            <div class="col-md-4">

            </div>
            <div class="col-md-4">
                <br />
                <div class="card">
                    <div class="card-header">
                        Iniciar Sesion
                    </div>
                    <div class="card-body">
                        <form action="login.php" method="post">
                            usuario: <input class="form-control" type="text" name="usuario" id="">
                            Contrasena: <input class="form-control" type="password" name="contrasena" id="">
                            <br />
                            <a href="#" class="btn mt-4">submit</a>
                            <button class="btn mt-4" type="submit">Entrar</button>
                        </form>
                    </div>
                    <div class="card-footer text-muted">

                    </div>
                </div>
            </div>
            <div class="col-md-4">

            </div>
        </div>

    </div> -->