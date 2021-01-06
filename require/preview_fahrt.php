<?php
require("../connect.php");
$id = $_GET["id"];
$sql = mysqli_query($con, "SELECT id_fahrt, datum, kunde, startort, zielort, bemerkung, month(datum) AS month, year(datum) AS year FROM fahrten WHERE id_fahrt = $id");
while($data = mysqli_fetch_assoc($sql)){
    $id = $data["id_fahrt"];
    $datum = $data["datum"];
    $kunde = $data["kunde"];
    $startort = $data["startort"];
    $zielort = $data["zielort"];
    $bemerkung = $data["bemerkung"];
    $month = $data["month"];
    $year = $data["year"];
    
    $col = "kunde";

    ?>
    <input type="date" onchange="update(<?php echo 'datum, this.value, '.$id; ?>)" value="<?php echo $datum; ?>" class="form-control">
    <input type="text" onchange="update(<?php echo "this.value, $id, 'kunde', $year, $month"; ?>)" class="form-control" value="<?php echo $kunde; ?>">
    <input type="text" value="<?php echo $startort; ?>" class="form-control">
    <input type="text" value="<?php echo $zielort; ?>" class="form-control">
    <input type="text" value="<?php echo $bemerkung; ?>" class="form-control">
    <?php
}
?>