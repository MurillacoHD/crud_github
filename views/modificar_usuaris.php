<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>MVC - Modelo, Vista, Controlador - Jourmoly</title>
</head>
<body>
<form action="index.php" method="GET">
<input type="hidden" name=controlador value=Usuaris>
<input type="hidden" name=accion value=gravar_modificacio>
<table>
    <?php
        $usuaris = $listado->fetch();
        foreach($usuaris as $key=>$value){ ?>
        <tr>
            <td><label for=<?php echo $key ?>><?php echo $key ?></label></td>
            <td><input type=text name=<?php echo $key ?> id=<?php echo $key ?> value="<?php echo $value ?>"></td>
        </tr><?php    
    } ?>
</table>
<input type="submit" value="Gravar dades">
</form>
</body>
</html>