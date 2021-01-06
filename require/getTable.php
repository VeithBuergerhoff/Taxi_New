<?php
require( "../connect.php" );
$month = $_GET["month"];
$year = $_GET["year"];
$sql = mysqli_query( $con, "SELECT * FROM fahrten WHERE year(datum) = '$year' AND month(datum) = '$month'" );
?>
<div class="modal fade" id="preview" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" id="modal_fahrt_preview">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Schließen</button>
      </div>
    </div>
  </div>
</div>

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