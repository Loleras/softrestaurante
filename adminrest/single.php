<?php
    include_once "conexao.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset=UTF-8>
    <title>Voto</title>
    <link rel="stylesheet" href="../css/adminrest.css">
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="../js/avaliations.js"></script>

    <style>
        

.barra{

    width:150px; 
    height:30px; 
    background:#ebebeb; 
    position:relative;
}

.stars{

    position:absolute; 
    left:0; 
    top:0; 
    width:100%;
}

.star{

    float:left; 
    width:30px; 
    height:30px;
    text-align:center; 
    position:relative; 
    cursor:pointer;
}

.star.full{

    background:linear-gradient(to bottom, #fee24f, #f4bb2f)
}

.bg{

    float:left;
    height:30px; 
    width:30%; 
    background:linear-gradient(to bottom, #fee24f, #f4bb2f);
}

.starAbsolute{

    position:absolute; 
    top:0; 
    left:0;
    width:100%; 
    height:100%; 
    background:url(../img/starpng.png) top left no-repeat; 
    background-size:cover;
}
    </style>

</head>
<body>

    <?php
    $q = intval($_GET['q']);

    $tomamozo = $pdo->prepare("SELECT * FROM `mozos` WHERE id_mozo = ?");
    $tomamozo->execute(array($q));
    while($mozo = $tomamozo->fetchObject()){
        $calculo = ($mozo->puntos == 0) ? 0 : round(($mozo->puntos/$mozo->votos), 1);
    ?>

    <span class="ratingAverage" data-average="<?php echo $calculo;?>"></span>
    <span class="mozo" data-id="<?php echo $q;?>"></span>

    <div class="barra">
        <span class="bg"></span>
        <span class="stars">


    <?php
        
        for($i=1; $i<=5; $i++):
    
    ?>

    <span class="star" data-vote="<?php echo $i;?>">
        <span class="starAbsolute"></span>
    </span>
    <?php 
        endfor;
        echo '</span></div><p class="votos"><span>'.$mozo->votos.'</span> votos</p>';
        }
    ?>

</body>
</html>