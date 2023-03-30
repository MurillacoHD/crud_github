<?php
class ProfessoresModel
{
    protected $db;
 
    public function __construct()
    {
        //Traemos la única instancia de PDO
        $this->db = SPDO::singleton();
    }
 
    public function listadoTotal()
    {
        //realizamos la consulta de todos los profes
        $consulta = $this->db->prepare('SELECT * FROM tb_professors');
        $consulta->execute();
        //devolvemos la colección para que la vista la presente.
        return $consulta;
    }

    public function datos_formulario($id)
    {
        //realizamos la consulta de todos los professors
        $consulta = $this->db->prepare("SELECT * FROM tb_professors WHERE id_professor = $id");
        $consulta->setFetchMode(PDO::FETCH_ASSOC);
        $consulta->execute();
        //devolvemos la colección para que la vista la presente.
        return $consulta;
    }

    public function gravar_modificacio($request)
    {
        //realizamos la consulta de todos los professors
        $consulta = $this->db->prepare("UPDATE tb_professors SET professor='".$request["professor"]."' WHERE id_professor=".$request["id_professor"]);
        $consulta->setFetchMode(PDO::FETCH_ASSOC);
        $consulta->execute();
        //devolvemos la colección para que la vista la presente.
        return $consulta;
    }

    public function eliminar($id){
        $consulta = $this->db->prepare("DELETE FROM tb_professors WHERE id_professor=$id");
        $consulta->setFetchMode(PDO::FETCH_ASSOC);
        $consulta->execute();
    }
}
?>