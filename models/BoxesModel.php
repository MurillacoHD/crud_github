<?php
class BoxesModel
{
    protected $db;
    
    public function __construct()
    {
        //Traemos la unica instancia de PDO
        $this->db = SPDO::singleton();
    }
    
    public function listadoTotal()
    {
        $consulta = $this->db->prepare('SELECT * FROM `boxes`');
        $consulta->setFetchMode(PDO::FETCH_ASSOC);
        $consulta->execute();
        return $consulta;
    }

    public function datos_formulario($id)
    {
        $consulta = $this->db->prepare("SELECT * FROM boxes WHERE id_box = $id");
        $consulta->setFetchMode(PDO::FETCH_ASSOC);
        $consulta->execute();
        return $consulta;
    }

    public function gravar_modificacio($request) {
        $consulta = $this->db->prepare("UPDATE boxes SET box'".$request["box"]."'WHERE id_box=".$request["id_box"] );
        $consulta->setFetchMode(PDO::FETCH_ASSOC);
        $consulta->execute();
        return $consulta;
    }
}

?>