<?php

class Pasajeros{
    private $nombre;
    private $numeroAsiento;
    private $numeroTicket;

    public function __construct($n,$a,$t)
    {
        $this->nombre =$n;
        $this->numeroAsiento = $a;
        $this->numeroTicket = $t ;
    }

    
    public function getNombre()
    {
        return $this->nombre;
    }

    
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        
    }

    public function getNumeroAsiento()
    {
        return $this->numeroAsiento;
    }

   
    public function setNumeroAsiento($numeroAsiento)
    {
        $this->numeroAsiento = $numeroAsiento;

       
    }

   
    public function getNumeroTicket()
    {
        return $this->numeroTicket;
    }

  
    public function setNumeroTicket($numeroTicket)
    {
        $this->numeroTicket = $numeroTicket;

       
    }

    public function __toString()
    {
        return "\n".$this->getNombre()
        ."\n".$this->getNumeroAsiento()
        ."\n".$this->getNumeroTicket();
    }

    public function darPorcentajeIncremento(){
        return 0.10;
    }
}