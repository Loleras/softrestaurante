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

    mysqli_select_db($con,"ajax_demo");
    $sql="SELECT * FROM mesas WHERE local_id = '".$q."'";
    $result = mysqli_query($con,$sql);

    echo "<table class='table' style='color:#000; text-align:left; th:text-align:center'>";
    echo "<tr><th>Id</th><th>Nombre de Mesa</th></tr>";
    while ($producto = $result->fetch_assoc()){

        echo "<tr><td>";
        echo $producto['idmesa'] . " ";
        echo "</td>";
        echo "<td>";
        echo $producto['nombre_mesa'] . " ";
        echo "</td></tr>";
    }
    echo "</table>";
    mysqli_close($con);
    ?>
</body>
</html>