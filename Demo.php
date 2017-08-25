<?php

class Demo
{
    private $idDemo;
    private $nombre;
    private $fecha;
    
     function __construct($idDemo, $nombre, $fecha) {
       $this->idDemo = $idDemo;
       $this->nombre = $nombre;
       $this->fecha = $fecha;
     }
    
     function setIdDemo($idDemo){
       $this->idDemo = $idDemo;
     } 
     function getIdDemo(){
       return $this->idDemo;
     } 
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     } 
      function setFecha($fecha){
       $this->fecha = $fecha;
     } 

     function getFecha(){
       return $this->fecha;
     } 
}

?> 
