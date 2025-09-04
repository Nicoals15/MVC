<?php

//programacion orientada a objetos = poo
//clases: molde para crear objetos del mismo tipo
class Carro{
    //atributos o propiedades (variaables)
    public $color;
    public $marca;
    public $modelo;
    public $velocidad;
    public $potencia;
    public $puestos;

    
    // public function __construc()
    // {
    //     $this->color = "rojo";
    //     $this->marca = "ferrari";
    //     $this->modelo = "gallardo";
    //     $this->velocidad = 500;
    //     $this->potencia = 300;
    //     $this->puestos = 2;
    // }

    public function __construct($color,$marca,$modelo,$velocidad,$potencia,$puestos)
    {
        $this->color = $color;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->velocidad = $velocidad;
        $this->potencia = $potencia;
        $this->puestos = $puestos;
    }
}












?>