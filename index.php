<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://prestaclub.com/wp-content/uploads/2022/07/prestaclub-isotipo-icono-web.png" type="image/x-icon">
    <title>Landing</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>

<body>
    <?php
    include('header.php');
    $nombre = "";
    $dni = "";
    $correo = "";
    $celular = "";
    ?>
    <!--Cuerpo-->
    <main>
        <div class="cuerpo-landing">
            <div class="publicidad-landing">
                <div class="ponle-20">
                    <img src="https://prestaclub.com/wp-content/uploads/2022/08/Recurso-3.png" alt="">
                </div>
                <div class="img-premios">
                    <img src="https://prestaclub.com/wp-content/uploads/2022/08/Recurso-4-1.png" alt="">
                </div>
                <div class="enlace-facebook ">
                    <div class="text pt-3">
                        Sorteo todos los días por facebook <br>
                        <span>(lunes a viernes, hora 5:00pm, dias laborales)</span>
                    </div>
                    <div class="redes">
                        <div>
                            Siguenos
                        </div>
                        <div class="redes-facebook pt-2">
                            <a href="https://www.facebook.com/Prestaclub.peru" class="link-facebook"><i class="fa-brands fa-facebook-f"></i></a>
                            <button class="link-live">Live</button>
                        </div>
                    </div>
                </div>
                <div class="text-condiciones">
                    *Stock S/.1200 (Mil doscientos con 00/100 nuevos soles) para un total de 60 ganadores de S/. 20
                    soles cada uno. Obtenidos de los sorteos realizados de lunes a viernes, y, en días laborables, que
                    van desde el 08 de agosto hasta el 30 de septiembre, pagables por Yape o Plin. También 2 carritos
                    sangucheros para un total de 2 ganadores, obtenidos de un primer sorteo realizado el 31 de agosto
                    del 2022, y un segundo sorteo realizado el 30 de setiembre del 2022. Los premios están limitados a
                    la disponibilidad de stock. Promoción válida para personas naturales mayores de edad con negocio
                    (con RUC 10).**Las imagenes son referenciales.
                </div>
            </div>
            <div class="cuerpo-form-landing">
                <form class="form-landing" action="index.php" name="form" method="POST" enctype="multipart/form-data">
                    <?php
                    include('conexionBD.php');
                    if (isset($_POST['enviarDatos'])) {
                        $uploadedfileload = "true";
                        $msg = "";
                        $select = $_POST['mi_select'];
                        $nombre = $_POST['NombreClienteLanding'];
                        $dni = $_POST['DNIClienteLanding'];
                        $correo = $_POST['CorreoClienteLanding'];
                        $celular = $_POST['CelularClienteLanding'];
                        $radioButton = $_POST['radioButton'];
                        //--------------------------Enviar imagen-----------------------------
                        $uploadedfile_size = $_FILES['uploadedfile']['size'];
                        echo $_FILES['uploadedfile']['name'] . "<br>";
                        if ($_FILES['uploadedfile']['size'] > 9000000) {
                            $msg = $msg . "<br><span class='msg-error'>El archivo es mayor que 9MB, debes reducirlo antes de subirlo </span><br>";
                            $uploadedfileload = "false";
                            echo $msg;
                        }

                        if ($nombre == "" || $dni == "" || $correo == "" || $celular == "" || $select == "" || $radioButton == "" || $uploadedfileload == "false") {
                            echo "<div class='msg-error-alert' role='alert'>
                               Ingrese correctamente sus datos por favor.
                          </div>";
                        } else {
                            $fecha = date('Y-m-d H:i:s'); //Sacamos la hora y fecha actual

                            $file_name = $_FILES['uploadedfile']['name'];
                            $add = "uploads/$file_name";
                            if ($uploadedfileload == "true") {
                                $sql = "INSERT INTO landinganiversario (id,nombre,dni,correo,celular,rGanadora,rConfirmacion,rutaImagen,fecha) VALUES (NULL,'$nombre','$dni','$correo','$celular','$select', '$radioButton','$add','$fecha');";
                                        if (($result = mysqli_query($conn, $sql)) === false) {
                                            die(mysqli_error($conn));
                                        } else {
                                            echo "<div class='text-confirmacion'>
                                  <p>Sus datos se enviaron correctamente</p>
                                </div>";
                                        }
                            } else {
                                echo $msg;
                            }

                            //-----------------Enviar los campos a la base de datos------------

                        }
                    }
                    ?>
                    <div>
                        <h3 class="titulo-landing">Registrate y participa del sorteo</h3>
                    </div>
                    <div class="subtitulos-formulario">
                        Nombres y apellidos:<br>
                        <input class="form-control inputLanding" type="text" name="NombreClienteLanding" value="<?php echo $nombre ?>">
                    </div>
                    <div class="pt-3 subtitulos-formulario">
                        DNI:<br>
                        <input class="form-control inputLanding" max="99999999" type="number" name="DNIClienteLanding" id="" value="<?php echo $dni ?>">
                    </div>
                    <div class="pt-3 subtitulos-formulario">
                        Correo:<br>
                        <input class="form-control inputLanding" type="email" name="CorreoClienteLanding" id="" value="<?php echo $correo ?>">
                    </div>
                    <div class="pt-3 subtitulos-formulario">
                        N° Celular:<br>
                        <input class="form-control inputLanding" max="999999999" type="number" name="CelularClienteLanding" id="" maxlength="9" value="<?php echo $celular ?>">
                    </div>
                    <div class="subtitulos-formulario pt-3">
                        Elige tu respuesta ganadora
                        <select class="form-select select-form" id="mi_select" name="mi_select">
                            <option selected>Tipo de préstamo con Prestaclub</option>
                            <option value="Préstamo con garantía hipotecaria para compra mercadería">Préstamo con garantía hipotecaria para compra mercadería</option>
                            <option value="Préstamo con garantía hipotecaria para compra de activo fijo">Préstamo con garantía hipotecaria para compra de activo fijo</option>
                            <option value="Préstamo con garantía hipotecaria para compra de maquinaría">Préstamo con garantía hipotecaria para compra de maquinaría</option>
                            <option value="Préstamo con garantía hipotecaria para ampliación de casa">Préstamo con garantía hipotecaria para ampliación de casa</option>
                            <option value="Préstamo con garantía hipotecaria para autoconstrucción">Préstamo con garantía hipotecaria para autoconstrucción</option>
                        </select>
                    </div>
                    <div class="pt-2 subtitulos-formulario">
                        Sube una foto de tu negocio o emprendimiento:<span class="text-roboto-delgado">(Max 2MB)</span> <br>
                        <input class="selecciona-img" name="uploadedfile" type="file">
                    </div>
                    <div class="subtitulos-formulario pt-3">
                        Encuesta: ¿Cuentas un inmueble? <br><span class="text-roboto-delgado">(casa, departamento, local o terreno)</span> <br>
                        <span class="text-roboto-delgado"> Si </span> <input class="form-check-input" type="radio" name="radioButton" value="Si" checked><span class="text-roboto-delgado"> No</span> <input class="form-check-input" type="radio" name="radioButton" value="No">
                    </div>
                    <div class="text-formulario-permisos pt-1">
                        <label for="">Políticas de privacidad: <a style="text-decoration:none;color:#f5dfa1;" href="https://prestaclub.com/politica-de-privacidad/">https://prestaclub.com/politica-de-privacidad/</a></label><br>
                        <div>
                            <input type="checkbox" name="" id=""> Declaro haber leído y aceptado de manera previa y expresa la Política de privacidad, sujetándose a sus disposiciones. <br>
                        </div>
                        <div class="pt-2">
                            <input type="checkbox" name="" id=""> Otorgo mi consentimiento para recibir publicidad sobre promociones y ofertas de PRESTACLUB y de empresas vinculadas y aliados comerciales.<br>
                        </div>
                    </div>
                    <div class="container-button pt-3">
                        <input type="submit" class="button-landing" name="enviarDatos" value="Enviar datos"><img src="https://prestaclub.com/wp-content/uploads/2022/08/Recurso-2.png" class="ps-3" alt=""><img src="https://prestaclub.com/wp-content/uploads/2022/08/Recurso-1ds.png" class="pe-2 ps-3" alt="">
                    </div>
                </form>
            </div>

        </div>
        <div class="pagina-second">
            <div class="row cuerpo-testimonios">
                <h2 class="titulo-testimonio">Testimonios de nuestros clientes</h2>
                <div class="col-lg-6">
                    <iframe class="video-testimonio" src="https://www.youtube.com/embed/JCgDLc0Q-LI" title="Testimonio de Diana Palacios - Prestaclub" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="col-lg-6 container-img-volante">
                    <img src="https://prestaclub.com/wp-content/uploads/2022/08/Recurso-2-1.png" alt="" class="img-volante">
                </div>
            </div>
        </div>
    </main>
    <!-- Footer -->
    <?php
    include('footer.php');
    ?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>

</html>