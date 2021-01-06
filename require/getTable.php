<?php
require( "../connect.php" );
$month = $_GET["month"];
$year = $_GET["year"];
$sql = mysqli_query( $con, "SELECT * FROM fahrten WHERE year(datum) = '$year' AND month(datum) = '$month'" );
?>
<table class="table table-hover table-responsive">
    <thead>
        <tr>
            <th scrope="col">Datum</th>
            <th scrope="col">Kunde</th>
            <th scrope="col">Startort</th>
            <th scrope="col">Zielort</th>
            <th scrope="col"></th>
        </tr>
    </thead>
    <tbody>
        <?php
while( $data = mysqli_fetch_assoc( $sql ) ) {
    $id = $data["id_fahrt"];
    $kunde = $data["kunde"];
    echo "<a href='index.php'>";
    if($data["status"] == 0){
        echo "<tr class='table-danger'>";
    }elseif($data["status"] == 1){
        echo "<tr class='table-success'>";
    }
    ?>
            <td><?php echo $data['datum']; ?></td>
            <td><?php echo $data['kunde']; ?></td>
            <td><?php echo $data['startort']; ?></td>
            <td><?php echo $data['zielort']; ?></td>
            <td><button onclick="preview(<?php echo $id; ?>)" type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#preview">Info</button></td>
        <?php
        echo "</tr></a>";
        
}
?>