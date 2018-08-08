<?php
    if (isset($_SESSION["id"])) {
        if ($_SESSION["type"]==="client") {
            header('Location: ../Client/StampsOverview.php');
        }
    }
?>

    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Kapper Loyalty</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="google-signin-client_id" content="YOUR_CLIENT_ID.apps.googleusercontent.com">

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
    </head>

    <body class="bg-light">
        <!-- region navbar-->
        <?php include '../Partials/Short-Navbar.php' ?>
        <!-- endregion navbar-->

        <!-- Social logins -->
        <!-- Facebook login -->
        <div id="fb-root"></div>
        <script>
            (function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s);
                js.id = id;
                js.src =
                    'https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v3.1&appId=265703437285525';
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
        <!-- Google login -->
        <script>
            function onSuccess(googleUser) {
                console.log('Logged in as: ' + googleUser.getBasicProfile().getName());
            }

            function onFailure(error) {
                console.log(error);
            }

            function renderButton() {
                gapi.signin2.render('google-loggin-btn', {
                    'scope': 'profile email',
                    'width': 265,
                    'height': 40,
                    'longtitle': true,
                    'theme': 'dark',
                    'onsuccess': onSuccess,
                    'onfailure': onFailure
                });
            }
        </script>

        <script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>
        <div class="container">
            <div class="row loginbox_content text-center">
                <div id="social-logins" class="col-md-5 mr-5 pt-4">
                    <div class="row">
                        <div class="fb-login-button social-loggin-button mb-2" data-max-rows="1" data-size="large" data-button-type="continue_with"
                            data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="false"></div>
                    </div>
                    <div class="row">
                        <div id="google-loggin-btn" class="social-loggin-button"></div>
                    </div>
                </div>

                <div id="loginForm" class="col-md-5 pt-3">
                    <form class="form-horizontal">
                        <fieldset>
                            <input id="textinput" name="textinput" type="text" placeholder="Enter User Name" class="form-control input-md">
                            <div class="spacing">
                                <br/>
                            </div>
                            <input id="textinput" name="textinput" type="text" placeholder="Enter Password" class="form-control input-md">
                            <div class="spacing">
                                <br/>
                            </div>
                            <button id="signIn-btn" name="singlebutton" class="btn btn-info btn-sm pull-right">Sign In</button>
                        </fieldset>
                    </form>
                </div>
            </div>
    </body>

    </html>