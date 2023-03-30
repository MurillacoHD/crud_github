<?php
class ProfessoresController
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
        require 'models/ProfessoresModel.php';
 
        //Creamos una instancia de nuestro "modelo"
        $profes = new ProfessoresModel();
 
        //Le pedimos al modelo todos los profes
        $listado = $profes->listadoTotal();
 
        //Pasamos a la vista toda la información que se desea representar
        $data['listado'] = $listado;
 
        //Finalmente presentamos nuestra plantilla
        $this->view->show("listar_professores.php", $data);
    }

    public function formulario_modificar($request)
    {
        //Incluye el modelo que corresponde
        require 'models/ProfessoresModel.php';
 
        //Creamos una instancia de nuestro "modelo"
        $professores = new ProfessoresModel();
 
        $listado = $professores->datos_formulario($request["param"]);
        // $classes = $items->listadoClasses();
 
        //Pasamos a la vista toda la información que se desea representar
        $data['listado'] = $listado;
 
        //Finalmente presentamos nuestra plantilla
        $this->view->show("modificar_professores.php", $data);
    }
 
    public function gravar_modificacio($request){

        //Incluye el modelo que corresponde
        require 'models/ProfessoresModel.php';
 
        //Creamos una instancia de nuestro "modelo"
        $professores = new ProfessoresModel();

        $consulta = $professores->gravar_modificacio($request);
        $data["consulta"] = $consulta;

        $this->view->show("resultat.php", $data);
    }

    public function eliminar($request){
        // Incluye el modelo que corresponde
        require 'models/ProfessoresModel.php';

        // Creamos una instancia de nuestro "modelo"
        $professor = new ProfessoresModel();

        $consulta = $professor->eliminar($request["param"]);
        $data["consulta"] = $consulta;

        $this->view->show('resultat.php', $data);
    }
 
    public function agregar()
    {
        echo 'Aquí incluiremos nuestro formulario para insertar profes';
    }
}
?>