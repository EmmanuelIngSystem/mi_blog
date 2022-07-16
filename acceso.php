<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceso a usuarios</title>
    <!-- Bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
    <!-- Custom css -->
    <link rel="stylesheet" href="css/loguin.css">
    <link rel="stylesheet" href="css/background.css">
</head>
<body>
    <section class="container-fluid">
        <section class="row background-gral">
            <form class="col-sm-6 ctn-form-loguin" id="form_loguin">
                <div class="col-sm-8 offset-sm-2 mb-3">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Correo</label>
                    <div class="col-sm-12">
                        <input type="text" name="email" class="form-control">
                    </div>
                </div>
                <div class="col-sm-8 offset-sm-2 mb-3">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Contraseña</label>
                    <div class="col-sm-12">
                        <input type="password" name="password" class="form-control" placeholder="La contraseña debe ser mayor a 10">
                    </div>
                </div>
                <div class="col-sm-8 offset-sm-2 mb-3">
                    <div class="text-end mb-3">
                        <a href="recuperar_cuenta" class="link-primary">Olvide la contraseña</a>
                    </div>
                    <div class="d-grid gap-2 mb-3">
                        <button class="btn btn-primary" id="button-access" type="button" onclick="send_data()">Iniciar sesion</button>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-5" style="height:2px; border-width:0; background:#ced4da;"></div>
                        <div class="col-sm-2 text-center" style="margin-top: -13px;">ó</div>
                        <div class="col-sm-5" style="height:2px; border-width:0; background:#ced4da;"></div>
                    </div>
                    <div class="d-grid gap-2">
                        <a href="registro" class="btn btn-success">Crear cuenta</a>
                    </div>
                </div>
            </form>
            <div class="col-sm-6 ctn-image-loguin">
                <img src="https://factorcapitalhumano.com/wp-content/uploads/2020/03/programadores-profesionistas-con-incrementos-salariales-constantes.jpg" class="img-fluid h-100" alt="Imagen de acceso">
            </div>
        </section>

    </section>
    <!-- Bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <!-- alertify js -->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <!-- Custom js -->
    <script src="js/loguin.js"></script>
    <script src="js/validateEmail.js"></script>
    <script src="js/alertify_custom.js"></script>
</body>
</html>