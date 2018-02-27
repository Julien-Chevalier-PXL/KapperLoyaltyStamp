<?php
/**
 * Created by PhpStorm.
 * User: MoBouzouf
 * Date: 22/11/2017
 * Time: 14:23
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Keuze verkeersborden</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="manifest" href="../manifest.json"/>
    <!-- Bootstrap -->
    <link href="../../../MI3/mi3-hybrid/Bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../../../MI3/mi3-hybrid/Bootstrap/js/bootstrap.min.js"></script>

    <link href="../Stylesheet/Style.css" rel="stylesheet">
</head>
<body>
<!-- region navbar-->
<?php include '../PartialViews/navbar.html' ?>
<script>
    $(document).ready(function () {
        $("#Bordenli").addClass("active");
    });
</script>
<!-- endregion navbar-->
<div class="container container well">
    <h1>Dashboard</h1>
    <h3>Kies je soort vragen hier </h3>
    <div id="keuze" class="text-center">
        <a type="button" class="btn col-md-3 col-sm-12 col-xs-12" href="StilstaanParkeren.php" >
            <span class="text-center">Quick scan</span>
            <img src="../Afbeeldingen/Borden/Parkerentoegelaten.png" alt="Quick Scan" class="img-rounded img-responsive img-borden"></a>
        <a type="button" class="btn col-md-3 col-sm-12 col-xs-12" href="VoorangsBordenQuiz.php" >
            <span class="text-center">My offers</span>
            <img src="../Afbeeldingen/Borden/Voorrangverlenen.png" alt="My Offers" class="img-rounded img-responsive img-borden"></a>
        <a type="button" class="btn col-md-3 col-sm-12 col-xs-12" href="AanwijzingsBordenQuiz.php" >
            <span class="text-center">Arround me </span>
            <img src="../Afbeeldingen/Borden/Rechtsoflinksvoorbijrijdentoegelaten.png" alt="Arround me" class="img-rounded img-responsive img-borden"></a>
        <a type="button" class="btn col-md-3 col-sm-12 col-xs-12" href="Gebodsborden.php" >
            <span class="text-center">My rewards</span>
            <img src="../Afbeeldingen/Borden/Verplichtrondgaandverkeer.png" alt="My Rewards" class="img-rounded img-responsive img-borden"></a>
    </div>
</div>



<script>
    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/nl_NL/sdk.js#xfbml=1&version=v2.9&appId=1741589282521605";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<script type="text/javascript" src="../Javascript/jquery.js"></script>
<script>
    // Open and close sidebar
    function openNav() {
        document.getElementById("mySidebar").style.width = "60%";
        document.getElementById("mySidebar").style.display = "block";
    }

    function closeNav() {
        document.getElementById("mySidebar").style.display = "none";
    }
</script>
</body>
</html>