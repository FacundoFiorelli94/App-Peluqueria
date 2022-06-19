<?php
require 'includes/funciones.php';
$servicios = obtenerServicios();
echo json_encode($servicios); //Convierte Array de php a string
