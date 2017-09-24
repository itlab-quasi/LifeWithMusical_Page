<?php
session_start();

if('POST' == $_SERVER['REQUEST_METHOD']){
  try{
    $db = new PDO('mysql:host=localhost;dbname=wpdb', 'root','root');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = "Select * from users where username= '".$_POST['username']."' and password = '".$_POST['password']."'";
    $res = $db->query($query);
    $q = $res->fetchAll();
    if(count($q) > 0){
      $_SESSION["USERNAME"] = $_POST['username'];
      header('Location: ./Main2.php');
      exit();
    }else{
      header('Location: ./error.html');
      exit();
    }
  }catch(PDOException $e){
    print "Couldn't connect: " . $e->getMessage();
  }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Life with Musical</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">
    <link href="signin.css" rel="stylesheet">
  </head>

  <body>
    <div class="site-wrapper opacity_background">
      <div class="site-wrapper-inner">
        <div class="cover-container">
          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">Life with Musical</h3>
              <nav class="nav nav-masthead">
                <a class="nav-link" href="./index.html">Home</a>
                <a class="nav-link" href="./about.html">About</a>
                <a class="nav-link" href="#">Blog</a>
                <a class="nav-link active" href="#">Login</a>
              </nav>
            </div>
          </div>

          <div class="container marketing">
            <!-- START THE FEATURETTES -->

            <div class="row featurette">
              <div class="col-md-12 margins">
              <form class="form-signin" action="login.php" method="post">
                <h2 class="form-signin-heading">Sign in</h2>
                <label for="inputEmail" class="sr-only">Admin Name</label>
                <input type="text" id="validationDefault01" class="form-control" placeholder="Admin Name" name="username" required autofocus>
                <label for="inputPassword" class="sr-only">Password</label>
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" value="remember-me"> Remember me
                  </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                <label>or</label><br>
                <a href="#">Create Account</a>
              </form>
          </div>
        </div>
          <hr class="featurette-divider">

            <!-- /END THE FEATURETTES -->

          </div><!-- /.container -->


          <div class="mastfoot">
            <div class="inner">
              <p>Cover template for <a href="https://getbootstrap.com">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</p>
            </div>
          </div>

        </div>

      </div>
    </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
