<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>TiketWar</title>
</head>
<body>
    <?php
        $namaKonser = "Coldplay - Music of the Spheres"; 
        $hargaTiket = 1500000; 
        $sisaTiket = 25; 
        $sudahSoldOut = false;
        $kategoriTiket = "Festival";
    echo "Welcome To TiketWar Jaja - war tiket konser paling trusted se-Babarsari";
    ?>

    <p>Konser: <?php echo $namaKonser; ?></p> 
    <p>Harga: Rp<?php echo $hargaTiket; ?></p> 
    <p>Sisa tiket: <?php echo $sisaTiket; ?></p> 
    <p>Kategori: <?php echo $kategoriTiket; ?></p>
</body>
</html>