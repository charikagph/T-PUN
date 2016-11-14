<!DOCTYPE html>

<?php
session_start();
if (!isset($_SESSION['id'])) {
    header("Location:adLog.php");
   }
?>


<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <title>T-pun Company (pvt) Ltd</title>

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Material Design Bootstrap -->
        <link href="css/mdb.min.css" rel="stylesheet">

        <!-- Your custom styles (optional) -->
        <link href="css/style.css" rel="stylesheet">

    </head>

    <body>
        <!--Navbar-->

        <?php include './imported/adNav.php' ?>

        <!--/.Navbar-->
<?php $name = $_SESSION['username'];
 echo "$name";
?>
        <!-- Start your project here-->

        <div style="height: 100vh">
            <div class="flex-center">
                <h1 class="animated fadeIn">Material Design for Bootstrap</h1>
            </div>
        </div>

        <!-- /Start your project here-->


        <!-- SCRIPTS -->

        <!-- JQuery -->
        <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>

        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="js/tether.min.js"></script>

        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>

        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="js/mdb.min.js"></script>

    </body>

</html>