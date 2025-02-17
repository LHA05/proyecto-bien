<?php
    function myFunction() {
    echo 'Que tengas un bonito día'.'<br>';
    }
    
    if (isset($_POST['name'])) {
    myFunction();
    }
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body>
<div class="container" style="height: 95vh;">
    <!-- Outer Row -->
    <div class="row justify-content-center align-items-center h-100">
        <div class="col-xl-10 col-lg-12">
            <div class="card o-hidden border-0">
                <div class="card-body p-4">
                    <div class="row">
                        <div class="col custom-center">
                            <img src="img/pixelcut-export.png" class="img-tamano">
                        </div>
                        <div class="col-lg-6 loginCentrado">
                            <div class="p-4 w-100">
                                <div class="text-center mb-4 ">
                                    <h1 class="h4 titulo">Bienvenido</h1>
                                </div>
                                <form class="user" id="loginForm" method="post">
                                    <div class="form-group">
                                        <!-- Cambié el id de email a username -->
                                        <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Usuario">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="password" name="password" placeholder="Contraseña">
                                    </div>

                                    <div class="p-4">
                                        <label class="custom-checkbox">
                                            <input type="checkbox" name="remember_me">
                                            <span class="checkbox-box"></span>
                                        </label>
                                        <label class="input_login_checkbox">Recordar mis datos</label>
                                        <label> | </label>
                                        <a href="recuperarPassword.html" class="align-items-center justify-content-center input_login_checkbox">Olvidé mi contraseña</a>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block" name="enviar" onclick = "guardar();">Entrar</button>
                                </form>
                                <div id="error-message" style="color: red; display: none;">Usuario o contraseña incorrectos.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Credenciales de prueba
        const validUsers = [
            { username: "invitado", password: "123456", redirectTo: "tabla.html" },
            { username: "admin", password: "123456", redirectTo: "index.html" }
        ];

        // Manejar el evento de envío del formulario
        document.getElementById('loginForm').addEventListener('submit', function(event) {
            event.preventDefault();

            const username = document.getElementById('username').value; // Cambié a 'username'
            const password = document.getElementById('password').value;

            const user = validUsers.find(u => u.username === username && u.password === password);

            if (user) {
                alert('Inicio de sesión exitoso');
                window.location.href = user.redirectTo; // Redirige al usuario
            } else {
                document.getElementById('error-message').style.display = 'block';
            }
        });
    });
</script>

</body>



</html>
