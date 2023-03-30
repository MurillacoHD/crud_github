<?php
class ClassesModel
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
        $consulta = $this->db->prepare('SELECT * FROM `class`');
        $consulta->setFetchMode(PDO::FETCH_ASSOC);
        $consulta->execute();
        //devolvemos la colección para que la vista la presente.
        return $consulta;
    }

    public function datos_formulario($id)
    {
        //realizamos la consulta de todos los aulas
        $consulta = $this->db->prepare("SELECT * FROM class WHERE id_class $id");
        $consulta->setFetchMode(PDO::FETCH_ASSOC);
        $consulta->execute();
        //devolvemos la colección para que la vista la presente.
        return $consulta;
    }

    public function listadoAulas($id)
    {
        //realizamos la consulta de todos los aulas
        $consulta = $this->db->prepare("SELECT * FROM aulas WHERE id_aula=$id");
        $consulta->setFetchMode(PDO::FETCH_ASSOC);
        $consulta->execute();
        //devolvemos la colección para que la vista la presente.
        return $consulta;
    }

    public function gravar_modificacio($request)
    {
        //realizamos la consulta de todos los aulas
        $consulta = $this->db->prepare("UPDATE class SET class='".$request["class"]."' WHERE id_class=".$request["id_class"]);
        $consulta->setFetchMode(PDO::FETCH_ASSOC);
        $consulta->execute();
        //devolvemos la colección para que la vista la presente.
        return $consulta;
    }
}
?>