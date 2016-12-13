<?php
	include('conexion.php');
	
	$ano = $_POST['ano'];
	
	$enero = mysql_fetch_array(mysql_query("SELECT SUM(precio_plato) AS r FROM pedidos WHERE MONTH(fecha_pedido)=1 AND YEAR(fecha_pedido)='$ano'"));
	$febrero = mysql_fetch_array(mysql_query("SELECT SUM(precio_plato) AS r FROM pedidos WHERE MONTH(fecha_pedido)=2 AND YEAR(fecha_pedido)='$ano'"));
	$marzo = mysql_fetch_array(mysql_query("SELECT SUM(precio_plato) AS r FROM pedidos WHERE MONTH(fecha_pedido)=3 AND YEAR(fecha_pedido)='$ano'"));
	$abril = mysql_fetch_array(mysql_query("SELECT SUM(precio_plato) AS r FROM pedidos WHERE MONTH(fecha_pedido)=4 AND YEAR(fecha_pedido)='$ano'"));
	$mayo = mysql_fetch_array(mysql_query("SELECT SUM(precio_plato) AS r FROM pedidos WHERE MONTH(fecha_pedido)=5 AND YEAR(fecha_pedido)='$ano'"));
	$junio = mysql_fetch_array(mysql_query("SELECT SUM(precio_plato) AS r FROM pedidos WHERE MONTH(fecha_pedido)=6 AND YEAR(fecha_pedido)='$ano'"));
	$julio = mysql_fetch_array(mysql_query("SELECT SUM(precio_plato) AS r FROM pedidos WHERE MONTH(fecha_pedido)=7 AND YEAR(fecha_pedido)='$ano'"));
	$agosto = mysql_fetch_array(mysql_query("SELECT SUM(precio_plato) AS r FROM pedidos WHERE MONTH(fecha_pedido)=8 AND YEAR(fecha_pedido)='$ano'"));
	$septiembre = mysql_fetch_array(mysql_query("SELECT SUM(precio_plato) AS r FROM pedidos WHERE MONTH(fecha_pedido)=9 AND YEAR(fecha_pedido)='$ano'"));
	$octubre = mysql_fetch_array(mysql_query("SELECT SUM(precio_plato) AS r FROM pedidos WHERE MONTH(fecha_pedido)=10 AND YEAR(fecha_pedido)='$ano'"));
	$noviembre = mysql_fetch_array(mysql_query("SELECT SUM(precio_plato) AS r FROM pedidos WHERE MONTH(fecha_pedido)=11 AND YEAR(fecha_pedido)='$ano'"));
	$diciembre = mysql_fetch_array(mysql_query("SELECT SUM(precio_plato) AS r FROM pedidos WHERE MONTH(fecha_pedido)=12 AND YEAR(fecha_pedido)='$ano'"));
	
	$data = array(0 => round($enero['r'],1),
				  1 => round($febrero['r'],1),
				  2 => round($marzo['r'],1),
				  3 => round($abril['r'],1),
				  4 => round($mayo['r'],1),
				  5 => round($junio['r'],1),
				  6 => round($julio['r'],1),
				  7 => round($agosto['r'],1),
				  8 => round($septiembre['r'],1),
				  9 => round($octubre['r'],1),
				  10 => round($noviembre['r'],1),
				  11 => round($diciembre['r'],1)
				  );			 
	echo json_encode($data);
?>