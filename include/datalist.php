<?php
require( 'connect.php' );
$datalist_kunde = mysqli_query( $con, "SELECT DISTINCT kunde FROM fahrten" );
echo "<datalist id='kunde'>";
while( $data_kunde = mysqli_fetch_assoc( $datalist_kunde ) ) {
    $kunde = $data_kunde["kunde"];
    echo "<option value='$kunde'>";
}
;
echo "</datalist>";
$datalist_startort = mysqli_query( $con, "SELECT DISTINCT startort FROM fahrten" );
echo "<datalist id='startort'>";
while( $data_start = mysqli_fetch_assoc( $datalist_startort ) ) {
    $start = $data_start["startort"];
    echo "<option value='$start'>";
}
;
echo "</datalist>";
$datalist_zielort = mysqli_query( $con, "SELECT DISTINCT zielort FROM fahrten" );
echo "<datalist id='zielort'>";
while( $data_ziel = mysqli_fetch_assoc( $datalist_zielort ) ) {
    $ziel = $data_ziel["zielort"];
    echo "<option value='$ziel'>";
}
;
echo "</datalist>";
?>