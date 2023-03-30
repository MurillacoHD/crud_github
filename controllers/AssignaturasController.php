<?php
class AssignaturasController
{
    private $view;
    
    function __construct()
    {
        //Creamos una instancia de nuestro mini motor de plantillas
        $this->view = new View();
    }
 
    public function listar()
    {
        //Incluye el modelo que corresponde
        require 'models/AssignaturasModel.php';
 
        //Creamos una instancia de nuestro "modelo"
        $assignatura = new AssignaturasModel();
 
        //Le pedimos al modelo todos los assignaturas
        $listado = $assignatura->listadoTotal();
 
        //Pasamos a la vista toda la información que se desea representar
        $data['listado'] = $listado;
 
        //Finalmente presentamos nuestra plantilla
        $this->view->show("listar_assignaturas.php", $data);
    }

    public function formulario_modificar($request)
    {
        //Incluye el modelo que corresponde
        require 'models/AssignaturasModel.php';
 
        //Creamos una instancia de nuestro "modelo"
        $assignatura = new AssignaturasModel();
 
        $listado = $assignatura->datos_formulario($request["param"]);
        // $classes = $items->listadoClasses();
 
        //Pasamos a la vista toda la información que se desea representar
        $data['listado'] = $listado;
 
        //Finalmente presentamos nuestra plantilla
        $this->view->show("modificar_assignaturas.php", $data);
    }
 
    public function gravar_modificacio($request){

        //Incluye el modelo que corresponde
        require 'models/AssignaturasModel.php';
 
        //Creamos una instancia de nuestro "modelo"
        $assignatura = new AssignaturasModel();

        $consulta = $assignatura->gravar_modificacio($request);
        $data["consulta"] = $consulta;

        $this->view->show("resultat.php", $data);
    }

    public function eliminar($request){
        // Incluye el modelo que corresponde
        require 'models/AssignaturasModel.php';

        // Creamos una instancia de nuestro "modelo"
        $assignatura = new AssignaturasModel();

        $consulta = $assignatura->eliminar($request["param"]);
        $data["consulta"] = $consulta;

        $this->view->show('resultat.php', $data);
    }
 
    public function agregar()
    {
        echo 'Aquí incluiremos nuestro formulario para insertar assignaturas';
    }
}
?>