<?php
class HorariController{

    private $view;
    
    function __construct()
    {
        //Creamos una instancia de nuestro mini motor de plantillas
        $this->view = new View();
    }
 
    public function horari($request)
    {
        require 'models/ProfessoresModel.php';

         //Creamos una instancia de nuestro "modelo"
         $profes = new ProfessoresModel();
 
         //Le pedimos al modelo todos los profes
         $listado = $profes->listadoTotal();
  
         //Pasamos a la vista toda la información que se desea representar
         $data['listado'] = $listado;

        // Finalmente presentams nuestra plantilla
        $this->view->show("horari.php", $data);
    }
}
?>