<?php
session_start();
/* require( 'class/fahrten.class.php' );
$FahrtenClass = new Fahrten();
*/
?>
<!doctype html>
<html lang="de">

<head>
    <title>Taxibetriebe - Notheisen</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Marcel Dittmann" />
    <meta name="keyword" content="Spiele-Guides, Tipps, Tricks" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Quicksand', sans-serif;
        }
    </style>
    <script src="js/taxi_termine.js"></script>
</head>

<body>
    <?php
    // Login - Prüfung
    if ( isset( $_GET["login"] ) ) {
        if ( $_POST["passwort"] == "5H1YH&S=Ns" ) {
            $_SESSION["user"] = $_POST["passwort"];
        }
    } elseif ( isset( $_GET["logout"] ) ) {
        if ( isset( $_SESSION["user"] ) ) {
            session_unset();
        }
    }

    if ( isset( $_SESSION["user"] ) ) {
        include( "include/nav.php" );
        if ( isset( $_GET["create"] ) ) {
            if (isset ( $_GET["submit"] ) ) {
                include( "include/create_submit.php" );
            }
            include( "include/datalist.php" );
            include( "include/create.php" );
        } elseif ( isset( $_GET["view"] ) ) {
            include( "include/view.php" );
        }
    } else {
        include( "include/login_form.php" );
    }
    ?>
    
    
    <script>
        function trigger() {
            var a = document.getElementById("kassenfahrt").checked;
            if (!a) {
                document.getElementById("befreit").style.display = 'none';
            } else {
                document.getElementById("befreit").style.display = 'block';
            }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>