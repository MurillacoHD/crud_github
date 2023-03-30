<?php
class CursosModel
{
    protected $db;
 
    public function __construct()
    {
        //Traemos la única instancia de PDO
        $this->db = SPDO::singleton();
    }
 
    public function listadoTotal()
    {
        //realizamos la consulta de todos los cursos
        $consulta = $this->db->prepare('SELECT * FROM tb_cursos');
        $consulta->execute();
        //devolvemos la colección para que la vista la presente.
        return $consulta;
    }

    public function datos_formulario($id)
    {
        //realizamos la consulta de todos los cursos
        $consulta = $this->db->prepare("SELECT * FROM tb_cursos WHERE id_cursos = $id");
        $consulta->setFetchMode(PDO::FETCH_ASSOC);
        $consulta->execute();
        //devolvemos la colección para que la vista la presente.
        return $consulta;
    }

    public function gravar_modificacio($request)
    {
        //realizamos la consulta de todos los cursos
        $consulta = $this->db->prepare("UPDATE tb_cursos SET curs='".$request["curs"]."' WHERE id_cursos=".$request["id_cursos"]);
        $consulta->setFetchMode(PDO::FETCH_ASSOC);
        $consulta->execute();
        //devolvemos la colección para que la vista la presente.
        return $consulta;
    }

    public function eliminar($id){
        $consulta = $this->db->prepare("DELETE FROM tb_cursos WHERE id_cursos=$id");
        $consulta->setFetchMode(PDO::FETCH_ASSOC);
        $consulta->execute();
    }
}
?>