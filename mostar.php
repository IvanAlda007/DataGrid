<?php
    session_start();
    session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Artistas Marciales</title>
    </head>

    <body>
        <center>
            <tr>INDICE DE ARTISTAS MARCIALES</tr>
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Edad</th>
                        <th>Año</th>
                        <th>Pais</th>
                        <th>Imagen</th>
                    </tr>
                </thead>
                <!-- -------------------------------- Titulos -------------------------------------------- -->
                <tbody>
                    <?php
                        include("open.php");
                        $consulta = "SELECT * FROM marciales";
                        $resultado = $conexion->query($consulta);
                        while($row = $resultado->fetch_assoc()){
                    ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['nom']; ?></td>
                            <td><?php echo $row['edad']; ?></td>
                            <td><?php echo $row['anio']; ?></td>
                            <td><?php echo $row['pais']; ?></td>

                            <td><img height="50px" src="data:image/jpg;base64, <?php echo base64_encode($row['Imagen']); ?> "></td>
                        </tr>

                       <?php 
                       }
                       ?>
            
                    
                </tbody>

            </table>
        </center>
    </body>
</html>