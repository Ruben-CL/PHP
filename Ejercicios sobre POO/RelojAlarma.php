<?php
include_once 'Reloj.php';
class RelojAlarma extends Reloj
{
    private $segundosAlarma;
    private $activada;
    

    public function __construct(int $hora, int $minutos, int $segundos)
    {
        parent::__construct($hora, $minutos, $segundos);
        $this->segundosAlarma = 0;
        $this->activada = false;
        
    }
    public function fijarHoraAlarma($hora, $minutos):void
    {
        $this->segundosAlarma = $hora * 3600 + $minutos * 60;
        $this->activada=true;
    }
    public function activarAlarma(bool $activada):void
    {
        $this->activada = $activada;
    }
   
    // Incrementa en un segundo el valor de reloj
    public function tictac():void
    {
        $this->segundos += 1;
        if ($this->segundos > 86400) {
            $this->segundos = 0;
        }
        if ($this->segundos == $this->segundosAlarma && $this->activada) {
            print ("la alarma está sonando ".$this->mostrar());
        }
    }
    
   
}
