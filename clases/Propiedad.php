<?php

namespace App;

class Propiedad {
    public $id;
    public $titulo;
    public $precio;
    public $imagen;
    public $descripcion;
    public $habitaciones;
    public $wc;
    public $estacionamiento;
    public $creado;
    public $vendedores_id;

    public function __construct($args = [])
    {
        $this->titulo = $args['id'] ?? '';
        $this->titulo = $args['titulo'] ?? '';
        $this->titulo = $args['precio'] ?? '';
        $this->titulo = $args['imagen'] ?? '';
        $this->titulo = $args['descripcion'] ?? '';
        $this->titulo = $args['habitaciones'] ?? '';
        $this->titulo = $args['wc'] ?? '';
        $this->titulo = $args['estacionamiento'] ?? '';
        $this->titulo = $args['creado'] ?? '';
        $this->titulo = $args['vendedores_id'] ?? '';
    }
}