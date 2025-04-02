<?php

//Ejercicio1
echo "--Primer ejercicio--". "<br>";
$mi_array = array(1, 2 , 3, 4 ,5, 6, 7 , 8, 9, 10);
for ($i = 0; $i < count($mi_array); $i++) {
    echo $mi_array[$i];
}
echo "<br>";
echo "<br>";
echo "<br>";
echo  "el valor mas grande de mi array es:".max($mi_array)."<br>";
echo "<br>";
echo  "el valor mas pequeño de mi array es:".min($mi_array)."<br>";
echo "<br>";

if (in_array(5, $mi_array)) {
    echo "El valor 5 está presente en el array."; 
}else {
    echo "El valor 5 no está presente en el array.";
}
echo "<br>"; echo "<br>";
    echo "<br>";
    echo "--Segundo Ejercicio--". "<br>";
    //crear un array y llenarlo con 50 numeros aleatorios etre el 1 y el 100
    $mi_array2 = array();
    for ($i = 0; $i < 50; $i++) {
        $mi_array2[] = rand(1, 100);
    }
    echo "<br>";
    foreach ($mi_array2 as $value) {
        echo $value . ", ";
    }
    echo "<br>";
    echo "<br>";
    //ordenar el array de menor a mayor
    sort($mi_array2, SORT_NUMERIC); 
    foreach ($mi_array2 as $value) {
        echo $value . ", ";
    }
    echo "<br>";
    echo "<br>";
    //añadir el valor 101 al final del array
    array_push($mi_array2,101);
    //añadir el valor 102 en posicion especifica
    array_splice($mi_array,2,0,101);
    foreach ($mi_array as $value) {
        echo $value . ", ";
    }
    echo "<br>";
    echo "<br>" ;

    $arraybidimensional = array ('juan' => 9, 'ana' => 7, 'pedro' => 6, 'maria' => 9);
    foreach ($arraybidimensional as $key => $value) {
        echo $key. " => ". $value. "<br>";
    }
?>