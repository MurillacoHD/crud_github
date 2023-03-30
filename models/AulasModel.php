<?php
class AulasModel
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
        $consulta = $this->db->prepare('SELECT * FROM tb_aulas');
        $consulta->execute();
        //devolvemos la colección para que la vista la presente.
        return $consulta;
    }

    public function datos_formulario($id)
    {
        //realizamos la consulta de todos los aulas
        $consulta = $this->db->prepare("SELECT * FROM tb_aulas WHERE id_aula = $id");
        $consulta->setFetchMode(PDO::FETCH_ASSOC);
        $consulta->execute();
        //devolvemos la colección para que la vista la presente.
        return $consulta;
    }

    public function gravar_modificacio($request)
    {
        //realizamos la consulta de todos los aulas
        $consulta = $this->db->prepare("UPDATE tb_aulas SET aula='".$request["aula"]."' WHERE id_aula=".$request["id_aula"]);
        $consulta->setFetchMode(PDO::FETCH_ASSOC);
        $consulta->execute();
        //devolvemos la colección para que la vista la presente.
        return $consulta;
    }

    public function eliminar($id){
        $consulta = $this->db->prepare("DELETE FROM tb_aulas WHERE id_aula=$id");
        $consulta->setFetchMode(PDO::FETCH_ASSOC);
        $consulta->execute();
    }

    public function afegir($id){
        $consulta = $this->db->prepare("INSERT * INTO tb_aulas ");
        $consulta->setFetchMode(PDO::FETCH_ASSOC);
        $consulta->execute();
    }
}
?>