<?php
// se vincula el archivo 'encabezado.php'
include('encabezado.php');

//creamos el array (indexado) de temperaturas
$temperaturas = array(27.8, 27.2, 25.5, 21.8, 19.6, 17.2, 17.1, 18.1, 20.2, 22.2, 24.5, 26.5);
// creamos el array (indexado) de meses
$meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
// creamos el array (asociativo) de meses y temperaturas
$meses_temperaturas = array("Enero"=>27.8, "Febrero"=>27.2, "Marzo"=>25.5, "Abril"=>21.8, "Mayo"=>19.6, 
"Junio"=>17.2, "Julio"=>17.1, "Agosto"=>18.1, "Septiembre"=>20.2, "Octubre"=>22.2, "Noviembre"=>24.5, "Diciembre"=>26.5);
// se muestra por pantalla los arrays
print_r("matriz de temperatura: ");
print_r($temperaturas);
echo "<br><br>";
print_r("matriz temperatura con los meses: ");
print_r($meses_temperaturas);
echo "<br><br>";
// imprimimos las temperaturas por pantalla con un for 
for ($i=0; $i < count($temperaturas) ; $i++) { 
    echo "<tr>
    <td>$temperaturas[$i]
    </tr>
    ";
};
// imprimimos en tabla, una manera
echo "<br><br>
<table border='1' bordercolor='black' bgcolor='pink' align='center' width='75%'>";
echo "<tr class='sr'>";
for ($i=0; $i < count($meses); $i++) { 
    echo "<th> $meses[$i] </th>";
};
echo "</tr>";
echo "<tr>";
foreach ($meses_temperaturas as $key => $value) {
    echo "<td>$meses_temperaturas[$key]</td>";
};
echo "</tr>";
echo "</table>";
echo "<br><br>";
// imprimimos en forma de tabla, otra manera, mas manual
/* echo "<br><br>
<table border='1' bordercolor='black' bgcolor='#99CC00' align='center'>
<tr class='sr'>
    <th>MESES
    <th>Enero
    <th>Febrero
    <th>Marzo
    <th>Abril
    <th>Mayo
    <th>Junio
    <th>julio
    <th>Agosto
    <th>Septiembre
    <th>Octubre
    <th>Noviembre 
    <th>Diciembre 
</tr>
<tr>
    <td>TEMPERATURAS
    <td>$temperaturas[0]
    <td>$temperaturas[1]
    <td>$temperaturas[2]
    <td>$temperaturas[3]
    <td>$temperaturas[4]
    <td>$temperaturas[5]
    <td>$temperaturas[6]
    <td>$temperaturas[7]
    <td>$temperaturas[8]
    <td>$temperaturas[9]
    <td>$temperaturas[10]
    <td>$temperaturas[11]
</tr>
</table><br><br>"; */

// calculamos e imprimimos la media aritmetica con una estructura while
/* $contador=0;
$suma=0;
while ($contador<count($temperaturas)) {
    $suma = $suma + $temperaturas[$contador];
    $contador++;
}
$promedio = $suma/$contador;
print_r("la media aritmética es ");
print_r($promedio); */

// calculamos e imprimimos la media aritmetica con una estructura for
$suma=0;
for ($i=0; $i < count($temperaturas); $i++) { 
    $suma = $suma + $temperaturas[$i];
}
$promedio = $suma/count($temperaturas);
print_r("la media aritmética es: ");
print_r($promedio);
echo "<br>";

// calcularemos la varianza
$suma2=0;
for ($i=0; $i < count($temperaturas); $i++) { 
    $suma2 = $suma2 + ($temperaturas[$i]-$promedio)*($temperaturas[$i]-$promedio);
};
$varianza = $suma2/count($temperaturas);
// se muestra el resultado
print_r("la varianza es: ");
print_r($varianza);
echo "<br>";
// calculamos el desvío estandar sacando la raíz cuadrada de la varianza 
$DesEst = sqrt($varianza);
// se muestra el resultado
print_r(" el desvío estandar es: ");
print_r($DesEst);

// se vincula el archivo 'pie.php'
include('pie.php');
?>