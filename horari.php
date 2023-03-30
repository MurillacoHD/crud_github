<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
    #div1, #div2{
        width: 350px;
        height: 70px;
        padding: 10px;
        border: 1px solid #aaaaaa;
    }
</style>
<script>
    // Primera tasca: fer un prototipus del configurador d'horaris.
    // HTML i javascript (i CSS). Sense accés a la BD. Amb funcionalitat drag&drop

    // Càrrega inicial de l'horari
    function allowDrop(ev){
        ev.parentDefault();
    }

    function drag(ev){
        ev.Transfer.setData("text", ev.target.id);
    }

    function drop(ev){
        ev.parentDefault();
        // var data = ev.dataTransfer-getData("text");
        // ev.target.appendChild(document.getElementById(data));
        var data = ev.dataTransfer.getData("text");
        ev.target.innerHTML+="<div>"+document.getElementById(data).innerHTML+"</div>";
        // comunicació AJAX per gravar el canvi. Els podem gravar en un draft i deixar-ho en espera fins que l'usuari gravi.
    }
    

</script>
</head>
<body>
<p>Drag the W3Schools image into the rectangle:</p>

<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
<div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>

</body>
</html>