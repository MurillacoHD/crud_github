<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>MVC - Modelo, Vista, Controlador - Jourmoly</title>
</head>
<body>
<form action="index.php" method="GET">
<input type="hidden" name=controlador value=Aulas>
<input type="hidden" name=accion value=gravar_modificacio>
<table>
    <?php
        $aula = $listado->fetch();
        foreach($aula as $key=>$value){ 
            if ($key == "id_class"){ ?>
        <tr>
            <td><label for="id_class">id_class</td>
            <td>
                <SELECT id="id_class" name="id_class">
                    <option value="0"></option><?php
                    while ($class_reg = $classes->fetch()) { ?>
                        <option value=<?php echo $class_reg["id_class"] ?> 

                        <?php echo ($class_reg["id_class"]==$value ?" selected": "")?>>>
                            <?php echo $class_reg["id_class"] ?>
                    </option><?php
                    } ?>
                </SELECT>
            </td>
        </tr><?php
            }else{ ?>
            <tr>
            <td><label for=<?php echo $key ?>><?php echo $key ?></label></td>
            <td><input type=text name=<?php echo $key ?> id=<?php echo $key ?> value="<?php echo $value ?>"></td>
            </tr><?php
        }
    } ?>
<input type="submit" value="Gravar dades">
</table>
</form>
</body>
</html>