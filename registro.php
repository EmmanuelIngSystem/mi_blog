<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de usuarios</title>
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
    <link rel="stylesheet" href="css/register.css">
    <link rel="stylesheet" href="css/background.css">
</head>
<body class="background-gral">
    <section class="container pb-3 pt-3"  style="background: white; border-radius: 8px; margin: 10% auto">
        <section class="row">
            <form class="row ctn-form-register" id="form_register">
                <div class="col-sm-6 offset-sm-3">
                    <h3>Registrate</h3>
                    <p>Es rápido y fácil.</p>
                    <hr />
                </div>
                <div class="col-sm-3 offset-sm-3">
                    <label for="name_user" class="col-sm-2 col-form-label">Nombre</label>
                    <input type="text" name="name_user" class="form-control">
                </div>
                <div class="col-sm-3">
                    <label for="surnames_user" class="col-sm-2 col-form-label">Apellidos</label>
                    <input type="text" name="surnames_user" class="form-control">
                </div>
                <div class="col-sm-6 offset-sm-3">
                    <label for="email" class="col-sm-2 col-form-label">Correo</label>
                    <input type="text" name="email" class="form-control">
                </div>
                <div class="col-sm-6 offset-sm-3 mb-3">
                    <label for="password" class="col-sm-2 col-form-label">Contraseña</label>
                    <input type="password" name="password" class="form-control" placeholder="La contraseña debe ser mayor a 10">
                </div>
                <div class="col-sm-6 offset-sm-3 mb-3">
                    <label for="confirm_password" class="col-sm-4 col-form-label">Confirmar contraseña</label>
                    <input type="password" name="confirm_password" class="form-control" placeholder="Deben de coincidir ambas contraseñas">
                </div>
                <div class="col-sm-6 offset-sm-3 d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="acceso" class="btn btn-light">Cancelar</a>
                    <button class="btn btn-primary" id="button-register" type="button" onclick="register_send_data()">Registrate</button>
                </div>
            </form>
        </section>
    </section>

    <!-- Bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <!-- alertify js -->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <!-- Custom js -->
    <script src="js/register.js"></script>
    <script src="js/validateEmail.js"></script>
    <script src="js/validateLettersWithSpaceBlank.js"></script>

    <script src="js/alertify_custom.js"></script>
</body>
</html>