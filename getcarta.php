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
    $sql="SELECT * FROM menu WHERE tipo_id = '".$q."'";
    $result = mysqli_query($con,$sql);

    echo "<div class='cartamenu'>";
    echo "<table class='table table-hover' style='color:silver; text-align:left; th:text-align:center'>";
    echo "<tr><th>Id</th><th>Nombre de Plato</th><th>Descripción</th><th>Precio</th></tr>";
    while ($producto = $result->fetch_assoc()){

        echo "<tr><td>";
        echo $producto['idplato'] . " ";
        echo "</td>";
        echo "<td>";
        echo $producto['nombreplato'] . " ";
        echo "</td>";
        echo "<td>";
        echo $producto['descripcion'] . " ";
        echo "</td>";
        echo "<td>";
        echo "$. ".$producto['precio'] . ".00 ";
        echo "</td>";
    }
    echo "</table>";
    echo "</div>";
    mysqli_close($con);
    ?>
</body>
</html>