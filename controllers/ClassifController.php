<?php
class ClassifController
{
    private $view;

    function __construct()
    {
        //Creamos una instancia de nuestro mini motor de plantillas
        $this->view = new View();
    }

    public function classif($request)
    {
        //Incluye el modelo que corresponde
        require 'models/BoxesModel.php';
        require 'models/ItemsModel.php';

        //Creamos una instancia de nuestro "modelo"
        $boxes = new BoxesModel();
        $items = new ItemsModel();

        //Le pedimos al modelo todos los classes
        $rs_boxes = $boxes->listadoTotal();
        $rs_items = $items->listadoTotal();

        //Pasamos a la vista toda la información que se desea representar
        $data['boxes'] = $rs_boxes;
        $data['items'] = $rs_items;

        //Finalmente presentamos nuestra plantilla
        $this->view->show("classif.php", $data);
    }

    public function gravar_assignacio($request)
    {
        require 'models/ItemsBoxModel.php';

        $items_box = new ItemsBoxModel();
        $rs_items_box = $items_box->gravar_assignacio($request);

        echo "Request rebut correctament.\nid_item: ".$request["id_item"]."\nid_box: ".$request["id_box"];
        
    }
}
?>