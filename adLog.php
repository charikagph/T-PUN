<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>T-pun Company (pvt) Ltd</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">

    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
<meta name="google-signin-client_id" content="732732400691-uvatg5v9qt21aab526r61m2e5ia4812a.apps.googleusercontent.com">
  
</head>

<body>
       

    <!-- Start your project here-->

    <div style="height: 100vh">
      
            <script src="https://apis.google.com/js/platform.js" async defer></script>
<script>
function onSignIn(googleUser) {
  var profile = googleUser.getBasicProfile();
  console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
  console.log('Name: ' + profile.getName());
  console.log('Image URL: ' + profile.getImageUrl());
  console.log('Email: ' + profile.getEmail());
}
function signOut() {
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
      console.log('User signed out.');
    });
  }
</script>
<center>
    <br>
    <br>
    <br>
<h1>You can Easy login with us</h1><br>
<div class="g-signin2" data-onsuccess="onSignIn"></div>

<br>
    <br>
    <br>
  <div class="widget-wrapper">
                        <h4>Special Users</h4>
                        <br>
                        <div class="card">
                            <form action="dbconnection/logadmin.php" method="POST">
                            <div class="card-block">
                                <p><strong>Continue your login</strong></p>
                                <p>Once a week we will send you a summary of the most useful news</p>
                                <div class="md-form">
                                    
                                    <input type="email" id="form1" class="form-control" name="email">
                              <label for="form1">Your Email</label>
                                </div>
                                <div class="md-form">
                                    
                                    <input type="password" id="form2" class="form-control" name="password">
                                    <label for="form2">Your password</label>
                                </div>
                                <button type="submit" class="btn btn-primary" name="submit">Submit</button>

                            </div>
                            </form>
                        </div>
                    </div>
</center>
                </div>


    <!-- /Start your project here-->

  <!--Footer-->
    <footer class="page-footer center-on-small-only primary-color-dark">

        
        <hr>

        <!--Call to action-->
        <div class="call-to-action">
            <h4>Material Design for Bootstrap</h4>
            <ul>
                <li>
                    <h5>Get our UI KIT for free</h5></li>
                <li><a target="_blank" href="http://mdbootstrap.com/getting-started/" class="btn btn-danger">Sign up!</a></li>
                <li><a target="_blank" href="http://mdbootstrap.com/material-design-for-bootstrap/" class="btn btn-default">Learn more</a></li>
            </ul>
        </div>
        <!--/.Call to action-->

        <!--Copyright-->
        <div class="footer-copyright">
            <div class="container-fluid">
                © 2015 Copyright: <a href="http://www.MDBootstrap.com"> MDBootstrap.com </a>

            </div>
        </div>
        <!--/.Copyright-->

    </footer>
    <!--/.Footer-->
    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>

    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/tether.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>


</body>

</html>