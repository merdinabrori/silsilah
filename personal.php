<?php 
require_once 'db_modul.php';
// var_dump($_SERVER['REQUEST_URI']);
$id_center = explode('/',$_SERVER['REQUEST_URI'])[3];
// echo $id_center;

$orang = getData("SELECT * FROM person WHERE id = $id_center")[0];
$hubungan = getData("SELECT id_2, hubungan FROM relation WHERE id_1 = $id_center");
if (count($hubungan) !== 0) {
    $id_list = array_column($hubungan, 'id_2');
    $keluarga = getData("SELECT id, nama FROM person", $id_list);
}

// var_dump($orang);
// echo "------------------------------------------";
// var_dump($hubungan);
require 'layout/header.php';
require 'layout/navbar.php';
?>
<div class="container">
    <h3>Nama : <?= $orang['nama'] ?></h3>
</div>
<?php if(count($hubungan) !== 0) : ?>
    <div class="container">
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
<?php endif; ?>
<div style="text-align: center;">
    <img src="../altera_dance.gif" class="img-thumbnail rounded-circle" width="100px" height="100px">
    <h3>Under development</h3>
</div>
<?php require 'layout/footer.php'; ?>