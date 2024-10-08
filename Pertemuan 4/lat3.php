<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php
    echo "<br>Script di Head</br>";
    ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "Lat PHP"; ?></title>
</head>
<body>
    <?php
        $namaDepan = "Rexzy";
        $namaBelakang = "Febriano Chasan";

        $namaLengkap = $namaDepan . " " . $namaBelakang;
        echo "Everyone calls me " . $namaDepan;
        echo "<br> My name is  $namaLengkap";

        $tglmasuk = 2023;
        $tglMasuk = 2024;
        echo "<br> My first semester starts at $tglmasuk";
        echo "<br> My first semester starts at " . $tglMasuk;
    ?>
    
</body>
</html>