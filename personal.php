<?php 
require_once 'db_modul.php';

$orang = getData("SELECT * FROM person");
$hubungan = getData("SELECT * FROM relation");
// ortu = 3; pasangan = 0; anak = 1
$ortu = getData("SELECT * FROM relation WHERE hubungan = 3");
$bini = getData("SELECT * FROM relation WHERE hubungan = 0");
$anak = getData("SELECT * FROM relation WHERE hubungan = 1");
$id_list = array_column($orang, 'id');

var_dump($orang);
echo "------------------------------------------";
var_dump($ortu);
echo "------------------------------------------";
var_dump(array_search(8, $id_list));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        th {text-align: left;}
        td {text-align: center;}
    </style>
</head>
<body>
    <div>
        <table cellspacing="0" cellpadding="5">
            <tr>
                <th>Orang tua :</th>
                <?php foreach($ortu as $o) : ?>
                <td><?= $orang[array_search($o["id_2"], $id_list)]["nama"] ?></td>
                <?php endforeach; ?>
            </tr>
            <tr>
                <th>---> </th>
                <td style="border: 1px solid black;"><?= $orang[0]["nama"] ?></td>
                <?php foreach($bini as $b) : ?>
                <td><a href=""><?= $orang[array_search($b["id_2"], $id_list)]["nama"] ?></a></td>
                <?php endforeach; ?>
            </tr>
            <tr>
                <th>Anak :</th>
                <?php foreach($anak as $a) : ?>
                <td><?= $orang[array_search($a["id_2"], $id_list)]["nama"] ?></td>
                <?php endforeach; ?>
            </tr>
        </table>
    </div>
    <div style="text-align: center;">
        <img src="altera_dance.gif" width="100px" height="100px">
        <h3>Under development</h3>
    </div>

</body>
</html>