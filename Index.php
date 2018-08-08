<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Kapper Loyalty</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="./manifest.json">

    <!-- Bootstrap -->
    <link href="./bootstrap-4.1.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="./bootstrap-4.1.1/js/bootstrap.min.js"></script>

    <!-- Font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
        crossorigin="anonymous">

    <link href="./Stylesheet/Style.css" rel="stylesheet">
</head>

<body class="bg-light">
    <!-- region navbar-->
    <?php include './Partials/Short-Navbar.php' ?>
    <!-- endregion navbar-->

    <div class="container">
        <div id="jbt-client" class="jumbotron">
            <img id="client-logo" class="img-fluid rounded float-left mr-2" src="./Images/client-barber-shop.png" />
            <h1>Klant</h1>
            <p class="lead">
                Als je kapper gebruik maakt van deze site, maak je snel een account om kortingen te krijgen !
            </p>
            <hr class="my-4">
            <p>Geïntreseerd ? Maak nu een account !</p>
            <a class="btn btn-primary btn-lg" href="#" role="button">Sign up now !</a>
        </div>

        <div id="jbt-kapper" class="jumbotron">
            <span id="kapper-logo-span" class="fas fa-cut img-fluid rounded float-left mr-2"></span>
            <h1>Kapper</h1>
            <p class="lead">
                Ben je kapper en will je snel een loayalty stamp systeem maken voor je klanten ?
            </p>
            <hr class="my-4">
            <p>Maak dan nu snel een account en registreer uw kapsalon !</p>
            <a class="btn btn-primary btn-lg" href="#" role="button">Sign up now !</a>
        </div>
    </div>
</body>

</html>