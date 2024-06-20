<?php 
    require 'persegi.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Persegi</title>
</head>
<body>

    <?php
        $sisi = $_POST["sisi"];
        
        $persegi = new persegi(); 

        $persegi->sisi = $sisi;
        $luas = $persegi->luas();
        $keliling = $persegi->keliling();
    ?>
    <h3>Luas persegi dengan sisi <?= $sisi ?> cm adalah <?= $luas ?></h3>
    <h3>Keliling persegi dengan sisi <?= $sisi ?> cm adalah <?= $keliling ?></h3>

</body>
</html>