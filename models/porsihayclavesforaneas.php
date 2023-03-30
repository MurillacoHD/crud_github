<?php
class ItemsModel
{
    protected $db;
 
    public function __construct()
    {
        //Traemos la única instancia de PDO
        $this->db = SPDO::singleton();
    }
 
    public function listadoTotal()
    {
        //realizamos la consulta de todos los aulas
        $consulta = $this->db->prepare('SELECT * FROM id_item, item, `class` FROM items RIGHT JOIN `class` USING(id_class)');
        $consulta->execute();
        //devolvemos la colección para que la vista la presente.
        return $consulta;
    }

    public function datos_formulario($id)
    {
        //realizamos la consulta de todos los aulas
        $consulta = $this->db->prepare("SELECT * FROM items WHERE id_ite = $id");
        $consulta->setFetchMode(PDO::FETCH_ASSOC);
        $consulta->execute();
        //devolvemos la colección para que la vista la presente.
        return $consulta;
    }

    public function listadoClasses()
    {
        //realizamos la consulta de todos los aulas
        $consulta = $this->db->prepare("SELECT * FROM class");
        $consulta->setFetchMode(PDO::FETCH_ASSOC);
        $consulta->execute();
        //devolvemos la colección para que la vista la presente.
        return $consulta;
    }

    public function gravar_modificacio($request)
    {
        //realizamos la consulta de todos los aulas
        $consulta = $this->db->prepare("UPDATE items SET item='".$request["item"]."', id_class=".$request["id_class"]."observations='".$request["observations"]."' WHERE id_item=".$request["id_item"]);
        $consulta->setFetchMode(PDO::FETCH_ASSOC);
        $consulta->execute();
        //devolvemos la colección para que la vista la presente.
        return $consulta;
    }
}
?>