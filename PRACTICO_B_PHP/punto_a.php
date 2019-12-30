<?php  include("header.php"); //contiene la primera parte del html ?>

<?php 
include("arrays.php");
// probamos si recorre el array 
/* echo "<br>";
foreach ($alumno_asistencia_materia as $key => $value) {
    echo $value['nombre'].",<br> ";
} */ ?>
<div class="text-center">
 <h4>Planilla de asistencias</h4>
</div>
<br>
<table border='2px' align='center'>
    <thead class="table-info">
            <tr>
                <th rowspan='2'> ID </th>
                <th rowspan='2'> Apellido y Nombre </th>
                <th colspan='8'> Fechas </th>
                <th rowspan='2'> Condición </th>
            </tr>
            <tr>
                <th> 30/09 </th>
                <th> 06/10 </th>
                <th> 07/10 </th>
                <th> 13/10 </th>
                <th> 14/10 </th>
                <th> 20/10 </th>
                <th> 21/10 </th>
                <th> 27/10 </th>
            </tr>
    </thead>
    <tbody class="table table-bordered">
<?php 
foreach ($alumno_asistencia_materia as $id => $alumno) {
    echo "<tr>";
    echo "<td> $id </td>";
    echo "<td>".$alumno['nombre']."</td>";
        foreach ($alumno['fechas'] as $fecha => $asistencia) {
            echo "<td>".$asistencia."</td>";
        }
    echo "<td>".$alumno['condicion']."</td>";
    echo "</tr>";
} ?>
    </tbody>
</table>

<br>
<div class="text-center">
 <h5>Porcentaje de alumnos LIBRES: <?php print_r(round($porcentaje_libre, 1, PHP_ROUND_HALF_EVEN)); ?> %</h4>
 <h5>Porcentaje de alumnos REGULARES: <?php print_r(round($porcentaje_regular, 1, PHP_ROUND_HALF_EVEN)); ?> %</h4>
 <h5>Porcentaje de alumnos PROMOCIONALES: <?php print_r(round($porcentaje_promocional, 1, PHP_ROUND_HALF_EVEN)); ?> %</h4>
</div>

<hr><br>
<div class="text-center">
 <h4>Buscar por fecha las asistencias</h4>
</div><br>
<?php
include("filtro.php");
?>
<div class="container" >
    <div class="row justify-content-center align-self-center">
        <div class="col-md-5"> 
            <div class="card-body">
                <form id="filtro" action="arrays.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="fecha" class="form-control" placeholder="ingresar fecha --/--" autofocus>
                    </div>
                    <input type="submit" class="btn btn-info btn-block" name="filtro" value="Filtrar asistencia">
                </form>
            </div>
        </div>
    </div>
</div>
<br>
<hr>

<div class="text-center">
 <h4>Información de los alumnos</h4>
</div>
<br>
<table class="table table-borderless">
    <thead>
        <tr>
            <th> ID </th>
            <th>DNI</th>
            <th>Estado</th>
            <th>Telefono</th>
        </tr>
    </thead>
    <tbody>
<?php 
foreach ($alumno_asistencia_materia as $id => $alumno) {
    echo "<tr>";
    echo "<td> $id </td>";
    echo "<td>".$alumno['dni']."</td>";
    echo "<td>".$alumno['estado']."</td>";
    echo "<td>".$alumno['telefono']."</td>";
    echo "</tr>";
} ?>
    </tbody>
</table>


<?php  include("footer.php"); //contiene la última parte del html ?>