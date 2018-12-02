@extends('layouts.app')

@section('content')
<!-- Facebook API script and functions -->
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
            document.getElementById("fb_login").style.display = "none";
        }
        else {
            document.getElementById("settings").style.display = "none";
            document.getElementById("logout").style.display = "none";
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
                <a class="pull-left" href="/"><img src="https://i.ibb.co/Vjz16gh/pollish-50-50-trans.png" height="50" width="50" alt="Smiley face"></a>
            </div>


            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a id= "logout" href="/" onclick="logout()"><span class="glyphicon glyphicon-log-out"></span> Log out</a></li>
                    <li><fb:login-button id = "fb_login" scope="public_profile,email" onlogin="checkLoginState();"></fb:login-button></li>
                    <li><a href="/stats">Stats <span class="sr-only">(current)</span></a></li>
                    <li><a href="about">About Us <span class="sr-only">(current)</span></a></li>
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


</div>
<!-- Stats page view -->
<div class="jumbotron">
    <div class="container text-center">
        <img src="https://image.ibb.co/kRo6gL/pollish-512-512-trans.png" height="100" width="100" alt="Smiley face">
        <h2>HEADQUARTERS</h2>
        <div id="map"></div>
        <h2>SUPPORT US!</h2>
        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
            <input type="hidden" name="cmd" value="_s-xclick">
            <input type="hidden" name="hosted_button_id" value="47NJD57NLA3WA">
            <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
        </form>
        <br>

    </div>
</div>
<!-- GOOGLE MAPS API -->
<script>
    var map;
    function initMap() {
        var options = {
            zoom:18,
            center:{lat: 58.380165,lng: 26.723081}
        }
        var map = new google.maps.Map(document.getElementById("map"), options);

        var marker = new google.maps.Marker({
            position:{lat: 58.380390,lng: 26.722705},
            map:map,
        });

        var infoWindow = new google.maps.InfoWindow({
            content: "<h2>Pollish inc.</h2><br><h3>Raekoja plats 8, 51003 Tartu</h3>"
        });

        marker.addListener("click", function(){
            infoWindow.open(map, marker);
        });
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDaKWDtG-zDppI7L7VO7P36WVqI5MMKHmY&callback=initMap"
        async defer></script>



<footer class="container-fluid bg-4 text-center">
    <p>Pollish inc. 2018</p>
</footer>
<div class="container-fluid">
</div>


@endsection
