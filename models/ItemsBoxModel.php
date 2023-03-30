<?php
class ItemsBoxModel
{
    protected $db;

    public function __construct()
    {
        //Traemos la unica instancia de POO 
        $this->db = SPDO::singleton();
    }

    public function listadoTotal()
    {
        $consulta = $this->db->prepare('SELECT * FROM`ItemsBox`');
        $consulta->setFetchMode(PDO::FETCH_ASSOC);
        $consulta->execute();
        return $consulta;
    }

    public function gravar_assignacio($request) {
        $consulta = $this->db->prepare("INSERT items_box (id_item, id_box) VALUES (?,?");
        $consulta->setFetchMode(PDO::FETCH_ASSOC);
        $consulta->execute([$request["id_item"],$request["id_box"]]);
    }
}
?>