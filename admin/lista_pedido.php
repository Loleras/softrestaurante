<!DOCTYPE html>
<html>
<head>
</head>
<body>

    <?php
    $q = intval($_GET['q']);
    $p = strval($_GET['p']);

    $con = mysqli_connect('localhost','root','','dbrestaurante');
    $mysqli = new mysqli('localhost', 'root', '', 'dbrestaurante');
    if (!$con) {
        die('Could not connect: ' . mysqli_error($con));
    }
    
    $sql2="SELECT user FROM usuarios WHERE idusuarios = '".$q."'";
    $resultado = mysqli_query($con,$sql2);

    while ($productito = $resultado->fetch_assoc()){

        $resp = $productito['user'];
    }

    mysqli_select_db($con,"ajax_demo");
    $sql="SELECT * FROM pedidos WHERE id_usuario = '".$q."' AND fecha_pedido = '".$p."'";
    $result = mysqli_query($con,$sql); 
    $pagar=0;

    echo "<h2>Usuario: ".$resp."</h2><h4 float='right'>Fecha: ".$p."</h4><br>";
    echo "<table class='table' style='color:#000; background-color:#FF9800;text-align:center;'>";
    echo "<tr><th style='text-align: center'>Id Pedido</th><th style='text-align: center'>Plato</th><th style='text-align: center'>Descripción</th><th style='text-align: center'>Precio</th><th style='text-align: center'>Cantidad</th><th style='text-align: center'>Importe</th></tr>";
    while ($producto = $result->fetch_assoc()){
        
        $sql3 = "SELECT * FROM menu WHERE idplato = '".$producto['id_plato']."'";
        if(!$resultado3 = $mysqli->query($sql3)){
            die("Error en consulta");
        }
        
        while($producto1 = $resultado3->fetch_assoc()){

            echo "<tr><td>";
            echo $producto['id_pedido'] . " ";
            echo "</td>";
            echo "<td>";
            echo $producto1['nombreplato'] . " ";
            echo "</td>";
            echo "<td>";
            echo $producto1['descripcion'] . " ";
            echo "</td>";
            echo "<td>";
            echo "$ ".$producto1['precio'] . " ";
            echo "</td>";
            echo "<td>";
            echo $producto['cantidad'] . " ";
            echo "</td>";
            echo "<td>";
            echo "$ ".$producto['cantidad']*$producto1['precio'] . " ";
            echo "</td></tr>";
            $pagar = $pagar + ($producto1['precio']*$producto['cantidad']);
    }
    }
    echo "</table><br>";
    echo "<h2 style='text-align: center' >TOTAL: $ ".$pagar.".00</h2>";
    mysqli_close($con);
    ?>
</body>
</html>