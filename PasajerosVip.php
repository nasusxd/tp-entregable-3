<?php
include_once ("Pasajeros.php");
/*úmero de viajero frecuente y cantidad de millas de pasajero */
class PasajeroVip  extends Pasajeros{
private $numViajeroFrecuente;
private $cantMillas;

public function __construct($n,$a,$t,$viaFre,$m)
{  parent:: __construct($n,$a,$t);
    $this->numViajeroFrecuente =$viaFre ;
    $this->cantMillas =$m ;
    
}


public function getNumViajeroFrecuente()
{
return $this->numViajeroFrecuente;
}


public function setNumViajeroFrecuente($numViajeroFrecuente)
{
$this->numViajeroFrecuente = $numViajeroFrecuente;


}


public function getCantMillas()
{
return $this->cantMillas;
}


public function setCantMillas($cantMillas)
{
$this->cantMillas = $cantMillas;


}

public function __toString()
{
   $cadena= parent:: __toString();
   $cadena.= "\n". $this->getNumViajeroFrecuente()."\n".$this->getCantMillas()."\n";
   return $cadena;
}

public function darPorcentajeIncremento(){
$porcentaje=0.35;
$millas=$this->getCantMillas();
  if($millas>=300){
    $porcentaje=0.30;
  }
  return $porcentaje;
 }
}