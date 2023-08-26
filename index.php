<?php 
require_once 'db_modul.php';

$center = getData("SELECT * FROM person WHERE id = 1")[0];
$hubungan = getData("SELECT id_2, hubungan FROM relation WHERE id_1 = 1");
$id_list = array_column($hubungan, 'id_2');
// $keluarga = getData("SELECT id, nama FROM person", array(2,3,4));
$keluarga = getData("SELECT id, nama FROM person", $id_list);
// var_dump($hubungan);
// echo "------------------------------------------";
// var_dump($id_list);
// echo "------------------------------------------";
// var_dump($keluarga);
// echo "------------------------------------------";
// echo $keluarga[array_search("8", $id_list)]["nama"];

// $angka = array(1,2,3,4,5,6,7);
// $coba = [
//     "genap" => [],
//     "ganjil" => [],
// ];
// foreach ($angka as $row) {
//     if (($row % 2) == 0) {
//         array_push($coba["genap"], $row);
//     } else {
//         array_push($coba["ganjil"], $row);
//     }
// }
// var_dump($coba);
// var_dump(array_search(4, $id_list));
require 'layout/header.php';
require 'layout/navbar.php';
?>


    <div class="container">
        <table cellspacing="0" cellpadding="5">
            <tr>
                <th>Orang tua :</th>
                <?php foreach($hubungan as $ortu) : ?>
                <?= ($ortu["hubungan"] == "3") ? "<td><a href=personal.php/".$keluarga[array_search($ortu["id_2"], $id_list)]['id'].">".$keluarga[array_search($ortu["id_2"], $id_list)]["nama"]."</a></td>" : "" ?>
                <?php endforeach; ?>
            </tr>
            <tr>
                <th>---> </th>
                <td style="border: 1px solid black;"><?= $center["nama"] ?></td>
                <?php foreach($hubungan as $bini) : ?>
                <?= ($bini["hubungan"] == "0") ? "<td><a href=personal.php/".$keluarga[array_search($bini["id_2"], $id_list)]['id'].">".$keluarga[array_search($bini["id_2"], $id_list)]["nama"]."</a></td>" : "" ?>
                <?php endforeach; ?>
            </tr>
            <tr>
                <th>Anak :</th>
                <?php foreach($hubungan as $anak) : ?>
                <?= ($anak["hubungan"] == "1") ? "<td><a href=personal.php/".$keluarga[array_search($anak["id_2"], $id_list)]['id'].">".$keluarga[array_search($anak["id_2"], $id_list)]["nama"]."</a></td>" : "" ?>
                <?php endforeach; ?>
            </tr>
        </table>
    </div>
    <div style="text-align: center;">
        <img src="altera_dance.gif" width="100px" height="100px">
        <h3>Under development</h3>
    </div>
<?php require 'layout/footer.php'; ?>