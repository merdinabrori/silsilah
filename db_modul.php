<?php 
$hostname = "Localhost";
// connect DB
$konek = mysqli_connect($hostname, "root", "", "silsilah");

function getData($query){
    global $konek;

    $result = mysqli_query($konek, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
?>