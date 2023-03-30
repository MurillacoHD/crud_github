<?php
class UsuarisController
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
        require 'models/UsuarisModel.php';
 
        //Creamos una instancia de nuestro "modelo"
        $usuaris = new UsuarisModel();
 
        //Le pedimos al modelo todos los usuaris
        $listado = $usuaris->listadoTotal();
 
        //Pasamos a la vista toda la información que se desea representar
        $data['listado'] = $listado;
 
        //Finalmente presentamos nuestra plantilla
        $this->view->show("listar_usuaris.php", $data);
    }

    public function formulario_modificar($request)
    {
        //Incluye el modelo que corresponde
        require 'models/UsuarisModel.php';
 
        //Creamos una instancia de nuestro "modelo"
        $usuaris = new UsuarisModel();
 
        $listado = $usuaris->datos_formulario($request["param"]);
        // $classes = $items->listadoClasses();
 
        //Pasamos a la vista toda la información que se desea representar
        $data['listado'] = $listado;
 
        //Finalmente presentamos nuestra plantilla
        $this->view->show("modificar_usuaris.php", $data);
    }
 
    public function gravar_modificacio($request){

        //Incluye el modelo que corresponde
        require 'models/UsuarisModel.php';
 
        //Creamos una instancia de nuestro "modelo"
        $usuaris = new UsuarisModel();

        $consulta = $usuaris->gravar_modificacio($request);
        $data["consulta"] = $consulta;

        $this->view->show("resultat.php", $data);
    }

    public function eliminar($request){
        // Incluye el modelo que corresponde
        require 'models/UsuarisModel.php';

        // Creamos una instancia de nuestro "modelo"
        $usuari = new UsuarisModel();

        $consulta = $usuari->eliminar($request["param"]);
        $data["consulta"] = $consulta;

        $this->view->show('resultat.php', $data);
    }
 
    public function agregar()
    {
        echo 'Aquí incluiremos nuestro formulario para insertar usuaris';
    }
}
?>