<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>MVC - Modelo, Vista, Controlador - Jourmoly</title>
</head>
<style> 
    table {
        width:500px;
        font:normal 13px Arial;
        text-align:center;
        border-collapse:collapse;   
    }
    table th {
        font:bold 15px Arial;
        background-color:lightblue;
    }
    .fila_impar {
        background-color:lightgray;
    }
    .fila_par {
        background-color:lightgreen;
    }
    .fila_resaltada {
        color:yellow;
        background-color:red;
    }
    </style>
<body>
<table>
    <tr>
        <th>ID</th>
        <th>Usuaris</th>
        <th>Contrasenya</th>
        <th>Id_Professor</th>
    </tr>
    <?php
    // $listado es una variable asignada desde el controlador UsuarisController.
    while($usuaris = $listado->fetch())
    {
    ?>
    <tr>
        <td><?php echo $usuaris['id_usuari']?></td>
        <td><?php echo $usuaris['usuari']?></td>
        <td><?php echo $usuaris['contrasenya']?></td>
        <td><?php echo $usuaris['id_professor']?></td>
        <td><a href="index.php?controlador=Usuaris&accion=formulario_modificar&param=<?php echo $usuaris["id_usuari"] ?>">Editar</a></td>
        <td><a href="index.php?controlador=Usuaris&accion=eliminar&param=<?php echo $usuaris["id_usuari"] ?>">Eliminar</a></td>
    </tr>
    <?php
    }
    ?>
</table>
<td><a href="index.php?controlador=Usuaris&accion=afegir&param=<?php echo $usuaris["id_usuari"] ?>">Afegir Usuaris</a></td>
</body>
</html>