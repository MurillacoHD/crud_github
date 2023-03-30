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
        <th>Professores</th>
        <th>Id_Usuari</th>
    </tr>
    <?php
    // $listado es una variable asignada desde el controlador ProfessoresController.
    while($professores = $listado->fetch())
    {
    ?>
    <tr>
        <td><?php echo $professores['id_professor']?></td>
        <td><?php echo $professores['professor']?></td>
        <td><?php echo $professores['id_usuari']?></td>
        <td><a href="index.php?controlador=Professores&accion=formulario_modificar&param=<?php echo $professores["id_professor"] ?>">Editar</a></td>
        <td><a href="index.php?controlador=Professores&accion=eliminar&param=<?php echo $professores["id_professor"] ?>">Eliminar</a></td>
    </tr>
    <?php
    }
    ?>
</table>
<td><a href="index.php?controlador=Professores&accion=afegir&param=<?php echo $professores["id_professor"] ?>">Afegir Professors</a></td>
</body>
</html>