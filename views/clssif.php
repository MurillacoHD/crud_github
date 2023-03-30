<!DOCTYPE html>
<html>
<head>
<style> 
#div1, #div2{
    width: 350px;
    height: 70px;
    padding: 10px;
    border: 1px solid #aaaaaa;
}
.item {
    width: 40px;
    height: 40px;
    margin: 5px;
    border: 1px solid black;
    background-color: orange;
}
.bases_boxes {
    display: flex;
    flex-flow: row wrap;
    height: 160px;
    padding: 20px;
    border: 1px solid black;
    background-color: cyan;
}
.base_items {
    display: flex;
    height: 80px;
    padding: 20px;
    border: 1px solid black;
    background-color: cyan;
}
.box {
    display: flex;
    width: 120px;
    height: 120px;
    margin: 5px;
    border: 1px solid black;
    background-color: gray;
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
    ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev){
    ev.parentDefault();
    var data = ev.dataTransfer.getData("text");
    ev.target.appendChild(document.getElementById(data));

    // comunicació AJAX per gravar el canvi. Els podem gravar en un draft i deixar-ho en espera fins que l'usuari gravi.
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function(){
        if(this.readyState==4){
            alert(this.responseText);
        }
    };
    xhr.open("GET","index.php?controlador=Classif&accion=gravar_assignacio&id_item="+document.getElementById(data).getAttribute("id_item")+"&id_box="+ev.target.getAttribute("id_box"),true);
    xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
    xhr.send();
}
</script>
</head>
<body>
    <div class="base_boxes">
        <?php
        while($box=$boxes->fetch()){ ?>
            <div class=box id_box=<?= $box["id_box"] ?> id="box_<?=["id_box"] ?>" ondrop="drop(event)" ondragover="allowDrop(event)"><?= $box["box"] ?></div><?php
        } ?>
    </div>
    <br>
    <div class="base_items" ondrop="drop(event)" ondragover="allowDrop(event)"> 
    <?php
    while($item=$items->fetch()) { ?>
        <div class=item id_item=<?= $item["id_item"] ?> id="item_<?= $item["id_item"] ?>" draggable="true" ondragstart="drag(event)"><?= $item["item"] ?></div><?php
    }?>
</body>
</html>