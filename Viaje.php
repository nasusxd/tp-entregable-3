<?php

/*
Modificar la clase viaje para almacenar el costo del viaje, la suma de los costos abonados por
 los pasajeros e implementar el método venderPasaje($objPasajero) que debe incorporar el pasajero a la colección de pasajeros 
( solo si hay espacio disponible), actualizar los costos abonados y retornar el costo final que deberá ser abonado por el pasajero.


Implemente la función hayPasajesDisponible() que retorna verdadero si la cantidad de pasajeros del viaje es menor a la 
cantidad máxima de pasajeros y falso caso contrario

 */
class viaje{
    private $ColeccPasajeros;
    private $costoViaje;
    private $costosAbonados ;
    private $cantAsientos;

    public function __construct($colePasa,$costVia,$costAbo,$cantAsi){
        $this->ColeccPasajeros = $colePasa;
        $this->costoViaje = $costVia;
        $this->costosAbonados = $costAbo;
        $this->cantAsientos = $cantAsi;
    }

  
    public function getColeccPasajeros()
    {
        return $this->ColeccPasajeros;
    }

  
    public function setColeccPasajeros($ColeccPasajeros)
    {
        $this->ColeccPasajeros = $ColeccPasajeros;

        
    }

   
    public function getCostoViaje()
    {
        return $this->costoViaje;
    }

    
    public function setCostoViaje($costoViaje)
    {
        $this->costoViaje = $costoViaje;

        
    }

    
    public function getCostosAbonados()
    {
        return $this->costosAbonados;
    }

    
    public function setCostosAbonados($costosAbonados)
    {
        $this->costosAbonados = $costosAbonados;

        
    }

    
    public function getCantAsientos()
    {
        return $this->cantAsientos;
    }

   
    public function setCantAsientos($cantAsientos)
    {
        $this->cantAsientos = $cantAsientos;

      
    }

    public function __toString()
    {$cadena="-----LISTA DE PASAJEROS-----\n";
         $cadena.= $this->arrayString($this->getColeccPasajeros());
         $cadena.="-----COSTOS Y CANT DE ASIENTOS-----\n";
         $cadena.= "cant de asientos: ".$this->getCantAsientos()."\n Costo de viaje: ".$this->getCostoViaje()."\n Costos abonados: ". $this->getCostosAbonados();

        return $cadena;
    }
    public function arrayString($array){
        $retorno="";
        $coleccion=$array;
        for($i=0;$i<count($coleccion);$i++){
            $retorno.= $coleccion[$i] . "\n";
            $retorno.="---------------------";
        }
        return $retorno;
    }

    public function venderPasaje($objPasajero){
        $ColeccPasajeros=$this->getColeccPasajeros();
        $precioViaje=$this->getCostoViaje();
        $costosAbonados=$this->getCostosAbonados();
        $preciofinal=0;
        if($this->hayPasajesDisponible()){
            array_push($ColeccPasajeros,$objPasajero);
            $incremento=$objPasajero->darPorcentajeIncremento();
            $precioViaje=$precioViaje+($precioViaje*$incremento);
            $costosAbonados=$costosAbonados+$precioViaje;
            $this->setCostosAbonados($costosAbonados);
            $this->setColeccPasajeros($ColeccPasajeros);
            $preciofinal=$precioViaje;
        }
        return $preciofinal;
    }
    public function hayPasajesDisponible(){
        $cantAsientos= $this->getCantAsientos();
        $ColeccPasajeros=$this->getColeccPasajeros();
        $cantAsientosOcupados= count($ColeccPasajeros);
        $hay=false;
        if($cantAsientos>$cantAsientosOcupados){
            $hay=true;
       }
       return $hay;
    }
}