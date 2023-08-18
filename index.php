<?php 
require_once 'db_modul.php';

$orang = getData("SELECT * FROM person");
$hubungan = getData("SELECT * FROM relation");
var_dump($orang);
echo "------------------------------------------";
var_dump($hubungan);
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
                <td>bapakau</td>
                <td>ibukau</td>
            </tr>
            <tr>
                <th>Nama :</th>
                <td style="border: 1px solid black;">Kau</td>
            </tr>
            <tr>
                <th>Anak :</th>
                <td>Anakau Laki</td>
                <td>Anakau Binik</td>
            </tr>
        </table>
    </div>
    <div style="text-align: center;">
        <img src="altera_dance.gif" width="100px" height="100px">
        <h3>Under development</h3>
    </div>

</body>
</html>