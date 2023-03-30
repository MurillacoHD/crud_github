<?php
class UsuarisModel
{
    protected $db;
 
    public function __construct()
    {
        //Traemos la única instancia de PDO
        $this->db = SPDO::singleton();
    }
 
    public function listadoTotal()
    {
        //realizamos la consulta de todos los usuaris
        $consulta = $this->db->prepare('SELECT * FROM tb_usuaris');
        $consulta->execute();
        //devolvemos la colección para que la vista la presente.
        return $consulta;
    }

    public function datos_formulario($id)
    {
        //realizamos la consulta de todos los usuari
        $consulta = $this->db->prepare("SELECT * FROM tb_usuaris WHERE id_usuari = $id");
        $consulta->setFetchMode(PDO::FETCH_ASSOC);
        $consulta->execute();
        //devolvemos la colección para que la vista la presente.
        return $consulta;
    }

    public function gravar_modificacio($request)
    {
        //realizamos la consulta de todos los usuari
        $consulta = $this->db->prepare("UPDATE tb_usuaris SET usuari='".$request["usuari"]."' WHERE id_usuari=".$request["id_usuari"]);
        $consulta->setFetchMode(PDO::FETCH_ASSOC);
        $consulta->execute();
        //devolvemos la colección para que la vista la presente.
        return $consulta;
    }

    public function eliminar($id){
        $consulta = $this->db->prepare("DELETE FROM tb_usuaris WHERE id_usuari=$id");
        $consulta->setFetchMode(PDO::FETCH_ASSOC);
        $consulta->execute();
    }
}
?>