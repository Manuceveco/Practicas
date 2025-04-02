<?php
if(isset($_REQUEST["enviar"]))
{
    $nombre = $_POST["nombre"];
    $edad = $_POST["edad"];
    $precio = $_POST["precio"];
    echo "Nombre: $nombre <br>";
    if ($precio > 100) 
    {
       $precio = $precio * 0.95;
       if ($precio > 150) {
        $precio = $precio * 0.9; 
       } 
       if ($precio>200) {
        $precio = $precio * 0.8;          
       }
    }
    echo "Hola " . $nombre . " tu edad es: " . $edad . " Bienvenido" . "<br>";
    echo "el precio final es: " . $precio;

}

?>
<form action="condicionales.php" method="POST">
    <label for="">Ingrese nombre</label>
    <input type="text" name="nombre">
    <label for="">Ingrese la edad</label>
    <input type="text" name="edad">
    <label for="">Ingrese el precio</label>
    <input type="text" name="precio">
    <input type="submit" value="enviar" name="enviar">
</form>


