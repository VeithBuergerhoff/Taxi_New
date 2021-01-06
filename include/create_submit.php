<?php
require ( "connect.php" );

$datum = $_POST["datum"];
$kunde = $_POST["kunde"];
$startort = $_POST["startort"];
$zielort = $_POST["zielort"];
$bemerkung = $_POST["bemerkung"];
$richtung = $_POST["richtung"];
$rechnung = $_POST["rechnung"];
$befreit = $_POST["befreiung"];

if($rechnung != 0){
    $befreit = 0;
}

$sql = mysqli_query($con, "INSERT INTO fahrten(kunde, startort, zielort, datum, bemerkung, richtung, rechnung, befreiung)VALUES('$kunde', '$startort', '$zielort', '$datum','$bemerkung', '$richtung', '$rechnung', '$befreit')");

if($sql == true){
    echo "<br><div class='container'>";
    echo "<div class='alert alert-success'>Fahrt wurde erfolgreich eingetragen.</div>";
    echo "</div>";
}

?>