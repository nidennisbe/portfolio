<script>
window.fbAsyncInit = function() {
    FB.init({
        appId      : '1953263311555456',
        cookie     : true,
        xfbml      : true,
        version    : 'v2.8'
    });
    FB.AppEvents.logPageView();
};

(function(d, s, id){
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) {return;}
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));


FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
});

function checkLoginState() {
    FB.getLoginStatus(function(response) {
        statusChangeCallback(response);
    });
}


</script>

