<?php

class PropiedadInmobiliaria{

    function __construct($id,$dir,$mc,$ciu,$val){
        $this->Id = $id;
        $this->Direccion = $dir;
        $this->MetrosCuadrados = $mc;
        $this->Ciudad = $ciu;
        $this->Valor = $val;
    }

    public $Id;
    public $Direccion;
    public $MetrosCuadrados;
    public $Ciudad;
    public $Valor;

    public function MostrarDatos(){
        echo 'Id: ' . $this->Id . '<br>';
        echo 'Dirección: ' . $this->Direccion . '<br>';
        echo 'Metros cuadrados: ' . $this->MetrosCuadrados . '<br>';
        echo 'Ciudad: ' . $this->Ciudad . '<br>';
        echo 'Valor: ' . $this->Valor . '<br>';
    }


}