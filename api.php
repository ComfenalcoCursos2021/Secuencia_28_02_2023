<?php
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
    
    echo "Nombre: $nombre<br>";
    echo "Edad: $edad<br>";
    echo "Altura: $altura<br>";
    echo "Es el profesor: $esProfesor<br>";
    echo "Pasa tiempos: ".json_encode($pasaTiempo)."<br>";
    echo "Veiculo: ".json_encode($veiculo);
?>








