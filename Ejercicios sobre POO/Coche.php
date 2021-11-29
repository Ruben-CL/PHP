<?php


class Coche
{
    // Definir los atributos

    private $modelo;
    private $distanciaParcial;
    private  $distanciaTotal;
    private $motor;
    private $velocidad;
    private $velocidadMax;
    // Completar los métodos


    function __construct(String $modelo, int $velocidadMax)
    {
        $this->modelo = $modelo;
        $this->distanciaParcial = 0;
        $this->distanciaTotal = 0;
        $this->motor = false;
        $this->velocidad = 0;
        $this->velocidadMax = $velocidadMax;
    }

    public function  arrancar(): bool
    {
        if ($this->motor == false) {
            $this->motor = true;
            return true;
        } else {
            $this->infoError("el motor ya está arrancado");
            return false;
        }
    }

    public function parar(): bool
    {
        if ($this->motor) {
            $this->motor = false;
            $this->velocidad = 0;
            $this->distanciaParcial = 0;
            return true;
        } else {
            $this->infoError("el motor ya está parado");
            return false;
        }
    }

    public function acelera(int $cantidad): bool
    {
        if ($this->motor) {
            $this->velocidad += $cantidad;
            if ($this->velocidad > $this->velocidadMax) {
                $this->velocidad = $this->velocidadMax;
            }
            return true;
        } else {
            $this->infoError(" Motor apagado. No se puede acelerar");
            return false;
        }
    }

    public function frena(int $cantidad): bool
    {
        if ($this->motor) {
            $this->velocidad -= $cantidad;
            if ($this->velocidad < 0) {
                $this->velocidad = 0;
            }
            return true;
        } else {
            $this->infoError(" Motor apagado. No se puede frenar más");
            return false;
        }
    }

    public function recorre(): bool
    {
        if ($this->motor) {
            $this->distanciaParcial += $this->velocidad;
            $this->distanciaTotal += $this->velocidad;
            return true;
        } else {
            $this->infoError(" Motor apagado. No se puede recorrer ninguna distancia");
            return false;
        }
    }

    public function info(): string
    {
        return "El modelo es: " . $this->modelo . " la velocidad actual: " . $this->velocidad . " el estado: " . $this->motor . " kilómetros parciales: " . $this->distanciaParcial . " y totales: " . $this->distanciaTotal;
    }

    public function getKilometros(): int
    {

        return $this->distanciaParcial;
    }

    private function infoError(String $mensaje): void
    {
        print($mensaje."<br>");
    }
   static function compara(Coche $a, Coche $b){
        $a->getKilometros() - $b->getKilometros();
    }
}
