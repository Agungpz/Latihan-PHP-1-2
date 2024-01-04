<?php

/// HTML DIDALAM PHP

$htmldidalamphp = "HTML di dalam PHP";
$BiodataDiri ="=== Biodata Diri ===";
$namalengkap ="Nama Lengkap : Agung Prakoso";
$tempatTanggal = "Tempat, Tanggal Lahir : Jakarta 7 Maret 2007";
$NomorWa = "Nomor Whatsapp : 083893164726";
$DeskDiri = "Deskripsi Diri : Programmer Internasional";




echo "<h1>$htmldidalamphp</h1>";
echo "<h1>$BiodataDiri</h1>";
echo "<hr />";


echo "<div>$namalengkap</div>";
echo "<div>$tempatTanggal</div>";
echo "<div>$NomorWa</div>";
echo "<div>$DeskDiri</div>";
echo "<hr />";
echo "<br/>"

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php dalam html</title>
</head>
<body>
    <h1><?= $htmldidalamphp ?></h1>
    <h1><?= $BiodataDiri ?></h1>
    <hr/>

    <div><?= $namalengkap ?></div>
    <div><?= $tempatTanggal ?></div>
    <div><?= $NomorWa ?></div>
    <div><?= $DeskDiri ?></div>
</body>
</html>

