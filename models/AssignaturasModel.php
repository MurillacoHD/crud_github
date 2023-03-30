<?php
class AssignaturasModel
{
    protected $db;
 
    public function __construct()
    {
        //Traemos la única instancia de PDO
        $this->db = SPDO::singleton();
    }
 
    public function listadoTotal()
    {
        //realizamos la consulta de todos los assignaturas
        $consulta = $this->db->prepare('SELECT * FROM tb_assignaturas');
        $consulta->execute();
        //devolvemos la colección para que la vista la presente.
        return $consulta;
    }

    public function datos_formulario($id)
    {
        //realizamos la consulta de todos los assignaturas
        $consulta = $this->db->prepare("SELECT * FROM tb_assignaturas WHERE id_assignatura = $id");
        $consulta->setFetchMode(PDO::FETCH_ASSOC);
        $consulta->execute();
        //devolvemos la colección para que la vista la presente.
        return $consulta;
    }

    public function gravar_modificacio($request)
    {
        //realizamos la consulta de todos los assignaturas
        $consulta = $this->db->prepare("UPDATE tb_assignaturas SET assignatura='".$request["assignatura"]."' WHERE id_assignatura=".$request["id_assignatura"]);
        $consulta->setFetchMode(PDO::FETCH_ASSOC);
        $consulta->execute();
        //devolvemos la colección para que la vista la presente.
        return $consulta;
    }

    public function eliminar($id){
        $consulta = $this->db->prepare("DELETE FROM tb_assignaturas WHERE id_assignatura=$id");
        $consulta->setFetchMode(PDO::FETCH_ASSOC);
        $consulta->execute();
    }
}
?>