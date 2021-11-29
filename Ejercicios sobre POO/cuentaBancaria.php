<?php
class cuentaBancaria {
    private $saldoCuenta;
    private $numMovimientos;
    private static $numCuentas=0;

public function __construct(int $saldoCuenta=0){
$this->saldoCuenta=$saldoCuenta;
$this->numMovimientos=0;
self::$numCuentas++;
}
 // Redifino el método __get 
 public function __get($atributo){
    if(property_exists($this, $atributo)) {
        return $this->$atributo;
    }
    trigger_error("Atributo no definido ", E_USER_NOTICE);
    return null;
}
public function ingreso(int $cantidad){
    $this->saldoCuenta+=$cantidad;
    $this->numMovimientos++;
}
public function abono(int $cantidad){
    $this->saldoCuenta-=$cantidad;
    $this->numMovimientos++;
}
public function anotarGastos(){
    if ($this->saldoCuenta<=1000) {
        $this->saldoCuenta-=20;
        $this->numMovimientos++;
    }
}
public function anotarInteres(int $interes){
    $this->saldoCuenta+=intval(round($this->saldoCuenta*($interes/100)));
    $this->numMovimientos++;
}
public function transferencia(int $cantidad, cuentaBancaria $destino){
    $this->abono($cantidad);
    $destino->ingreso($cantidad);
}
public function estadoCuenta():string{
return "el saldo de la cuenta es: ".$this->saldoCuenta." el número de operaciones realizadas es: ".$this->numMovimientos;
}
}
?>