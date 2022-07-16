<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactame</title>
    <!-- Bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
    <!-- Custom css -->
    <link rel="stylesheet" href="css/contacta_me.css">
    <link rel="stylesheet" href="css/background.css">
    <link rel="stylesheet" href="css/footer.css">
</head>
<body>

    <?php include_once("navbar.php"); ?>


    <section class="container-fluid">
        <div class="row">
            <div class="col-sm-8 offset-sm-2 ctn-contact-me">
                <div class="row mb-4 sub-ctn-contact-me">
                    <div class="col-sm-6">
                        <div class="background-contact-me">
                            <span class="text-light fw-bold subtitle-contact-me">Direccion</span>
                            <span class="text-primary fw-bold text-contact-me">México Centro</span>
                            <span class="text-light fw-bold subtitle-contact-me">Correo</span>
                            <span class="text-primary fw-bold text-contact-me">emanuel_le_dcn@hotmail.es</span>
                            <hr class="hr-info-contact-me">
                        </div>
                        <img src="https://media-exp2.licdn.com/dms/image/C4E1BAQG5Su_c4f8CqQ/company-background_10000/0/1520011697055?e=2147483647&v=beta&t=kt4Rpjm0v8B1UXUKpIb4C_Io24UymJZCYvj6W1G1MGU" class="img-fluid img-info-contact-me" alt="Imagen de contacto">
                    </div>
                    <div class="col-sm-6">
                        <h3 class="mt-3 mb-3 text-center text-uppercase">Contactame</h3>
                        <form id="form_contact_me">
                            <div class="alert alert-info" role="alert">
                                Todos los datos son requeridos
                            </div>
                            <div class="mb-3">
                                <label for="name_contact" class="form-label">Nombre</label>
                                <input type="text" class="form-control" name="name_contact" placeholder="Escribe tu nombre">
                            </div>
                            <div class="mb-3">
                                <label for="email_contact" class="form-label">Correo electronico</label>
                                <input type="email" class="form-control" name="email_contact" placeholder="Escribe tu correo electronico">
                            </div>
                            <div class="mb-3">
                                <label for="subject_contact" class="form-label">Asunto</label>
                                <input type="text" class="form-control" name="subject_contact" placeholder="Escribe el asunto del correo">
                            </div>
                            <div class="mb-3">
                                <label for="message_email" class="form-label">Mensaje del correo</label>
                                <textarea class="form-control" name="message_email" rows="3"></textarea>
                            </div>
                            <div class="d-grid gap-2">
                                <button id="button-contact-me" class="btn btn-primary text-uppercase" type="button" onclick="send_data_contact_me()">Enviar correo</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include_once("footer.php"); ?>

    <!-- Bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <!-- alertify js -->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <!-- Custom js -->
    <script src="js/validateEmail.js"></script>
    <script src="js/validateLettersWithSpaceBlank.js"></script>
    <script src="js/alertify_custom.js"></script>
    <script src="js/contact_me.js"></script>
</body>
</html>