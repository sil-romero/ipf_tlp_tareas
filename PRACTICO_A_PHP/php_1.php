<?php
// se vincula el archivo 'encabezado.php'
include('encabezado.php');

echo "LOS PRIMEROS DIEZ NÚMEROS DE LA SUSECIÓN DE FIBONACCI SON: ";
// se definen dos variables (seran los primeros dos números consecutivos)
$n_1 = 1;
$n_2= 0;
// utilizamos una estructura for para ejecutar el procedimiento para los primeros 10 nros de la suseción
for ($i=0; $i<=10 ; $i++) { 
    // realizamos la suma y lo gusrdamos en la variable suma
    $suma = $n_1+$n_2;
    // el valor de n_2 lo toma la variable n_1
    $n_1 = $n_2;
    // y el valor de n_2 lo toma la varieble suma para la siguiente ejecucuión
    $n_2 = $suma;
// se imprime cada resultado
echo $suma." ";
}

// se vincula el archivo 'pie.php'
include('pie.php');
?>