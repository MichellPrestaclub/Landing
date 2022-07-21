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
    <?php
    include('header.php');
    ?>
    <!--Cuerpo-->
    <main>
        <div class="cuerpo-landing">
            <div class="titulo-landing row">
                <div class="emprendedor col-lg-5">
                    <img class="img-fluid img-emprendedor" src="https://prestaclub.com/wp-content/uploads/2022/07/Emprendedor2.png" alt="">
                </div>
                <div class="img-canva col-lg-7">
                    <img class="img-fluid " src="https://prestaclub.com/wp-content/uploads/2022/07/frase1.png" alt="">
                    <img class="img-fluid pt-2" src="https://prestaclub.com/wp-content/uploads/2022/07/S.-4.png" alt="">
                    <img class="img-fluid pt-2" src="https://prestaclub.com/wp-content/uploads/2022/07/S.-3-1.png" alt="">
                    <img class="img-fluid pt-2" src="https://prestaclub.com/wp-content/uploads/2022/07/S-text.png" alt="">
                </div>
            </div>
            <div class="cuerpo-form-landing">
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
                        <input class="form-control inputLanding" max="999999999" type="number" name="CelularClienteLanding" id="" maxlength="9"><br>
                    </div>
                    <div class="text-formulario-permisos">
                        <label  for="">Políticas de privacidad: <a href="https://prestaclub.com/politica-de-privacidad/">https://prestaclub.com/politica-de-privacidad/</a></label><br><br>
                        <input type="checkbox" name="" id=""> Declaro haber leído y aceptado de manera previa y expresa la Política de privacidad, sujetándose a sus disposiciones. <br>
                        <input type="checkbox" name="" id=""> Otorgo mi consentimiento para recibir publicidad sobre promociones y ofertas de PRESTACLUB y de empresas vinculadas y aliados comerciales.<br>
                    </div>
                    <div class="text-center pt-3">
                        <input type="submit" class="button-landing" name="enviarDatos" value="Enviar datos">
                    </div>
                    <?php
                    include('conexionBD.php');
                    if (isset($_POST['enviarDatos'])) {
                        $nombre = $_POST['NombreClienteLanding'];
                        $dni = $_POST['DNIClienteLanding'];
                        $correo = $_POST['CorreoClienteLanding'];
                        $celular = $_POST['CelularClienteLanding'];
                        if ($nombre == "" || $dni == "" || $correo == "" || $celular == "") {
                            echo "<div class='text-alert alert alert-danger' role='alert'>
                               Ingrese correctamente sus datos por favor, uno o mas campos faltan rellenar
                          </div>";
                        } else {
                            $fecha = date('Y-m-d H:i:s'); //Sacamos la hora y fecha actual
                            $sql = "INSERT INTO clientelanding (id,nombres,dni,correo,celular,fecha) VALUES (NULL,'$nombre','$dni','$correo','$celular','$fecha');";
                            if (($result = mysqli_query($conn, $sql)) === false) {
                                die(mysqli_error($conn));
                            } else {
                                echo "<div class='text-confirmacion'>
                                  <p>Sus datos se enviaron correctamente</p>
                                </div>";
                            }
                        }
                    }
                    ?>
                </form>
            </div>

        </div>
    </main>
    <?php
    include('footer.php');
    ?>
    <!-- Footer -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>

</html>