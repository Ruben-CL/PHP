<?php
/*
 * Prueba de CuentaBancaria
 */
include_once 'cuentaBancaria.php';
echo "<h2> PROBANDO </H2>";

$c1 = new cuentaBancaria(100);
$c2 = new cuentaBancaria(1900);
$c3 = new cuentaBancaria();

$c1->abono(20);
$c1->ingreso(10);
$c1->anotarGastos();
echo "<br> Cuenta c1 = ".$c1->estadoCuenta();

$c2->ingreso(100);
$c2->anotarGastos(); // No se aplican pues su saldo es mayor que 1000
$c2->anotarInteres(5); // 5% de interes
$c2->transferencia(100,$c3);
echo "<br> Cuenta c2 = ".$c2->estadoCuenta();

$c3->abono(75);
$c3->abono(75);  // Se queda con saldo negativo
echo "<br> Cuenta c3 = ".$c3->estadoCuenta();