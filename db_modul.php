<?php 
$hostname = "Localhost";
// connect DB
$konek = mysqli_connect($hostname, "root", "", "silsilah");

function getData($query, $ids = null){
    global $konek;

    if ($ids !== null) {
        $result = mysqli_query($konek, $query . " WHERE id IN (" . implode(', ', $ids) . ")");
    } else {
        $result = mysqli_query($konek, $query);
    }
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function getKeluarga($id_center, $ids){
    global $konek;

    $relation = mysqli_query($konek, "SELECT id_2, hubungan FROM relation WHERE id_1 = $id_center");
    $result = [
        "ortu" => [],
        "pasangan" => [],
        "anak" => []
    ];
    while ($r_row = mysqli_fetch_assoc($relation)) {
        if ($r_row['hubungan'] == "3") {
            array_push($result["ortu"], $r_row);
        } elseif ($r_row['hubungan'] == "0") {
            array_push($result["pasangan"], $r_row);
        } else {
            array_push($result["anak"], $r_row);
        }
    }
}
?>