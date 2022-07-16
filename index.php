<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/background.css">
    <link rel="stylesheet" href="css/footer.css">
</head>
<body>

    <?php include_once("navbar.php"); ?>

    <section class="container-fluid ctn-margin-top">
        <div class="row">
            <div class="col-sm-9">
                <div class="col-sm-12 mt-1 mb-3 bg-dark">
                    <div class="card bg-dark text-light">
                        <div class="card-body">
                            <h5 class="card-title">Titulo del post</h5>
                            <div class="ctn-icon-text">
                                <i class="bi bi-calendar-fill pull-left icon-chevron-left"></i>
                                <span>PUBLICADO EL LUNES, 27 DE JUNIO DE 2022</span>
                            </div>
                            <img src="https://programacion.net/files/article/20211124101110_php-mysql.png" class="card-img-top" alt="Imagen del post">
                            <p class="card-text substring-text">PHP tal y como se conoce hoy en día es en realidad el sucesor de un producto llamado PHP/FI. Creado en 1994 por Rasmus Lerdorf, la primera encarnación de PHP era un conjunto simple de ficheros binarios Common Gateway Interface (CGI) escritos en el lenguaje de programación C. Originalmente utilizado para rastrear visitas de su currículum online, llamó al conjunto de scripts "Personal Home Page Tools", más frecuentemente referenciado como "PHP Tools". En septiembre de ese mismo año, Rasmus amplió PHP y -por un corto periodo de tiempo- abandonó el nombre de PHP. Ahora, refiriéndose a las herramientas como FI (abreviatura de "Forms Interpreter"), la nueva implementación incluía algunas de las funciones básicas de PHP tal y como la conocemos hoy. Tenía variables como las de Perl, interpretación automática de variables de formulario y sintaxis incrustada HTML. La sintaxis por sí misma era similar a la de Perl, aunque mucho más limitada, simple y algo inconsistente. De hecho, para embeber el código en un fichero HTML, los desarrolladores tenían que usar comentarios de HTML. Aunque este método no era completamente bien recibido, FI continuó gozando de expansión y aceptación como una herramienta CGI --- pero todavía no completamente como lenguaje. Sin embargo, esto comenzó a cambiar al mes siguiente; en octubre de 1995 Rasmus publicó una versión nueva del código. Recordando el nombre PHP, ahora era llamado (resumidamente) "Personal Home Page Construction Kit," y fue la primera versión que presumía de ser, en aquel momento, considerada como una interfaz de scripts avanzada. El lenguaje fue deliberadamente diseñado para asemejarse a C en estructura, haciéndolo una adopción sencilla para desarrolladores familiarizados con C, Perl, y lenguajes similares. Habiendo sido así bastante limitado a sistemas UNIX y compatibles con POSIX, el potencial para una implementación de Windows NT estaba siendo explorada. El código fue completamente rehecho de nuevo, y en abril de 1996, combinando los nombres de versiones anteriores, Rasmus introdujo PHP/FI. Esta implementación de segunda generación comenzó realmente a desarrollar PHP desde un conjunto de herramientas dentro de un lenguaje de programación de derecho propio. Incluía soporte interno para DBM, mSQL, y bases de datos Postgres95, cookies, soporte para funciones definidas por el usuario, y mucho más. Ese mes de junio, PHP/FI brindó una versión 2.0. Sin embargo, un interesante hecho sobre esto, es que sólo había una única versión completa de PHP 2.0. Cuando finalmente pasó de la versión beta en noviembre de 1997, el motor de análisis subyacente ya estaba siendo reescrito por completo A.
                            </p>
                            <i class="bi bi-chat-fill pull-left icon-chevron-left"></i>
                            <a href="#" class="card-link text-light"># Comentario</a>
                            <i class="bi bi-folder-fill pull-left icon-chevron-left"></i>
                            <a href="#" class="card-link text-light">Categoria: categoria #</a>
                            <i class="bi bi-calendar pull-left icon-chevron-left"></i>
                            Etiquetas: 
                            <a href="#" class="card-link"><span class="badge badge-pill badge-info">Etiqueta 1</span></a>
                            <a href="#" class="card-link"><span class="badge badge-pill badge-info">Etiqueta 2</span></a>
                            <a href="#" class="card-link"><span class="badge badge-pill badge-info">Etiqueta 3</span></a>
                            <a href="#" class="card-link"><span class="badge badge-pill badge-info">Etiqueta 4</span></a>
                            <a href="#" class="card-link"><span class="badge badge-pill badge-info">Etiqueta 5</span></a>
                            <a href="#" class="card-link"><span class="badge badge-pill badge-info">Etiqueta 6</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 mt-1 mb-3 bg-dark">
                    <div class="card bg-dark text-light">
                        <div class="card-body">
                            <h5 class="card-title">Titulo del post</h5>
                            <div class="ctn-icon-text">
                                <i class="bi bi-calendar-fill pull-left icon-chevron-left"></i>
                                <span>PUBLICADO EL LUNES, 27 DE JUNIO DE 2022</span>
                            </div>
                            <img src="https://programacion.net/files/article/20211124101110_php-mysql.png" class="card-img-top" alt="Imagen del post">
                            <p class="card-text substring-text">PHP tal y como se conoce hoy en día es en realidad el sucesor de un producto llamado PHP/FI. Creado en 1994 por Rasmus Lerdorf, la primera encarnación de PHP era un conjunto simple de ficheros binarios Common Gateway Interface (CGI) escritos en el lenguaje de programación C. Originalmente utilizado para rastrear visitas de su currículum online, llamó al conjunto de scripts "Personal Home Page Tools", más frecuentemente referenciado como "PHP Tools". En septiembre de ese mismo año, Rasmus amplió PHP y -por un corto periodo de tiempo- abandonó el nombre de PHP. Ahora, refiriéndose a las herramientas como FI (abreviatura de "Forms Interpreter"), la nueva implementación incluía algunas de las funciones básicas de PHP tal y como la conocemos hoy. Tenía variables como las de Perl, interpretación automática de variables de formulario y sintaxis incrustada HTML. La sintaxis por sí misma era similar a la de Perl, aunque mucho más limitada, simple y algo inconsistente. De hecho, para embeber el código en un fichero HTML, los desarrolladores tenían que usar comentarios de HTML. Aunque este método no era completamente bien recibido, FI continuó gozando de expansión y aceptación como una herramienta CGI --- pero todavía no completamente como lenguaje. Sin embargo, esto comenzó a cambiar al mes siguiente; en octubre de 1995 Rasmus publicó una versión nueva del código. Recordando el nombre PHP, ahora era llamado (resumidamente) "Personal Home Page Construction Kit," y fue la primera versión que presumía de ser, en aquel momento, considerada como una interfaz de scripts avanzada. El lenguaje fue deliberadamente diseñado para asemejarse a C en estructura, haciéndolo una adopción sencilla para desarrolladores familiarizados con C, Perl, y lenguajes similares. Habiendo sido así bastante limitado a sistemas UNIX y compatibles con POSIX, el potencial para una implementación de Windows NT estaba siendo explorada. El código fue completamente rehecho de nuevo, y en abril de 1996, combinando los nombres de versiones anteriores, Rasmus introdujo PHP/FI. Esta implementación de segunda generación comenzó realmente a desarrollar PHP desde un conjunto de herramientas dentro de un lenguaje de programación de derecho propio. Incluía soporte interno para DBM, mSQL, y bases de datos Postgres95, cookies, soporte para funciones definidas por el usuario, y mucho más. Ese mes de junio, PHP/FI brindó una versión 2.0. Sin embargo, un interesante hecho sobre esto, es que sólo había una única versión completa de PHP 2.0. Cuando finalmente pasó de la versión beta en noviembre de 1997, el motor de análisis subyacente ya estaba siendo reescrito por completo B.
                            </p>
                            <i class="bi bi-chat-fill pull-left icon-chevron-left"></i>
                            <a href="#" class="card-link text-light"># Comentario</a>
                            <i class="bi bi-folder-fill pull-left icon-chevron-left"></i>
                            <a href="#" class="card-link text-light">Categoria: categoria #</a>
                            <i class="bi bi-calendar pull-left icon-chevron-left"></i>
                            Etiquetas: 
                            <a href="#" class="card-link"><span class="badge badge-pill badge-info">Etiqueta 1</span></a>
                            <a href="#" class="card-link"><span class="badge badge-pill badge-info">Etiqueta 2</span></a>
                            <a href="#" class="card-link"><span class="badge badge-pill badge-info">Etiqueta 3</span></a>
                            <a href="#" class="card-link"><span class="badge badge-pill badge-info">Etiqueta 4</span></a>
                            <a href="#" class="card-link"><span class="badge badge-pill badge-info">Etiqueta 5</span></a>
                            <a href="#" class="card-link"><span class="badge badge-pill badge-info">Etiqueta 6</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 mt-1 mb-3 bg-dark">
                    <div class="card bg-dark text-light">
                        <div class="card-body">
                            <h5 class="card-title">Titulo del post</h5>
                            <div class="ctn-icon-text">
                                <i class="bi bi-calendar-fill pull-left icon-chevron-left"></i>
                                <span>PUBLICADO EL LUNES, 27 DE JUNIO DE 2022</span>
                            </div>
                            <img src="https://programacion.net/files/article/20211124101110_php-mysql.png" class="card-img-top" alt="Imagen del post">
                            <p class="card-text substring-text">PHP tal y como se conoce hoy en día es en realidad el sucesor de un producto llamado PHP/FI. Creado en 1994 por Rasmus Lerdorf, la primera encarnación de PHP era un conjunto simple de ficheros binarios Common Gateway Interface (CGI) escritos en el lenguaje de programación C. Originalmente utilizado para rastrear visitas de su currículum online, llamó al conjunto de scripts "Personal Home Page Tools", más frecuentemente referenciado como "PHP Tools". En septiembre de ese mismo año, Rasmus amplió PHP y -por un corto periodo de tiempo- abandonó el nombre de PHP. Ahora, refiriéndose a las herramientas como FI (abreviatura de "Forms Interpreter"), la nueva implementación incluía algunas de las funciones básicas de PHP tal y como la conocemos hoy. Tenía variables como las de Perl, interpretación automática de variables de formulario y sintaxis incrustada HTML. La sintaxis por sí misma era similar a la de Perl, aunque mucho más limitada, simple y algo inconsistente. De hecho, para embeber el código en un fichero HTML, los desarrolladores tenían que usar comentarios de HTML. Aunque este método no era completamente bien recibido, FI continuó gozando de expansión y aceptación como una herramienta CGI --- pero todavía no completamente como lenguaje. Sin embargo, esto comenzó a cambiar al mes siguiente; en octubre de 1995 Rasmus publicó una versión nueva del código. Recordando el nombre PHP, ahora era llamado (resumidamente) "Personal Home Page Construction Kit," y fue la primera versión que presumía de ser, en aquel momento, considerada como una interfaz de scripts avanzada. El lenguaje fue deliberadamente diseñado para asemejarse a C en estructura, haciéndolo una adopción sencilla para desarrolladores familiarizados con C, Perl, y lenguajes similares. Habiendo sido así bastante limitado a sistemas UNIX y compatibles con POSIX, el potencial para una implementación de Windows NT estaba siendo explorada. El código fue completamente rehecho de nuevo, y en abril de 1996, combinando los nombres de versiones anteriores, Rasmus introdujo PHP/FI. Esta implementación de segunda generación comenzó realmente a desarrollar PHP desde un conjunto de herramientas dentro de un lenguaje de programación de derecho propio. Incluía soporte interno para DBM, mSQL, y bases de datos Postgres95, cookies, soporte para funciones definidas por el usuario, y mucho más. Ese mes de junio, PHP/FI brindó una versión 2.0. Sin embargo, un interesante hecho sobre esto, es que sólo había una única versión completa de PHP 2.0. Cuando finalmente pasó de la versión beta en noviembre de 1997, el motor de análisis subyacente ya estaba siendo reescrito por completo C.
                            </p>
                            <i class="bi bi-chat-fill pull-left icon-chevron-left"></i>
                            <a href="#" class="card-link text-light"># Comentario</a>
                            <i class="bi bi-folder-fill pull-left icon-chevron-left"></i>
                            <a href="#" class="card-link text-light">Categoria: categoria #</a>
                            <i class="bi bi-calendar pull-left icon-chevron-left"></i>
                            Etiquetas: 
                            <a href="#" class="card-link"><span class="badge badge-pill badge-info">Etiqueta 1</span></a>
                            <a href="#" class="card-link"><span class="badge badge-pill badge-info">Etiqueta 2</span></a>
                            <a href="#" class="card-link"><span class="badge badge-pill badge-info">Etiqueta 3</span></a>
                            <a href="#" class="card-link"><span class="badge badge-pill badge-info">Etiqueta 4</span></a>
                            <a href="#" class="card-link"><span class="badge badge-pill badge-info">Etiqueta 5</span></a>
                            <a href="#" class="card-link"><span class="badge badge-pill badge-info">Etiqueta 6</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 mt-1 mb-3 bg-dark">
                    <div class="card bg-dark text-light">
                        <div class="card-body">
                            <h5 class="card-title">Titulo del post</h5>
                            <div class="ctn-icon-text">
                                <i class="bi bi-calendar-fill pull-left icon-chevron-left"></i>
                                <span>PUBLICADO EL LUNES, 27 DE JUNIO DE 2022</span>
                            </div>
                            <img src="https://programacion.net/files/article/20211124101110_php-mysql.png" class="card-img-top" alt="Imagen del post">
                            <p class="card-text substring-text">PHP tal y como se conoce hoy en día es en realidad el sucesor de un producto llamado PHP/FI. Creado en 1994 por Rasmus Lerdorf, la primera encarnación de PHP era un conjunto simple de ficheros binarios Common Gateway Interface (CGI) escritos en el lenguaje de programación C. Originalmente utilizado para rastrear visitas de su currículum online, llamó al conjunto de scripts "Personal Home Page Tools", más frecuentemente referenciado como "PHP Tools". En septiembre de ese mismo año, Rasmus amplió PHP y -por un corto periodo de tiempo- abandonó el nombre de PHP. Ahora, refiriéndose a las herramientas como FI (abreviatura de "Forms Interpreter"), la nueva implementación incluía algunas de las funciones básicas de PHP tal y como la conocemos hoy. Tenía variables como las de Perl, interpretación automática de variables de formulario y sintaxis incrustada HTML. La sintaxis por sí misma era similar a la de Perl, aunque mucho más limitada, simple y algo inconsistente. De hecho, para embeber el código en un fichero HTML, los desarrolladores tenían que usar comentarios de HTML. Aunque este método no era completamente bien recibido, FI continuó gozando de expansión y aceptación como una herramienta CGI --- pero todavía no completamente como lenguaje. Sin embargo, esto comenzó a cambiar al mes siguiente; en octubre de 1995 Rasmus publicó una versión nueva del código. Recordando el nombre PHP, ahora era llamado (resumidamente) "Personal Home Page Construction Kit," y fue la primera versión que presumía de ser, en aquel momento, considerada como una interfaz de scripts avanzada. El lenguaje fue deliberadamente diseñado para asemejarse a C en estructura, haciéndolo una adopción sencilla para desarrolladores familiarizados con C, Perl, y lenguajes similares. Habiendo sido así bastante limitado a sistemas UNIX y compatibles con POSIX, el potencial para una implementación de Windows NT estaba siendo explorada. El código fue completamente rehecho de nuevo, y en abril de 1996, combinando los nombres de versiones anteriores, Rasmus introdujo PHP/FI. Esta implementación de segunda generación comenzó realmente a desarrollar PHP desde un conjunto de herramientas dentro de un lenguaje de programación de derecho propio. Incluía soporte interno para DBM, mSQL, y bases de datos Postgres95, cookies, soporte para funciones definidas por el usuario, y mucho más. Ese mes de junio, PHP/FI brindó una versión 2.0. Sin embargo, un interesante hecho sobre esto, es que sólo había una única versión completa de PHP 2.0. Cuando finalmente pasó de la versión beta en noviembre de 1997, el motor de análisis subyacente ya estaba siendo reescrito por completo D.
                            </p>
                            <i class="bi bi-chat-fill pull-left icon-chevron-left"></i>
                            <a href="#" class="card-link text-light"># Comentario</a>
                            <i class="bi bi-folder-fill pull-left icon-chevron-left"></i>
                            <a href="#" class="card-link text-light">Categoria: categoria #</a>
                            <i class="bi bi-calendar pull-left icon-chevron-left"></i>
                            Etiquetas: 
                            <a href="#" class="card-link"><span class="badge badge-pill badge-info">Etiqueta 1</span></a>
                            <a href="#" class="card-link"><span class="badge badge-pill badge-info">Etiqueta 2</span></a>
                            <a href="#" class="card-link"><span class="badge badge-pill badge-info">Etiqueta 3</span></a>
                            <a href="#" class="card-link"><span class="badge badge-pill badge-info">Etiqueta 4</span></a>
                            <a href="#" class="card-link"><span class="badge badge-pill badge-info">Etiqueta 5</span></a>
                            <a href="#" class="card-link"><span class="badge badge-pill badge-info">Etiqueta 6</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 bg-dark text-light">
                <div class="col-sm-12 mb-5 sub-ctn-sidebar-margin-top">
                <h5>Categorias</h5>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Seleccione
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="categoria">Categoria 1</a></li>
                            <li><a class="dropdown-item" href="categoria">Categoria 2</a></li>
                        </ul>
                    </li>
                </ul>
                </div>
                <div class="col-sm-12 mb-5">
                    <h5>Comentarios recientes</h5>
                    <p><a class="text-light" href="">Comentario 1</a></p>
                    <p><a class="text-light" href="">Comentario 2</a></p>
                    <p><a class="text-light" href="">Comentario 3</a</p>
                    <p><a class="text-light" href="">Comentario 4</a></p>
                    <p><a class="text-light" href="">Comentario 5</a></p>
                </div>
                
                <div class="col-sm-12 mb-5">
                    <h5>Etiquetas</h5>
                    <a href="#" class="card-link"><span class="badge badge-pill badge-info">Etiqueta 1</span></a>
                    <a href="#" class="card-link"><span class="badge badge-pill badge-info">Etiqueta 2</span></a>
                    <a href="#" class="card-link"><span class="badge badge-pill badge-info">Etiqueta 3</span></a>
                    <a href="#" class="card-link"><span class="badge badge-pill badge-info">Etiqueta 4</span></a>
                    <a href="#" class="card-link"><span class="badge badge-pill badge-info">Etiqueta 5</span></a>
                    <a href="#" class="card-link"><span class="badge badge-pill badge-info">Etiqueta 6</span></a>
                </div>
            </div>
            <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item"><a class="page-link bg-dark text-light" href="#"><span aria-hidden="true">&lt;</span></a></li>
                <li class="page-item"><a class="page-link bg-dark text-light" href="#"><span aria-hidden="true">&laquo;</span></a></li></a></li>
                <li class="page-item"><a class="page-link bg-dark text-light" href="#">1</a></li>
                <li class="page-item"><a class="page-link bg-dark text-light" href="#">2</a></li>
                <li class="page-item"><a class="page-link bg-dark text-light" href="#">3</a></li>
                <li class="page-item"><a class="page-link bg-dark text-light" href="#">4</a></li>
                <li class="page-item"><a class="page-link bg-dark text-light" href="#">5</a></li>
                <li class="page-item"><a class="page-link bg-dark text-light" href="#"><span aria-hidden="true">&raquo;</span></a></li>
                <li class="page-item"><a class="page-link bg-dark text-light" href="#"><span aria-hidden="true">&gt;</span></a></li>
            </ul>
            </nav>
        </div>
    </section>

    <?php include_once("footer.php"); ?>

    <!-- Bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <!-- alertify js -->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <script src="js/home.js"></script>
    <script src="js/substring_text.js"></script>
</body>
</html>