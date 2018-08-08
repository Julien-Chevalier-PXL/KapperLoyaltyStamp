<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Kapper Loyalty - QR Generator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="../manifest.json">

    <!-- Bootstrap -->
    <link href="/LoyaltyKapperNew/bootstrap-4.1.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/LoyaltyKapperNew/bootstrap-4.1.1/js/bootstrap.min.js"></script>

    <!-- Font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
        crossorigin="anonymous">

    <link href="/LoyaltyKapperNew/Stylesheet/Style.css" rel="stylesheet">


    <script src="../Scripts/qrcode.min.js"></script>
    <script src="../Scripts/qrcode.js"></script>
</head>

<body class="bg-light">
    <!-- region navbar-->
    <?php include '../Partials/Kapper-Navbar.php' ?>
    <!-- endregion navbar-->
    <div class="container">
        <button id="btnGenerate" class="btn btn-primary">Generate QR Code</button>
        <div id="qrcode" class="mt-3"></div>
    </div>

    <script type="text/javascript">
        $("#btnGenerate").on('click', function () {
            var qrMessage = "Test";
            new QRCode(document.getElementById("qrcode"), qrMessage);
        });
    </script>
</body>

</html>