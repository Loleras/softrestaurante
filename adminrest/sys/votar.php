<?php
	include_once "../conexao.php";
	if(isset($_POST['votar'])){
		$mozoid = (int)$_POST['mozo'];
		$punto = (int)$_POST['punto'];

		$tomamozo = $pdo->prepare("SELECT votos, puntos FROM `mozos` WHERE `id_mozo` = ?");
		$tomamozo->execute(array($artigoId));
		while($row = $tomamozo->fetchObject()){
			$puntosUpd = ($row->puntos+$punto);
			$votosUpd = ($row->votos+1);

			$actualizamozo = $pdo->prepare("UPDATE `mozos` SET `votos` = ?, `puntos` = ? WHERE `id_mozo` = ?");
			if($actualizamozo->execute(array($votosUpd, $puntosUpd, $mozoid))){
				$calculo = round(($puntosUpd/$votosUpd),1);
				die(json_encode(array('average' => $calculo, 'votos' => $votosUpd)));
			}
		}
	}
?>