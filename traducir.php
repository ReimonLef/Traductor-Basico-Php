<?php
$array = array(
'red' => 'rojo',
'green' => 'verde',
'blue' => 'azul',
'orange' => 'naranja',
'black' => 'negro',
'white' => 'blanco',
'yellow' => 'amarillo'
);

$array1 = array(
'rojo' => 'red',
'verde' => 'green',
'azul' => 'blue',
'naranja' => 'orange',
'negro' => 'black',
'blanco' => 'white',
'amarillo' => 'yellow'
);

if($_POST['cboi']=="1") {
    while ($nombre_fruta = current($array)) {
        if ($nombre_fruta == strtolower($_POST['txto'])) {
            echo key($array);
        }
        next($array);
    } 
}
else {
	while ($nombre_fruta = current($array1)) {
        if ($nombre_fruta == strtolower($_POST['txto'])) {
            echo key($array1);
        }
        next($array1);
    } 
}
?>
