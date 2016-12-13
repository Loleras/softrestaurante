<!DOCTYPE html>
<html>
<head>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/js/bootstrap-select.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/css/bootstrap-select.min.css">
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

    echo "<select name='mesa'>";
    echo "<tr><th>Id</th><th>Nombre de Plato</th><th>Descripción</th><th>Precio</th></tr>";
    while ($producto = $result->fetch_assoc()){

        echo '<option value="'.$producto[idmesa].'">'.$producto[nombre_mesa].'</option>';
    }
    echo "</select>";
    mysqli_close($con);
    ?>
</body>
</html>