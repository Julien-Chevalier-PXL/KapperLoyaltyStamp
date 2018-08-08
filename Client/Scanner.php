<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Scanner</title>

    <!-- Bootstrap -->
    <link href="../bootstrap-4.1.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../bootstrap-4.1.1/js/bootstrap.min.js"></script>

    <!-- Font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
        crossorigin="anonymous">

    <link href="../Stylesheet/Style.css" rel="stylesheet">

    <script type="text/javascript" src="../Scripts/instascan.min.js"></script>

    <script src="../Scripts/ScannerScript.js"></script>
</head>

<body class="bg-light">
    <!-- region navbar-->
    <?php include '../Partials/Client-Navbar.php' ?>
    <!-- endregion navbar-->

    <div id="container" class="container">
        <div id="jbtContainer" class="jumbotron">
            <h1>QR Code scanner</h1>
            <p class="lead">Please scan the QR code given by the barber.</h3>
                <hr class="my-4">
                <div class="text-center">
                    <button type="button" id="btnStart" class="btn btn-primary">
                        <span id="startStopSpan">Start</span> the scanner</button>
                    <br>
                    <!-- Div to show the scanner -->
                    <video id="vid-stream" class="col-12 col-md-10 mt-3"></video>
                </div>

        </div>

    </div>

</body>

</html>