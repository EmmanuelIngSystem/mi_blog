<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acerca de mi</title>
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
    <link rel="stylesheet" href="css/acerca_de_mi.css">
    <link rel="stylesheet" href="css/background.css">
    <link rel="stylesheet" href="css/footer.css">
</head>
<body>

    <?php include_once("navbar.php"); ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 ctn-header-background-img ">
                <div class="text-uppercase text-info ctn-header-background-black-opacity">
                    <div class="ctn-header-text">
                        <h2>Hola, soy Emmanuel</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8 offset-sm-2 mt-5">
                <h4 class="text-secondary">Introducción</h4>
                <p>Soy un chico introvertido que le encanta analizar. Actualmente estoy soltero y eso me encanta ya que me dedico a lo que me gusta a tiempo completo.</p>
                <p>Aunque soy programador de vez en cuando me gusta salir a despejarme las ideas y a veces a conocer personas o convivir con mis amigos y amigas. Soy muy paciente aunque a veces me sacan de quicio pero es muy raro ya que soy flematico.</p>
            </div>
            <div class="col-sm-8 offset-sm-2 mt-3">
                <h4 class="text-secondary">De donde soy</h4>
                <p>Actualmente estoy viviendo en el centro del país de México.</p>
            </div>
            <div class="col-sm-8 offset-sm-2 mt-3 mb-3">
                <h4 class="text-secondary">Más sobre mí</h4>
                <p class="fw-bold">¿Cuáles son mis pasatiempos favoritos?</p>
                <p>Me encanta la tecnología, me gusta aprender cosas nuevas, me encanta analizar casi todo, me encanta navegar en internet especialmente viendo videos de Youtube ya sea de entretenimiento ó de tecnología, me encanta dormir.</p>

                <p class="fw-bold">¿Cuál es el trabajo de mis sueños?</p>
                <p>Dedicarme a full a la seguridad informatica en especial al pentesting y poder llegar a ser un freelance en esa area. Además me encantaría combinarlo con la programacón.</p>

                <p class="fw-bold">¿Cuál es mi "background"?</p>
                <p>Yo he aprendido HTML, CSS (nativo y frameworks como Bootstrap y Bulma), Javascript (nativo, Jquery y estoy aprendiendo React y Vue Js), PHP (nativo, frameworks como CodeIgniter, Laravel y me gustaría aprender Symfony), Mysql (aunque he manejado Sql Server y Postgresql), además he manejado Ionic y por tanto Angular y Typescript, y por ultimo Nodejs con Express.</p>

                <p class="fw-bold">¿Qué música escuchas?</p>
                <p>Escucho de toda, pero la que mas me encanta son: rap (underground), hip hop, electronica, pop-rock, pop, rock alternativo.</p>
            </div>
        </div>
    </div>

    <?php include_once("footer.php"); ?>

    <!-- Bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <!-- alertify js -->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
</body>
</html>