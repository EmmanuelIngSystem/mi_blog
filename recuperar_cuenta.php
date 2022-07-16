<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar cuenta</title>
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
    <link rel="stylesheet" href="css/recovery_account.css">
    <link rel="stylesheet" href="css/background.css">
</head>
<body>
    <section class="container-fluid">
        <section class="row background-gral">
            <form class="col-sm-6 ctn-form-recovery-account" id="form_recovery_account">
                <div class="col-sm-8 offset-sm-2 mb-3 p-3" style="background: white; border-radius: 8px; margin-top: 20%">
                    <h3>Recupera tu cuenta</h3>
                    <hr />
                    <h4>Introduce tu correo electrónico.</h4>
                    <p>Se te enviará un correo con tu nueva contraseña.</p>
                    <label for="staticEmail" class="col-sm-2 col-form-label">Correo</label>
                    <div class="col-sm-12">
                        <input type="text" name="email" class="form-control">
                    </div>
                    <hr />
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href="acceso" class="btn btn-light">Cancelar</a>
                        <button class="btn btn-primary" id="button-recovery-account" type="button" onclick="recovery_account_send_data()">Recuperar</button>
                    </div>
                </div>
            </form>
        </section>
    </section>
    <!-- Bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <!-- alertify js -->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <!-- Custom js -->
    <script src="js/recovery_account.js"></script>
    <script src="js/validateEmail.js"></script>
    <script src="js/alertify_custom.js"></script>
</body>
</html>