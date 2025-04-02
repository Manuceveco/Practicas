<!DOCTYPE html>
<html>

<head>
    <title>PHP Ejercicios</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: rgb(204, 204, 204);
        }

        .ejercicio {
            background-color: white;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 8px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        }

        table {
            border-collapse: collapse;
            margin: 15px 0;
        }

        td {
            padding: 8px;
            text-align: center;
            background-color: #fff;
        }
    </style>
</head>

<body>
    <div class="ejercicio">
        <?php
        //Ejercicio1
        echo "--Primer ejercicio, Hola mundo--" . "<br>";
        echo "<br>";
        $inicio = "Hola";
        $fin = "Mundillo";
        $todo = $inicio . $fin;
        echo $inicio . "<br>";
        echo $fin . "<br>";
        echo $todo . "<br>";
        echo "<br>";
        echo "<br>";
        ?>
    </div>
    <div class="ejercicio">
        <?php
        //Ejercicio2
        echo "--Segundo ejercicio, Sumar dos numeros--";
        echo "<br>";
        echo "<br>";
        $n1 = 1;
        $n2 = 2;
        $suma = $n1 + $n2;
        echo "Los numeros que se van a sumar son:" . " $n1+$n2" . "<br>";;
        echo "Y el resultado es: " . $suma . "<br>";
        echo "<br>";
        echo "<br>";

        ?>
    </div>

    <div class="ejercicio">
        <?php
        //Ejercicio3
        echo "--Ejercicio 3 Tabla--";
        echo "<br>";
        echo "<br>";
        echo "<table border=1>";
        $n = 1;
        for ($n1 = 1; $n1 <= 10; $n1++) {
            echo "<tr>";
            for ($n2 = 1; $n2 <= 10; $n2++) {
                echo "<td>", $n, "</td>";
                $n = $n + 1;
            }
            echo "</tr>";
        }
        echo "</table>";
        ?>

    </div>
    <div class="ejercicio">
        <?php
        //Ejercicio4
        echo "--Ejercicio 4--";
        echo "<br>";
        echo "<br>";
        
    

        ?>
    </div>
    <div class="ejercicio">
        <?php
        //Ejercicio5
        echo "--Ejercicio 5--";
        ?>
        </div>
</body>

</html>