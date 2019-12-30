<?php
// se vincula el archivo 'encabezado.php'
include('encabezado.php');

// se crea un array multidimencional de las temperaturas de cada mes con la máxima y la mínima
$temperaturas = array(
    "Enero" => array( "temperatura_minima" => 21.7, "temperatura_maxima" => 33.9),
    "Febrero" => array( "temperatura_minima" => 21, "temperatura_maxima" => 33.4),
    "Marzo" => array( "temperatura_minima" => 19.7, "temperatura_maxima" => 31.3),
    "Abril" => array( "temperatura_minima" => 16.1, "temperatura_maxima" => 27.5),
    "Mayo" => array( "temperatura_minima" => 14.2, "temperatura_maxima" => 25.1),
    "Junio" => array( "temperatura_minima" => 12.9, "temperatura_maxima" => 21.5),
    "Julio" => array( "temperatura_minima" => 12, "temperatura_maxima" => 22.2),
    "Agosto" => array( "temperatura_minima" => 11.8, "temperatura_maxima" => 24.5),
    "Septiembre" => array( "temperatura_minima" => 14.7, "temperatura_maxima" => 25.7),
    "Octubre" => array( "temperatura_minima" => 17.4, "temperatura_maxima" => 27.1),
    "Noviembre" => array( "temperatura_minima" => 18.7, "temperatura_maxima" => 30.4),
    "Diciembre" => array( "temperatura_minima" => 20.3, "temperatura_maxima" => 32.8),
);
// se crea el array (indexado) de meses
$meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
// se mustra el arreglo con print_r
print_r("Las temperaturas máximas y mínimas son:  ");
print_r($temperaturas);
echo "<br><br>";

// se calculan las temperaturas medias de cada mes
$promedio_1 = array();
foreach ($temperaturas as $clave => $valor) {
    $promedio_1[$clave] = ($valor['temperatura_minima']+$valor['temperatura_maxima'])/2;
}

// se imprime en forma de tabla las distintas temperaturas de cada mes 
echo "<table border='1' bordercolor='#00CC99' align='center' width='90%'>";
echo "<tr class='sr'>";
//con un for imprimimos la primera fila con los meses de titulo
for ($i=0; $i < count($meses); $i++) { 
    echo "<th  bgcolor='pink'> $meses[$i] </th>";
};
echo "</tr>";
// creamos otra fila e imprimimos las temperaturas mínimas
echo "<tr>";
foreach ($temperaturas as $clave => $valor) {
    echo "<td style='background-color:#". color($valor['temperatura_minima'])."'>".$valor['temperatura_minima']."</td>"; 
};
echo "</tr>";
// creamos otra fila e imprimimos las temperaturas máximas
echo "<tr>";
foreach ($temperaturas as $clave => $valor) {
    echo "<td style='background-color:#". color($valor['temperatura_maxima'])."'>".$valor['temperatura_maxima']."</td>"; 
};
echo "</tr>";
// creamos otra fila e imprimimos las temperaturas medias
echo "<tr>";
foreach ($promedio_1 as $clave => $valor) {
    echo "<td style='background-color:#". color($promedio_1[$clave])."'>".$promedio_1[$clave]."</td>"; 
};
echo "</tr>";
echo "</table>";
// se crea una funcion para colorear cada celda dependiendo de la temperatura
function color($temperatura){
if ($temperatura>=10 & $temperatura<15){
    return 'FF8C00';
};
if ($temperatura>=15 & $temperatura<20){
    return 'FFA500';
}
if ($temperatura>=20 & $temperatura<25){
    return 'FFCC66';
}
if ($temperatura>=25 & $temperatura<30){
    return 'FF6347';
}
if ($temperatura>=30){
    return 'FF4040';
}
};

// se busca y se muestra la máxima temperatura
$maximo = max($temperaturas);
$maxim = max($maximo);
echo "<br><br>";
echo "La temperatura máxima es: ".$maxim;
// se busca y se muestra la mínima temperatura
$minimo = min($temperaturas);
$minim = min($minimo);
echo "<br><br>";
echo "La temperatura mínima es: ".$minim;

// se vincula el archivo 'pie.php'
include('pie.php');
?>