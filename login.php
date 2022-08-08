
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="img_menu/logo_burger.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Odibee+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/login.css">
    <title>Intranet|Grill Burger</title>
    <script defer src="script/index.js"></script>
</head>
<?php ?>
<body>
    <div class="contenido-pagina" id="Container">
        <div class="contenido-login" id="LoginContainer">
            <img src="https://prestaclub.com/wp-content/uploads/2022/07/prestaclub-isotipo-icono-web.png" alt="">
            <h1 class="title">INICIAR SESION</h1>
            <form action="" method="POST">
                <div class="input-linea-contenedora">
                    <label class="name-input" for="username">Usuario</label>
                    <input type="text" name="username" class="input-linea" placeholder="Ingrese usuario">
                </div>
                <div class="input-linea-contenedora">
                    <label class="name-input" for="password">Contraseña</label>
                    <input type="password" name="password" class="input-linea" placeholder="Ingrese su contraseña">
                </div>
                <button id="enviar" name="enviar" type="submit" class="button-login">INGRESAR</button> <br>
                <div id="Register" class="button-second">Registrar</div>
            </form>
        </div>
        <div class="contenido-registro" id="RegisterContainer">
            <img src="https://prestaclub.com/wp-content/uploads/2022/07/prestaclub-isotipo-icono-web.png" alt="">
            <h1 class="title">REGISTRAR</h1>
            <form method="POST">
                <div class="input-linea-contenedora">
                    <span class="name-input">Usuario</span>
                    <input type="text" name="usernameR" class="input-linea" placeholder="Ingrese un usuario">
                </div>
                <div class="input-linea-contenedora">
                    <span class="name-input">Email</span>
                    <input type="email" name="emailR" class="input-linea"  placeholder="Ingrese su email">
                </div>
                <div class="input-linea-contenedora">
                    <span class="name-input">Contraseña</span>
                    <input type="password" name="passwordR" class="input-linea" placeholder="Ingrese una contraseña">
                </div>
                <input type="button" value="registrarse" class="button-login">
                <span id="Login" class="button-second">¿Ya tienes una cuenta?</span>
            </form>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  
</body>
</html>