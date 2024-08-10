<?php

require_once 'modelo/propiedadinmobiliaria.php';

$pi = new PropiedadInmobiliaria(1, 'San Juan 325', 100, 'Rosario', '$1.500.000');
$pi->MostrarDatos();