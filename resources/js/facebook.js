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
