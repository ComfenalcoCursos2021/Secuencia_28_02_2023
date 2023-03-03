<?php
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json; charset=utf-8');
    
    $nombre = (string) "Miguel Angel Castro Escamilla";
    $edad = (int) 23;
    $altura = (double) 1.63;
    $esProfesor = (boolean) true;
    
    $pasaTiempo = (array) [
        "Cocinar",
        "Programar",
        "Escuchar musica",
    ];

    $veiculo = (object) [
        "tipo de veiculo" => "moto",
        "color" => "Rojo",
        "llantas" => 2,
        "Frenos" => true,
        "Kilometraje" => 102.564
    ];
    
    $json = (object) [];
    $json->NOMBRE = $nombre;
    $json->EDAD = $edad;
    $json->ALTURA = $altura;
    $json->ESPROFESOR = $esProfesor;
    $json->PASATIEMPO = $pasaTiempo;
    $json->VEICULO = $veiculo;
    $json->SERVER = $_SERVER['HTTP_HOST'];

    echo json_encode($json, JSON_PRETTY_PRINT);
    
?>








