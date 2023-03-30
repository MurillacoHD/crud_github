<?php
class ClassesController
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
        require 'models/ClassesModel.php';
 
        //Creamos una instancia de nuestro "modelo"
        $classes = new ClassesModel();
 
        //Le pedimos al modelo todos los classes
        $listado = $classes->listadoTotal();
 
        //Pasamos a la vista toda la información que se desea representar
        $data['listado'] = $listado;
 
        //Finalmente presentamos nuestra plantilla
        $this->view->show("listar_classes.php", $data);
    }
 
    public function formulario_modificar($request)
    {
        //Incluye el modelo que corresponde
        require 'models/ClassesModel.php';
 
        //Creamos una instancia de nuestro "modelo"
        $classes = new ClassesModel();

        $listado = $classes->datos_formulario($request["param"]);
        $aulas = $classes->liatadoAulas($request["param"]);

        // Pasamos a la vista tod la información que se desea representar
        $data['listado'] = $listado;
        $data["aulas"] = $aulas;

        // Finalmente presenamos nuestra plantilla
        $this->view->show("modificar-class.php, $data");
 
    }

    public function gravar_modificacio($request)
    {
        //Incluye el modelo que corresponde
        require 'models/ClassesModel.php';
 
        //Creamos una instancia de nuestro "modelo"
        $classes = new ClassesModel();
 
        $consulta = $classes->gravar_modificacio($request);
        $data["consulta"] = $consulta;

        $this->view->show("resultat.php", $data);
    }

    public function agregar()
    {
        echo 'Aquí incluiremos nuestro formulario para insertar classes';
    }
}
?>