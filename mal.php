// TREBALLADORS
        echo "<div class='flex-container'>";
    while ($item = $listado->fetch()) { ?>
        <div class='flex-child text-center'>
            <div draggable='true' ondragstart='drag(event)' id='drag<?= $item["id_treballador"] ?>' class='treballadors' id_treballador=><?= $item["id_treballador"] ?>> <?=$item["nom_treballador"] ?> <?= $item["cognom"] ?>
            <p class='carrec'><?= $item["carrec"] ?></p>
        </div>
    </div><?php
    }
    echo" </div>";