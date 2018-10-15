<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pollish</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style media="screen">
        #fb_login{margin-top: 12px}
        #logout, #settings(display: none)
    </style>

</head>
<body>
<!-- Facebook API script and functions-->
<script>
    window.fbAsyncInit = function() {
        FB.init({
            appId      : '559098287881416',
            cookie     : true,
            xfbml      : true,
            version    : 'v3.1'
        });


        FB.getLoginStatus(function(response) {
            statusChangeCallback(response);
        });

    };

    (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

    function statusChangeCallback(response) {
        if (response.status === 'connected'){
            setElements(true);
            console.log("Logged in");
        }
        else {
            setElements(false);
            console.log("Not loged in");
        }
    }

    function checkLoginState() {
        FB.getLoginStatus(function(response) {
            statusChangeCallback(response);
        });
    }

    function setElements(loginInfo){
        if (loginInfo){
            document.getElementById("settings").style.display = "block";
            document.getElementById("logout").style.display = "block";
            document.getElementById("jumbotron_logged_out").style.display = "none";
            document.getElementById("jumbotron_logged_in").style.display = "block";
            document.getElementById("fb_login").style.display = "none";
        }
        else {
            document.getElementById("settings").style.display = "none";
            document.getElementById("logout").style.display = "none";
            document.getElementById("jumbotron_logged_in").style.display = "none";
            document.getElementById("jumbotron_logged_out").style.display = "block";
            document.getElementById("fb_login").style.display = "block";
        }
    }

    function logout(){
        FB.logout(function(response){
            setElements(false);
        });
    }


</script>


<header>


    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="pull-left" href="index.php"><img src="https://image.ibb.co/kRo6gL/pollish-512-512-trans.png" height="50" width="50"></a>
            </div>


            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a id= "logout" href="index.php" onclick="logout()"><span class="glyphicon glyphicon-log-out"></span> Log out</a></li>
                    <li><fb:login-button
                            id = "fb_login"
                            scope="public_profile,email"
                            onlogin="checkLoginState();">
                        </fb:login-button></li>
                    <li><a href="stats.php">Stats <span class="sr-only">(current)</span></a></li>
                    <li><a id="settings" href="settings.php">Settings <span class="sr-only">(current)</span></a></li>

                </ul>
                <div id="google_translate_element" style="width:158!important">

                </div><script type="text/javascript">
                    function googleTranslateElementInit() {
                        new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
                    }
                </script>
                <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</header>


<!-- Logged in home view -->
<div class="jumbotron" id = "jumbotron_logged_in">
    <div class="container text-center">
        <img src="https://image.ibb.co/kRo6gL/pollish-512-512-trans.png" height="100" width="100">
        <h2>YOUR AVATAR</h2>
        <img src="https://image.ibb.co/efmFQf/AVATAR.png" class="img-circle" height="250" width="250">
        <h2>UPLOAD A NEW AVATAR</h2>

    </div>


</div>

<!-- Logged out home view -->
<div class="jumbotron" id = "jumbotron_logged_out">

    <div class="container text-center">
        <img src="https://image.ibb.co/kRo6gL/pollish-512-512-trans.png">
    </div>
</div>



<footer class="container-fluid bg-4 text-center">
    <p>Pollish inc. 2018</p>
</footer>
<div class="container-fluid">
</div>

</body>
</html>