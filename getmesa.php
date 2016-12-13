<!DOCTYPE html>
<html>
<head>
</head>
<body>

    <?php
    $q = intval($_GET['q']);

    $con = mysqli_connect('localhost','root','','dbrestaurante');
    if (!$con) {
        die('Could not connect: ' . mysqli_error($con));
    }

    $estadomesa = 0;
    mysqli_select_db($con,"ajax_demo");
    $sql="SELECT * FROM mesas WHERE local_id = '".$q."' AND estado_mesa = '$estadomesa'";
    $result = mysqli_query($con,$sql);

    echo "<select name='resmesa'>";
    echo "<tr><th>Id</th><th>Nombre de Plato</th><th>Descripción</th><th>Precio</th></tr>";
    while ($producto = $result->fetch_assoc()){

        echo '<option value="'.$producto[idmesa].'">'.$producto[nombre_mesa].'</option>';
    }
    echo "</select>";
    mysqli_close($con);
    ?>
</body>
</html>