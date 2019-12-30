
<?php
//include("arrays.php");

/* $datos = array(
    1 =>  array('nombres' => array('nombre' => 'silvana',
                                   'apellido' => 'romero'),
                'telefono' => 3704333333),
    2 =>  array('nombres' => array('nombre' => 'romina',
                                   'apellido' => 'ayala'),
                'telefono' => 3704555555),
    3 =>  array('nombres' => array('nombre' => 'chincha',
                                   'apellido' => 'elenca'),
                'telefono' => 3704777777)
);

$filtro_datos = array_filter( $datos['nombres']['nombre'], function($e) {
    return $e = 'silvana';
});
print_r($filtro_datos); */

if (isset($_POST['filtro'])) {
    print_r ('se filtrara buaqueda');
}

?>

