<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Overview</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="../bootstrap-4.1.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../bootstrap-4.1.1/js/bootstrap.min.js"></script>

    <!-- Font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
        crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" media="screen" href="../Stylesheet/Style.css" />

    <script type="text/JavaScript" src="../Scripts/StampOverviewScripts.js"></script>
</head>

<body>
    <!-- region navbar-->
    <?php include '../Partials/Client-Navbar.php' ?>
    <!-- endregion navbar-->

    <div class="container">
        <div class="card mt-5">
            <h2 class="card-header">Stamp card</h2>
            <div class="card-body" id="card-stampCard">
                <h4 class="card-title">Krijg een gratis kapsel na 10 keren !</h4>
                <div class="row section-box" id="firstRow">
                </div>
                <div class="row section-box" id="secondRow">
                </div>
            </div>
        </div>
        <div class="mt-5">
            <button type="button" class="btn btn-primary">Historiek</button>
            <button type="button" class="btn btn-primary">Scan een nieuwe QR code</button>
        </div>
    </div>
</body>

</html>