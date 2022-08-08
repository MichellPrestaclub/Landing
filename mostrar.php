<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/stylesDatos.css">
    <title>Mostrar</title>
</head>

<body>
    <?php
    include('header.php');
    ?>

    <div class="container">
        <div class="container-button">
            <button class="button-exportar" onclick="exportTableToExcel('tblData')">Exportar tabla en un Excel</button>
        </div>
        <div class="container-tabla">
            <table class="table tabla-datos" id="tblData">
                <tr class="tr-header">
                    <th scope="col">ID</th>
                    <th scope="col">Nombres</th>
                    <th scope="col">DNI</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Celular</th>
                    <th scope="col">rGanadora</th>
                    <th scope="col">rConfirmacion</th>
                    <th scope="col">fecha</th>
                    <th scope="col">rutaImagen</th>
                </tr>
                <?php
                include('conexionBD.php');
                $consultar = "SELECT * FROM landinganiversario";
                $query = mysqli_query($conn, $consultar);
                $array = mysqli_fetch_array($query);
                foreach ($query as $row) {
                ?>
                    <tr class="tr-datos">
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['nombre'] ?></td>
                        <td><?php echo $row['dni'] ?></td>
                        <td><?php echo $row['correo'] ?></td>
                        <td><?php echo $row['celular'] ?></td>
                        <td><?php echo $row['rGanadora'] ?></td>
                        <td><?php echo $row['rConfirmacion'] ?></td>
                        <td><?php echo $row['fecha'] ?></td>
                        <td><img src="<?php echo $row['rutaImagen'] ?>" alt="" width="200px"></td>

                    </tr>
                <?php
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="script/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>