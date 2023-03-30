<?php
class AulasController
{
    private $view;
    
    function __construct()
    {
        //Creamos una instancia de nuestro mini motor de plantillas
        $this->view = new View();
    }
 
    public function listar($request)
    {
        //Incluye el modelo que corresponde
        require 'models/AulasModel.php';
 
        //Creamos una instancia de nuestro "modelo"
        $aulas = new AulasModel();
 
        //Le pedimos al modelo todos los aulas
        $listado = $aulas->listadoTotal();
 
        //Pasamos a la vista toda la información que se desea representar
        $data['listado'] = $listado;
 
        //Finalmente presentamos nuestra plantilla
        $this->view->show("listar_aulas.php", $data);
    }

    public function formulario_modificar($request)
    {
        //Incluye el modelo que corresponde
        require 'models/AulasModel.php';
 
        //Creamos una instancia de nuestro "modelo"
        $aulas = new AulasModel();
 
        $listado = $aulas->datos_formulario($request["param"]);
        // $classes = $items->listadoClasses();
 
        //Pasamos a la vista toda la información que se desea representar
        $data['listado'] = $listado;
 
        //Finalmente presentamos nuestra plantilla
        $this->view->show("modificar_aulas.php", $data);
    }
 
    public function gravar_modificacio($request){

        //Incluye el modelo que corresponde
        require 'models/AulasModel.php';
 
        //Creamos una instancia de nuestro "modelo"
        $aulas = new AulasModel();

        $consulta = $aulas->gravar_modificacio($request);
        $data["consulta"] = $consulta;

        $this->view->show("resultat.php", $data);
    }

    public function eliminar($request){
        // Incluye el modelo que corresponde
        require 'models/AulasModel.php';

        // Creamos una instancia de nuestro "modelo"
        $aula = new AulasModel();

        $consulta = $aula->eliminar($request["param"]);
        $data["consulta"] = $consulta;

        $this->view->show('resultat.php', $data);
    }

    public function afegir ($request){
        //Incluye el modelo que corresponde
        require 'models/AulasModel.php';
 
        //Creamos una instancia de nuestro "modelo"
        $aulas = new AulasModel();

        $listado = $aulas->datos_formulario($request["param"]);
        // $classes = $items->listadoClasses();

        //Pasamos a la vista toda la información que se desea representar
        $data['listado'] = $listado;

        //Finalmente presentamos nuestra plantilla
        $this->view->show("afegir_aulas.php", $data);
    }

    public function agregar()
    {
        echo 'Aquí incluiremos nuestro formulario para insertar aulas';
    }
}
?> 