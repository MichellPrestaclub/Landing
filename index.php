<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="navPrestaclub container-fluid">
            <a class="navbar-brand" href="https://prestaclub.com/"><img class="img-logo-landing" src="https://prestaclub.com/wp-content/uploads/2022/07/logoPrestaClub.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="nav-text-1 collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav-text navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Productos
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="https://prestaclub.com/financiamiento-hipotecario/">FINANCIAMIENTO HIPOTECARIO</a></li>
                            <li><a class="dropdown-item" href="https://prestaclub.com/prestajoyas-2/">PRESTAJOYAS</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Nosotros
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="https://prestaclub.com/preguntas-frecuentes-hipotecario/">Preguntas Frecuentes Hipotecario</a></li>
                            <li><a class="dropdown-item" href="https://prestaclub.com/preguntas-frecuentes-prestajoyas/">Preguntas Frecuentes Prestajoyas</a></li>
                            <li><a class="dropdown-item" href="https://prestaclub.com/politica-de-privacidad/">Politicas de Privacidad</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="https://prestaclub.com/contacto/">Contactanos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="https://prestaclub.com/articulos/">Articulos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="https://prestaclub.com/medios-y-testimonios/">Testimonios y entrevistas</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--Cuerpo-->
    <main>
        <div class="cuerpo-landing">
            <div class="titulo-landing">
                <h1>La oportunidad <span class="landing-partes-amarillas">está en tu inmueble,</span>ayudamos a tu empresa a obtener un crédito</h1>
                <p>Solo tienes que contar con un inmueble en Lima y Callao inscrito en SUNARP</p>
                <div class="soluciones">
                    <h4>Soluciones <span class="landing-partes-amarillas">PrestaClub</span> para:</h4>
                    <p>- Capital de trabajo</p>
                    <p>- Maquinarias y activos fijos</p>
                    <p>- Autoconstrucción y ampliación</p>
                </div>
            </div>
            <div class="cuerpo-form-landing">
                <h3><span class="landing-partes-amarillas">Prestamos</span> con garantia hipotecaria</h3>
                <form class="form-landing" action="" name="form" method="POST">
                    <div>
                        <label class="text-formulario" for="">Nombre y apellidos:</label><br>
                        <input class="form-control inputLanding" type="text" name="NombreClienteLanding"><br>
                    </div>
                    <div>
                        <label class="text-formulario" for="">DNI:</label><br>
                        <input class="form-control inputLanding" max="99999999" type="number" name="DNIClienteLanding" id=""><br>
                    </div>
                    <div>
                        <label class="text-formulario" for="">Correo:</label><br>
                        <input class="form-control inputLanding" type="email" name="CorreoClienteLanding" id=""><br>
                    </div>
                    <div>
                        <label class="text-formulario" for="">N° Celular:</label><br>
                        <input class="form-control inputLanding" max="999999999" type="number" name="" id="" maxlength="9"><br>
                    </div>
                    <div>
                        <label class="text-formulario" for="">Políticas de privacidad: <a href="https://prestaclub.com/politica-de-privacidad/">https://prestaclub.com/politica-de-privacidad/</a></label><br><br>
                        <input type="checkbox" name="" id=""> Declaro haber leído y aceptado de manera previa y expresa la Política de privacidad, sujetándose a sus disposiciones. <br>
                        <input type="checkbox" name="" id=""> Otorgo mi consentimiento para recibir publicidad sobre promociones y ofertas de PRESTACLUB y de empresas vinculadas y aliados comerciales.<br>
                    </div>
                    <div class="text-center pt-3">
                        <input type="submit" class="button-landing" name="enviarDatos" value="Enviar datos">
                    </div>

                </form>
            </div>
            <?php
            if (isset($_POST['enviarDatos'])) {
                $Nombre = $_POST['NombreClienteLanding'];
                $DNI = $_POST['DNIClienteLanding'];
                $Correo = $_POST['CorreoClienteLanding'];
                if ($Nombre == "" || $DNI == "" || $Correo == "") {
                    echo '<label for="" name="error">Ingrese correctamente sus datos</label>';
                } else {
                    echo '<label for="" name="error">Sus datos fueron enviados correctamente</label>';
                }
            }
            ?>
        </div>
    </main>
    <footer class="footer-container bg-dark">
        <div class="footer row">
            <div class="section1-footer col-lg-3">
                <img class="footer-logo" src="https://prestaclub.com/wp-content/uploads/2022/07/logo-negativo-sin-p.png" alt="">
                <p class="text-white">PRESTACLUB es un FINTECH peruana fundada en el año 2002, que nació con la misión de satisfacer las necesidades de muchos peruanos, que no tienen acceso a capital por no tener historial crediticio o estar mal calificados en el sistema financiero.</p>
            </div>
            <div class="text-white section2-footer col-lg-3">
                <p>La TEA mínima de los financiamientos es 14.00% y la máxima 38.00%. Por ejemplo, para un préstamo de USD $ 3,000 a 72 meses a la TEA máxima de 38.00%, la cuota mensual será de USD $ 95.43.Los financiamientos tienen plazos desde 6 hasta 72 meses. PRESTACLUB sólo estructura, legal y financieramente, los contratos de financiamiento con garantía hipotecaria a través de fondos de inversión.</p>
            </div>
            <div class="text-white section3-footer col-lg-3">
                <div>
                    <p><span class="fw-bold">OFICINA LIMA:</span> Av. Nicolás de Piérola 950, Cercado de Lima (al frente de la Plaza San Martín)
                </div>
                <div>
                    <p><span class=" fw-bold">OFICINA MIRAFLORES:</span> Av. Jóse Pardo 487, Miraflores (OF. 201) <br></p>
                </div>
                <div>
                    <p><span class=" fw-bold"> TELÉFONO:</span> (01) 202-1500 <br></p>
                </div>
                <div>
                    <p><span class=" fw-bold">CORREO:</span> informes@prestaclub.com<br></p>
                </div>
                <div>
                    <p><span class=" fw-bold">WHATSAPP:</span> 960937395 – 934 657 480<br></p>
                </div>
            </div>
        </div>
           <div class="divisor-footer"></div>

        <div class="text-center text-white pt-3">
            Copyright © PRESTACLUB. Todos los derechos reservados.
        </div>
    </footer>
    <!-- Footer -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>

</html>