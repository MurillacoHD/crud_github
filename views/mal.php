<html>
    <style>
        .receptor{
            width: 150px;
            height: 100px;
            background-color: gray;
        }

        #div1, #div2{
            width: 350px;
            height: 70px;
            padding: 10px;
            border: 1px solid #aaaaaa;
        }

        .rectangulo {
            width: 250px; 
            height: 100px; 
            border: 3px solid black;
            background: gray;
        }
    </style>
    <script>
    // Primera tasca: fer un prototipus del configurador d'horaris.
    // HTML i javascript (i CSS). Sense accés a la BD. Amb funcionalitat drag&drop

    // Càrrega inicial de l'horari
    function allowDrop(ev){
        ev.preventDefault();
    }

    function drag(ev){
        ev.dataTransfer.setData("text", ev.target.id);
    }

    function drop(ev){
        ev.preventDefault();
        // var data = ev.dataTransfer-getData("text");
        // ev.target.appendChild(document.getElementById(data));
        var data = ev.dataTransfer.getData("text");
        ev.target.innerHTML+="<div>"+document.getElementById(data).innerHTML+"</div>";
        // comunicació AJAX per gravar el canvi. Els podem gravar en un draft i deixar-ho en espera fins que l'usuari gravi.
    }
</script>
    <body>
    <!-- <select name="select">
        <option value="value1">Aulas</option>
        <option value="value2" selected>Professores</option>
        <option value="value3">Usuaris</option>
        <option value="value4">Assignaturas</option>
        <option value="value5">Cursos</option>
        <option value="value6">Horaris</option>
    </select> -->


    <!-- <select name="select">
        <option value="value1" selected>Cursos</option>
        <option value="value2">Assiganturas</option>
        <option value="value3">Aulas</option>
    </select> -->
    <h2>Cursos:</h2>
    <select name="select">
        <option value="value1">P3</option>
        <option value="value2" selected>P4</option>
        <option value="value3">P5</option>
        <option value="value4">Primero</option>
        <option value="value5">Segundo</option>
        <option value="value6">Tercero</option>
        <option value="value7">Quarto</option>
        <option value="value8">Quinto</option>
        <option value="value9">Sexto</option>
    </select>

    <h2>Assignaturas:</h2>
    <select name="select">
        <option value="value1">Descubrimiento de uno mismo y de los demás</option>
        <option value="value2" selected>Descubrimiento del entorno</option>
        <option value="value3">Comunicación y lenguajes</option>
        <option value="value4">Lengua catalana y literatura</option>
        <option value="value5">Lengua castellana y literatura</option>
        <option value="value6">Àngles</option>
        <option value="value7">Matemáticas</option>
        <option value="value8">Naturales</option>
        <option value="value9">Sociales</option>
        <option value="value10">Visual y plástica</option>
        <option value="value11">Educación física</option>
        <option value="value12">Aternativa</option>
        <option value="value13">Religió</option>
        <option value="value14">Música y danza</option>
    </select>

    <h2>Aulas:</h2>
    <select name="select">
        <option value="value1">Planta Baixa-P3</option>
        <option value="value2" selected>Planta Baixa-P4</option>
        <option value="value3">Planta Baixa-P5</option>
        <option value="value4">Planta 1-Primero</option>
        <option value="value5">Planta 1-Segundo</option>
        <option value="value6">Planta 1-Tercero</option>
        <option value="value7">Planta 1-Quarto</option>
        <option value="value8">Planta 1-Quinto</option>
        <option value="value9">Planta 1-Sexto</option>
    </select>


    <br><br><br> 
        <div><?php
        // PROFESSORS
        echo "<div class='flex-container'>";
    while ($item = $listado->fetch()) { ?>
        <div class='flex-child text-center'> 

            <div class="rectangulo" draggable='true' ondragstart='drag(event)' id='drag<?= $item["id_professor"] ?>' class='professors' id_professor=>Professor<?= $item["id_professor"] ?>: <?=$item["professor"] ?> <?= $item["id_usuari"] ?>
            <!-- <p class='carrec'><?= $item["id_usuari"] ?></p>  -->
        </div> 
    </div><?php
    } ?> </div>
        </div>
        <table>
            <tr>
                <th></th><th>Dilluns</th><th>Dimarts</th><th>Dimecres</th><th>Dijous</th><th>Divendres</th>
            </tr><?php
            for($f=8;$f<20;$f++){ // f de franja horària?>
                <tr><th><?= $f ?>.00 - <?= ($f+1) ?>.00 </th> <?php
                    for($d=1;$d<=5;$d++){ // d de dia ?>
                    <td>
                        <div class=receptor  ondrop="drop(event)" ondragover="allowDrop(event)" id=receptor_<?= $dia ?>_<?= $f ?> id_franja=<?= $f ?> id_dia=<?= $d ?>></div>
                    </td> <?php
                    } ?>
                </tr> <?php
            } ?>
        </table>
    </body>
</html>