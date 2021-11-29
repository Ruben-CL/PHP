<?php
class BiciElectrica{

private $id; // Identificador de la bicicleta (entero)
private $coordx; // Coordenada X (entero)
private $coordy; // Coordenada Y (entero)
private $bateria; // Carga de la batería en tanto por ciento (entero)
private $operativa; // Estado de la bicleta ( true operativa- false no disponible)

public function __get($nombre){
    if(property_exists($this, $nombre)){
        return $this->$nombre;
    }else{
        return null;
    }
   
}
public function __set($nombre, $value){
    if(property_exists($this, $nombre)) {
        return $this->$nombre=$value;;
    }
}
public function __toString()
{
    return "Identificador: ".$this->id." Bateria: ".$this->bateria." %";
}
public function distancia($x,$y):float{
    return sqrt( ($x-$this->coordx)*($x-$this->coordx)+($y-$this->coordy)*($y-$this->coordy));
}

}
?>