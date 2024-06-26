<?php

$cantidad_empleados = intval(readline("Ingrese cantidad de empleados a inscribir: "));
$empleados = []; 


for ($i = 1; $i <= $cantidad_empleados; $i++) {
    echo "Empleado $i\n";
    $nombre = readline("Ingrese su nombre: ");
    $dni = intval(readline("Ingrese su DNI: "));
    $genero = readline("Ingrese su género (m/f): ");
    $edad = intval(readline("Ingrese su edad: "));
    $estatura = floatval(readline("Ingrese su estatura (en metros): "));
    $peso = floatval(readline("Ingrese su peso (en kg): "));

    
    $empleados[] = [
        'nombre' => $nombre,
        'dni' => $dni,
        'genero' => $genero,
        'edad' => $edad,
        'estatura' => $estatura,
        'peso' => $peso,
    ];

    echo "\n";
}


$nombre_buscar = readline("Ingrese nombre del empleado a buscar: ");
$dni_buscar = intval(readline("Ingrese DNI del empleado a buscar: "));

$encontrado = false;

foreach ($empleados as $empleado) {
    if ($empleado['nombre'] === $nombre_buscar && $empleado['dni'] === $dni_buscar) {
        echo "Empleado encontrado:\n";
        print_r ($empleado);
        $encontrado = true;
        break; 
    }
}

if (!$encontrado) {
    echo "Empleado no encontrado.\n";
}

?>



