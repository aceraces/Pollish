@extends('layouts.app')

@section('content')
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
                <a class="pull-left" href="/"><img src="https://image.ibb.co/kRo6gL/pollish-512-512-trans.png" height="50" width="50" alt="Smiley face"></a>
            </div>


            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a id= "logout" href="/" onclick="logout()"><span class="glyphicon glyphicon-log-out"></span> Log out</a></li>
                    <li><embed data-fb="login-button" data-id = "fb_login" data-scope="public_profile,email" data-onlogin="checkLoginState();" /></li>
                    <li><a href="/stats">Stats <span class="sr-only">(current)</span></a></li>
                    <li><a id="settings" href="/settings">Settings <span class="sr-only">(current)</span></a></li>

                </ul>
                <div id="google_translate_element" style="width:158px!important">

                </div><script>
                    function googleTranslateElementInit() {
                        new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
                    }
                </script>
                <script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</header>


<!-- Logged in Existing Polls view -->
<div class="jumbotron" id = "jumbotron_logged_in">
    <div class="container text-center">
        <img src="https://image.ibb.co/kRo6gL/pollish-512-512-trans.png" alt="Smiley face">
        <h1>EXISTING POLLS(in)</h1>

    </div>




</div>
<!-- Logged out Existing Polls view -->
<div class="jumbotron" id = "jumbotron_logged_out">

    <div class="container text-center">
        <img src="https://image.ibb.co/kRo6gL/pollish-512-512-trans.png" alt="Smiley face">
    </div>
</div>



<footer class="container-fluid bg-4 text-center">
    <p>Pollish inc. 2018</p>
</footer>
<div class="container-fluid">
</div>



@endsection