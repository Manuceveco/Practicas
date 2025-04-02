<html>

<body class="container">

<header>
    <h1 class="text-center ">Login</h1>
</header>
    <?php
    if (isset($_REQUEST['enviar'])) {
        $string_con = "host=172.26.0.20 port=5432 dbname=ceveco_pruebas user=web password=web options='--client_encoding=UTF8'";
        $conexion = pg_connect($string_con);
        if ($conexion) {
            echo "conexion con la base de datos correcta <br>";
        } else {
            echo "no conectado<br>";
        }
        $id = $_POST["id"];
        $clave = $_POST["clave"];
        $select = "SELECT * FROM veri.gestores WHERE id_gestor = '$id'";
        $query = pg_query($conexion, $select);
        if (!$query) {
            echo "no se pudo realizar la consulta";
        } else {
            $num = pg_num_rows($query);
            if ($num > 0) {
                $row = pg_fetch_array($query);
                if ($clave == $row['clave']) {
                    echo "Bienvenido:". $row['nombre']. "<br>";
                } else {
                    echo "Contraseña incorrecta para el usuario:". $row['id_gestor'] . "<br>";
                }
            } else {

                echo "Usuario no encontrado";
            }
        }
    }

    ?>

    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <form action="practicaLogin.php" method="POST" class="mt-6">
        <div class="form-floating mb-3">
            <input class="form-control mt-6" id="floatingInput" placeholder="usuario" name="id">
            <label for="floatingInput">usuario</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Contraseña" name="clave">
            <label for="floatingPassword">Contraseña</label>
            
        </div>
        <div>
        <input type="submit" value="enviar" class="btn btn-primary mt-4" name="enviar">
        </div>
    </form>

    </div>
</body>

</html>