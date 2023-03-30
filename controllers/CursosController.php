<?php
class CursosController
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
        require 'models/CursosModel.php';
 
        //Creamos una instancia de nuestro "modelo"
        $cursos = new CursosModel();
 
        //Le pedimos al modelo todos los cursos
        $listado = $cursos->listadoTotal();
 
        //Pasamos a la vista toda la información que se desea representar
        $data['listado'] = $listado;
 
        //Finalmente presentamos nuestra plantilla
        $this->view->show("listar_cursos.php", $data);
    }

    public function formulario_modificar($request)
    {
        //Incluye el modelo que corresponde
        require 'models/CursosModel.php';
 
        //Creamos una instancia de nuestro "modelo"
        $cursos = new CursosModel();
 
        $listado = $cursos->datos_formulario($request["param"]);
        // $classes = $items->listadoClasses();
 
        //Pasamos a la vista toda la información que se desea representar
        $data['listado'] = $listado;
 
        //Finalmente presentamos nuestra plantilla
        $this->view->show("modificar_cursos.php", $data);
    }
 
    public function gravar_modificacio($request){

        //Incluye el modelo que corresponde
        require 'models/CursosModel.php';
 
        //Creamos una instancia de nuestro "modelo"
        $cursos = new CursosModel();

        $consulta = $cursos->gravar_modificacio($request);
        $data["consulta"] = $consulta;

        $this->view->show("resultat.php", $data);
    }

    public function eliminar($request){
        // Incluye el modelo que corresponde
        require 'models/CursosModel.php';

        // Creamos una instancia de nuestro "modelo"
        $curs = new CursosModel();

        $consulta = $curs->eliminar($request["param"]);
        $data["consulta"] = $consulta;

        $this->view->show('resultat.php', $data);
    }
 
    public function agregar()
    {
        echo 'Aquí incluiremos nuestro formulario para insertar cursos';
    }
}
?>