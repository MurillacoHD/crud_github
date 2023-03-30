<?php

class Jugador{
    // Properties
    private $nom;
    private $alçada;
    private $cama_bona;
    private $nacionalitat;
    private $pes;

    public static $eina = "Pilota";
    // Methods

    public static function eina_de_treball(){
        return self::$eina;
    }

    function __construct($nom,$alçada,$cama_bona,$nacionalitat,$pes){
        $this->nom = $nom;
        $this->alçada = $alçada;
        $this->cama_bona = $cama_bona;
        $this->nacionalitat = $nacionalitat;
        $this->pes = $pes;
    }

    function obtenir_nom(){
        return $this->nom;
    }

    function assignar_nom($nom){
        $this->nom = $nom;
    }
}

// $jugador1 = new Jugador("Ronaldo",1.87,"diestro","Portugesa",85);
// $jugador2 = new Jugador("Messi",1.67,"zurdo","Argentina",67);echo "Jugador: ".$jugador1->obtenir_nom()."\n";
// echo "Jugador: ".$jugador1->obtenir_nom()."\n";
// print_r($jugador1);
// print_r($jugador2);
// echo $jugador1->nom;

echo Jugador::$eina;
echo "\n";
echo Jugador::eina_de_treball();
echo "\n";

?>