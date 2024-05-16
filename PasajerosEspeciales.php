<?php
include_once ("Pasajeros.php");
/*La clase Pasajeros con necesidades especiales se refiere a pasajeros que pueden requerir servicios especiales como sillas de ruedas,
 asistencia para el embarque o desembarque, o comidas especiales para personas con alergias o restricciones alimentarias */
class PasajeroEspecial  extends Pasajeros{
private $sillaRuedas ;
private $asistencia ;
private $comidaEspecial ;

public function __construct($n,$a,$t,$s,$asis,$c)
{
    parent:: __construct($n,$a,$t);
    $this->sillaRuedas =$s ;
    $this->asistencia =$asis ;
    $this->comidaEspecial =$c ;

}






 
public function getSillaRuedas()
{
return $this->sillaRuedas;
}


public function setSillaRuedas($sillaRuedas)
{
$this->sillaRuedas = $sillaRuedas;


}


public function getAsistencia()
{
return $this->asistencia;
}


public function setAsistencia($asistencia)
{
$this->asistencia = $asistencia;


}


public function getComidaEspecial()
{
return $this->comidaEspecial;
}


public function setComidaEspecial($comidaEspecial)
{
$this->comidaEspecial = $comidaEspecial;


}

public function __toString()
{
   $cadena= parent:: __toString();
   $cadena.= "\n". $this->getSillaRuedas() ."\n". $this->getAsistencia()."\n".$this->getComidaEspecial();

   return $cadena;

}

public function darPorcentajeIncremento(){
   $sillaRuedas=$this->getSillaRuedas();
   $asistencia=$this->getAsistencia();
   $comidaEspecial=$this->getComidaEspecial();
   $cantservicios=0;
   $cantservicios=$cantservicios+$sillaRuedas;
   $cantservicios=$cantservicios+$asistencia;
   $cantservicios=$cantservicios+$comidaEspecial;

    if($cantservicios==1){
        $porcentaje=0.15;
    }elseif($cantservicios==2){
        $porcentaje=0.25;

    }
    elseif($cantservicios==3){
        $porcentaje=0.;
    }
      return $porcentaje;
     }
}