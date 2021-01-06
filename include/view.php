<br><br>
<div class="container">
    <?php
    
    require("connect.php");
    
    $year_list = mysqli_query($con, "SELECT DISTINCT year(datum) AS year FROM fahrten");
    
    if(isset($_GET["view"])){
        if(!isset($_GET["month"])){
            echo "<div class='container'>";
            echo "<div class='row'>";
            echo "<div class='col'>";
            while($data = mysqli_fetch_assoc($year_list)){
                $year = $data["year"];
            echo "<a href='index.php?view&year=$year'><button class='btn btn-outline-success form-control'>$year</button></a><br><br>";
            }
            echo "</div>";
            if(isset($_GET["year"])){
                $year = $_GET["year"];
                $month_list = mysqli_query($con, "SELECT DISTINCT month(datum) AS month FROM fahrten WHERE year(datum) = '$year'");
                $monat = array("1"=>"Januar", "2"=>"Februar", "3"=>"März", "4"=>"April", "5"=>"Mai", "6"=>"Juni", "7"=>"Juli", "8"=>"August", "9"=>"September", "10"=>"Oktober", "11"=>"November", "12"=>"Dezember");
                echo "<div class='col'>";
                while($data = mysqli_fetch_assoc($month_list)){
                    $month = $data["month"];
                    echo "<a href='index.php?view&year=$year&month=$month'><button class='btn btn-outline-success form-control'>$monat[$month]</button></a><br><br>";
                }
                echo "</div>";
            }
            echo "</div>";
            echo "</div>";
    }elseif(isset($_GET["year"], $_GET["month"])){
            $year = $_GET["year"];
            $month = $_GET["month"];
            echo "<a href='index.php?view&year=".$_GET['year']."'><button class='btn btn-outline-success'>Zurück zur Monatswahl ".$_GET["year"]."</button></a>"; ?>
            <script>
                window.addEventListener('load', fahrten("<?php echo $year; ?>", "<?php echo $month; ?>"));
            </script>
            <div>

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
              <div id="table_view"></div>
            </div>
            <?php
        }
    }
    
    ?>
</div>