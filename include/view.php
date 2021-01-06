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
            <div id="table_view"></div>
            <?php
        }
    }
    
    ?>
</div>