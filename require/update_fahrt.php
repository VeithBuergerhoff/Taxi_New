<?php
if(isset($_GET["col"], $_GET["value"], $_GET["id"])){
        $col = $_GET["col"];
        $value = $_GET["value"];
        $id = $_GET["id"];
        
        require("../connect.php");
        $sql = mysqli_query($con, "UPDATE fahrten SET $col = '$value' WHERE id_fahrt = '$id'");
        if(isset($_GET["month"])){
            echo "FICKEN";
        }
}
echo "HALLO";
?>